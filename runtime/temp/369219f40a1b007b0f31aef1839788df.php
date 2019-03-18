<?php /*a:1:{s:58:"D:\gitee\oa\txzh_oa\application\home\view\login\index.html";i:1552534582;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://192.168.4.109:8088/?m=Login&a=index -->
<html class="js cssanimations"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>登录帐号 - TXZH</title>

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
<body><header class="am-topbar">
    <h1 class="am-topbar-brand">
        <a href="http://192.168.4.109:8088/">login</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: &#39;#ticket-topbar-collapse&#39;}">
        <span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse am-topbar-right am-text-sm" id="ticket-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">
            <li>
                <!--<a href='<?php echo url("/home/login/register"); ?>'><i class="am-icon-user-plus"></i> 注册</a>-->
            </li>
        </ul>
    </div>

</header><div class="login">
    <div class="am-g  login-form-wrap">
        <div class="am-u-lg-3 am-hide-md-dow">

        </div>
        <div class="am-u-sm-12 am-u-lg-4">
            <div class="am-panel am-panel-default login-form">
                <div class="am-text-center">
                    <h2 class="login-text-danger">登录帐号</h2>
                    <form class="am-form ajax-submit am-padding" id="login-enterplorer" method="post" data-am-validator="" novalidate="novalidate">
                        <!--<input type="hidden" name="__token__" value="<?php echo htmlentities(app('request')->token()); ?>">  -->
                        <div class="am-input-group am-margin-bottom">
                        <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                        <input type="text" name="username" class="am-form-field" placeholder="账号" required="required" pattern="^((([a-zA-Z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-zA-Z]|\d|[!#\$%&amp;&#39;\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$">
                    </div>

                        <div class="am-input-group am-margin-bottom">
                            <span class="am-input-group-label"><i class="am-icon-lock am-icon-fw"></i></span>
                            <input type="password" name="password" class="am-form-field" placeholder="登录密码" required="required">
                        </div>

                        <!--<div class="am-input-group am-margin-bottom">-->
                        <!--<span class="am-input-group-label"><i class="am-icon-shield am-icon-fw"></i></span>-->
                        <!--<input type="text" class="am-form-field login-verify" name="verify" placeholder="验证码" maxlength="7">-->
                        <!--<img src="/static/home/txzh/saved_resource" class="refresh-verify">-->
                        <!--</div>-->
                        <div class="am-g">
                            <div class="am-u-sm-6 am-u-md-6 am-u-lg-6" style="border-right: 1px solid silver">
                                <a href='<?php echo url("login/register"); ?>'>注册帐号</a>
                            </div>
                            <!--<div class="am-u-sm-6 am-u-md-6 am-u-lg-6">-->
                            <!--<a href="http://192.168.4.109:8088/?m=Login&amp;a=findpw">忘记密码</a>-->
                            <!--</div>-->
                        </div>

                        <input type="button" id="button-a" value="提交" class="am-btn am-btn-success am-btn-block am-btn-sm am-margin-top-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/home/layer/layer.js"></script>
<script>
    $('#button-a').click(function () {
        var data =$('#login-enterplorer').serializeArray();
        var url = '<?php echo url("checkLogin"); ?>';
        $.post(url,data,function (res) {
            if(res.code === 1){
                layer.msg(res.msg,function () {
                    window.location.href = '<?php echo url("index/index"); ?>'
                })
            }else{
                layer.msg(res.msg);
            }
        })
    })
</script>
</body>
</html>