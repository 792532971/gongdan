<?php /*a:3:{s:59:"D:\gitee\oa\txzh_oa\application\home\view\ticket\index.html";i:1552646202;s:58:"D:\gitee\oa\txzh_oa\application\home\view\common\meta.html";i:1552630136;s:60:"D:\gitee\oa\txzh_oa\application\home\view\common\footer.html";i:1552639549;}*/ ?>
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
<link rel="stylesheet" href="/static/bootstrap-3.3.7-dist/css/bootstrap.css">
<script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
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
                    <div class="">
                        <a href='<?php echo url("index/index"); ?>' class="am-margin-right-xs am-text-danger"><i class="am-icon-reply"></i>返回上一页</a>
                    </div>
                    <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed am-no-layout">

                    <div class="console-step row am-margin-bottom-sm">

                        <div class="step am-u-sm-3 step-first step-active">
                            <span class="ng-binding  ">待解决</span>
                        </div>

                        <div class="step am-u-sm-3   step-pass">
                            <span class="ng-binding  ">受理</span>
                        </div>

                        <div class="step am-u-sm-3   step-pass">
                            <span class="ng-binding  ">待回复</span>
                        </div>

                        <div class="step am-u-sm-3 step-first  step-pass">
                            <span class="ng-binding  ">完成</span>
                        </div>
                    </div>

                    <div class="am-padding pt-info-panel ">
                        <div class="am-u-sm-12 am-u-sm-centered">
                            <div><span class="pt-text-explode">问题标题 : </span> <?php echo htmlentities($data['title']); ?></div>
                            <div class="am-g am-g-collapse">
                                <div class="am-u-sm-4"><span class="pt-text-explode">工单编号 : </span><?php echo htmlentities($data['number']); ?></div>
                                <div class="am-u-sm-4">
                                    <span class="pt-text-explode">提交时间 : </span><?php echo htmlentities($data['submit_time']); ?></div>
                                <div class="am-u-sm-4"><span class="pt-text-explode">工单状态 : </span><?php echo htmlentities($sta); ?>                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="am-panel am-panel-default">
                <div class="am-panel-bd">
                    <h3 class="am-margin-0">沟通记录</h3>
                </div>
                <ul class="am-list am-list-static am-text-sm am-list-hover">
                    <?php if(!empty($list)): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="<?php echo $vo['type'] == '2' ? 'am-text-gray' : ''; ?>">
                        <div class="am-g">
                            <div class="am-u-sm-1">
                                <img src="/static/home/txzh/<?php echo $vo['type'] == '2' ? 'custom.ico' : 'service.ico'; ?>" alt="" class="am-comment-avatar" width="48" height="48">
                            </div>

                            <div class="am-u-sm-11">
                                <div class="am-block">
                                    <p><span class="pt-text-explode"><?php echo htmlentities($vo['user_name']); ?>: <?php echo htmlentities($vo['ticket_chat_content']); ?></span></p>
                                </div>
                                <div class="am-block"><?php echo date('Y-m-d H:i:s',$vo['ticket_chat_time']); ?></div>
                                <?php if(isset($vo['img'])): if(is_array($vo['img']) || $vo['img'] instanceof \think\Collection || $vo['img'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                        <img onclick="imgDisplay(this)" height="100" width="120" src="<?php echo htmlentities($v['img_url']); ?>">
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                    <li class="replyRefresh" data="<?php echo htmlentities($total); ?>" style="display: none">
                        <a href="#reply" onClick="window.location.reload()" class="am-padding-0">
                            <div class="am-alert am-alert-warning am-margin-0 am-text-center">
                                有新回复
                            </div>
                        </a>
                    </li>

                </ul>
            </div>




            <div class="am-panel am-panel-default">
                <div class="am-panel-bd">
                    <h3 class="am-margin-0">补充内容</h3>
                </div>




                <ul class="am-list am-list-static am-text-sm">
                    <li>
                        <div class="am-g am-g-collapse">
                            <div class="am-u-lg-8">
                                <form class="am-form ajax-submit" method="POST" data-am-validator="" id="upBox" novalidate="novalidate">
                                    <input type="hidden" name="number" value="<?php echo htmlentities($data['number']); ?>">
                                    <div id="inputBox" class="am-form-group am-form-file">
                                        <i class="am-icon-cloud-upload"></i> 选择要上传的文件
                                        <input type="file" id="file" multiple accept="image/png,image/jpg,image/gif,image/JPEG">
                                    </div>
                                    <div id="imgBox"></div>
                                    <div class="am-form-group pt-reply-content am-form-error">
                                        <label>回复内容</label>
                                        <textarea name="content" rows="5" required="" class="am-field-error am-active"></textarea>

                                    </div>
                                    <button  style="float: right;margin-bottom: 30px;padding-top: 3px;" type="button" id="btn-submit" class="am-btn am-btn-primary am-btn-block" data-am-loading="{spinner: &#39;circle-o-notch&#39;, loadingText: &#39;提交中...&#39;, resetText: &#39;再次提交&#39;}">
                                        提交
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div></div>
<footer class="my-footer pescms-footer-2">
    <small>© Copyright 2019. Power by <a href="#" target="_blank">TXZH</a>
    </small>
</footer>
<script src="/static/home/txzh/uploadImg.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function(){
        var siteTitle = $('title').html();
        var id = '<?php echo htmlentities($id); ?>';
        setInterval(function(){
            $.get('<?php echo url("realTime"); ?>',{id:id}, function(data){
                var replyRefresh = parseInt($('.replyRefresh').attr('data'));   //3
                var newReply = parseInt(data);
                if(newReply > replyRefresh){
                    $('.replyRefresh').show();
                    $('title').html('[有新回复]'+siteTitle)
                }
            })
        }, 3000)
    });


    imgUpload({
        inputId:'file', //input框id
        imgBox:'imgBox', //图片容器id
        buttonId:'btn-submit', //提交按钮id
        upUrl:'/home/ticket/replay',  //提交地址
        data:'file1', //参数名
        num:"5"//上传个数
    })

</script>
</body></html>