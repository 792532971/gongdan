<?php /*a:3:{s:62:"D:\gitee\oa\txzh_oa\application\home\view\category\ticket.html";i:1552641816;s:58:"D:\gitee\oa\txzh_oa\application\home\view\common\meta.html";i:1552630136;s:60:"D:\gitee\oa\txzh_oa\application\home\view\common\footer.html";i:1552639549;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://192.168.4.109:8088/?m=Login&a=index -->
<html class="js cssanimations"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>TXZH</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <link rel="icon" type="image/png" href="http://192.168.4.109:8088/favicon.ico">
    <link rel="stylesheet" href="/static/home/txzh/amazeui.min.css">
    <link rel="stylesheet" href="/static/home/txzh/app.css">
    <link rel="stylesheet" href="/static/home/txzh/index.css">
    <link rel="stylesheet" href="/static/home/txzh/ui-dialog.css">
    <link rel="stylesheet" href="/static/home/txzh/amazeui.datetimepicker.css">

    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="/static/home/txzh/jquery.min.js"></script>

    <!--<![endif]-->
    <!--[if lte IE 8 ]>
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="/static/home/txzh/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <script src="/static/home/txzh/amazeui.min.js"></script>

    <script src="/static/home/txzh/dialog-min.js"></script>
    <script src="/static/home/txzh/dialog-plus-min.js"></script>
    <script src="/static/home/txzh/amazeui.datetimepicker.min.js"></script>
    <script src="/static/home/txzh/spectrum.js"></script>
    <link rel="stylesheet" href="/static/admin/lib/layui/css/layui.css">
    <script src="/static/admin/lib/layui/layui.js"></script>
    <!--百度上传控件-->
    <link rel="stylesheet" href="/static/home/txzh/webuploader.css">
    <script src="/static/home/txzh/webuploader.js"></script>
    <script src="/static/home/txzh/AMUIwebuploader.js"></script>

    <script>
        $(function(){
            $.webuploaderConfig({
                server:'/?m=Upload&a=ueditor&method=POST&action=uploadimage'
            });
        })
    </script>
    <!--百度上传控件-->

    <script src="/static/home/txzh/app.js"></script>
</head>
<body>
<header class="am-topbar">
    <h1 class="am-topbar-brand">
        <a href='<?php echo url("index/index"); ?>'>TXZH</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: &#39;#ticket-topbar-collapse&#39;}">
        <span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse am-topbar-right am-text-sm" id="ticket-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">
            <li>
                <a href='<?php echo url("category/index"); ?>'><i class="am-icon-yelp"></i> 提交工单</a>
            </li>

            <li>
                <a href='<?php echo url("index/index"); ?>'><i class="am-icon-fire"></i> 我的工单</a>
            </li>
            <li>
                <a href=""><i class="am-icon-user"></i> 个人信息</a>
            </li>
            <li>
                <a href='<?php echo url("login/logout"); ?>'><i class="am-icon-sign-out"></i> 退出登录</a>
            </li>
        </ul>
    </div>

</header>
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    /*#upBox{*/
    /*text-align: center;*/
    /*width:500px;*/
    /*padding: 20px;*/
    /*border: 1px solid #666;*/
    /*margin: auto;*/
    /*margin-top: 150px;*/
    /*margin-bottom: 200px;*/
    /*position: relative;*/
    /*border-radius: 10px;*/
    /*}*/
    #inputBox{
        width: 100%;
        height: 40px;
        border: 1px solid cornflowerblue;
        color: cornflowerblue;
        border-radius: 20px;
        position: relative;
        text-align: center;
        line-height: 40px;
        overflow: hidden;
        font-size: 16px;
    }
    #inputBox input{
        width: 114%;
        height: 40px;
        opacity: 0;
        cursor: pointer;
        position: absolute;
        top: 0;
        left: -14%;

    }
    #imgBox{
        text-align: left;
    }
    .imgContainer{
        display: inline-block;
        width: 120px;
        height: 120px;
        margin-left: 1%;
        border: 1px solid #666666;
        position: relative;
        margin-top: 30px;
        box-sizing: border-box;
    }
    .imgContainer img{
        width: 120px;
        height: 120px;
        cursor: pointer;
    }
    .imgContainer p{
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 30px;
        background: black;
        text-align: center;
        line-height: 30px;
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        display: none;
    }
    .imgContainer:hover p{
        display: block;
    }
    #btn-submit{
        display: inline-block;
        text-align: center;
        line-height: 30px;
        outline: none;
        width: 100px;
        height: 30px;
        background: cornflowerblue;
        border: 1px solid cornflowerblue;
        color: white;
        cursor: pointer;
        margin-top: 30px;
        border-radius: 5px;
    }
</style>
<div id="wrapper" class="am-text-sm">
    <div class="am-g">
        <div class="am-u-sm-12 am-u-sm-centered">
            <div class="am-panel am-panel-default">
                <div class="am-panel-bd">
                    <ol class="am-breadcrumb am-text-default am-margin-bottom-0 categort-breadcrumb">
                        <li class="am-active">
                            <a href="http://192.168.4.109:8088/?m=Category&amp;a=index"><span class="am-badge am-badge-primary am-round am-text-default">1</span> 选择问题类型</a>
                        </li>
                        <!--<li class="am-active">-->
                            <!--<a href="http://192.168.4.109:8088/?m=Category&amp;a=index&amp;id=1&amp;back_url=Lz9tPUNhdGVnb3J5JmE9aW5kZXg="><span class="am-badge am-badge-primary am-round am-text-default">2</span> 选择对应工单</a>-->
                        <!--</li>-->
                        <li class="am-active">
                            <a href="javascript:;"><span class="am-badge am-badge-primary am-round am-text-default">2</span> 创建工单</a>
                        </li>
                    </ol>
                    <hr class="am-margin-top-0">
                    <h3>新工单 &gt; <?php echo htmlentities($data['model_name']); ?></h3>
                    <form method="POST" id="upBox" class="am-form ajax-submit am-form-horizontal" data-am-validator="" novalidate="novalidate">
                        <input type="hidden" name="number" value="<?php echo htmlentities($data['model_number']); ?>">
                        <input type="hidden" name="model_id" value="<?php echo htmlentities($model_id); ?>">
                        <div class="am-g am-g-collapse">
                            <div class="am-u-sm-12 am-u-sm-centered">
                                <div class="am-form-group">
                                    <label class="am-block">联系方式<i class="am-text-danger">*</i></label>
                                    <label class="form-radio-label am-radio-inline">
                                        <input class="form-radio" type="radio" name="contact" value=1 required="required" checked="checked">
                                        <span>邮件</span>
                                    </label>
                                    <label class="form-radio-label am-radio-inline">
                                        <input class="form-radio" type="radio" name="contact" value=3 required="required">
                                        <span>手机号</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="am-g am-g-collapse">
                            <div class="am-u-sm-12 am-u-sm-centered">
                                <div class="am-form-group">
                                    <label class="am-block">联系账号<i class="am-text-danger">*</i></label>
                                    <input id="contact_account" class="form-text-input input-leng3 am-field-valid" name="contact_account" placeholder="请填写您的联系信息,方便我们与您联系" type="text" value="792532971@qq.com" required="">
                                </div>
                            </div>
                        </div>

                        <div class="am-g am-g-collapse">
                            <div class="am-u-sm-12 am-u-sm-centered">
                                <div class="am-form-group">
                                    <label class="am-block">工单标题<i class="am-text-danger">*</i></label>
                                    <input id="title" class="form-text-input input-leng3 am-field-valid" name="title" placeholder="简单扼要描述本次工单遇到的问题" type="text" value="" required="">
                                </div>
                            </div>
                        </div>

                        <div class="am-g am-g-collapse">
                            <div class="am-u-sm-12 am-u-sm-centered">
                                <div id="inputBox" class="am-form-group am-form-file">
                                    <i class="am-icon-cloud-upload"></i> 选择要上传的文件
                                    <input type="file" id="file" multiple accept="image/png,image/jpg,image/gif,image/JPEG">
                                </div>
                                <div id="imgBox"></div>
                            </div>
                        </div>


                        <div id="gd_band" class="am-g am-g-collapse ">
                            <div class="am-u-sm-12 am-u-sm-centered">
                                <div class="am-form-group">
                                    <label class="am-block">内容描述</label>
                                    <!--<input class="form-text-input input-leng3" name="ticket_form_content" placeholder="请输入要提交的内容" type="text" value="">                                    </div>-->
                                <textarea name="ticket_form_content"></textarea>
                            </div>
                        </div>
                        <div class="am-g am-g-collapse am-margin-bottom">
                            <div class="am-u-sm-6">
                                <button type="button" id="button_gongdan" class="am-btn am-btn-primary am-btn-xs">提交</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="my-footer pescms-footer-2">
    <small>© Copyright 2019. Power by <a href="#" target="_blank">TXZH</a>
    </small>
</footer>
<script src="/static/home/txzh/uploadImg.js" type="text/javascript" charset="utf-8"></script>
<script>
        $('#title').click(function () {
            var radio = $('input:radio:checked').val();
            if(radio == 1){   //邮件
                var email = $('#contact_account').val();
                if(!email.match(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/))
                {
                    alert('联系账号格式不正确,请重新输入');
                    $("#contact_account").focus();
                }
            }
            if(radio ==3){   //手机
                var mobile = $('#contact_account').val();
                var re = isPhoneNo(mobile);
                if(re === false){
                    alert('手机格式不正确,请重新输入');
                }
            }
        });

        function isPhoneNo(phone) {
            var pattern = /^1[3456789]\d{9}$/;
            return pattern.test(phone);
        }

        // $('#button_gongdan').click(function () {
        //     var data = $('#gongdan_data').serializeArray();
        //     $.post('<?php echo url("gongdanTijiao"); ?>',data,function (result) {
        //         if(result.code === 1){
        //             alert('提交成功');
        //             window.location.href = '<?php echo url("ticket/index"); ?>?id='+result.data;
        //         }
        //     })
        // });

        imgUpload({
            inputId:'file', //input框id
            imgBox:'imgBox', //图片容器id
            buttonId:'button_gongdan', //提交按钮id
            upUrl:'/home/category/gongdanTijiao',  //提交地址
            data:'file1', //参数名
            num:"5"//上传个数
        });


        $(":radio").click(function(){
            var v = $(this).val();
            $.get('<?php echo url("radioValue"); ?>',{v:v},function (res) {
                $('#contact_account').val(res.value);
            })
        });

</script>
</body></html>