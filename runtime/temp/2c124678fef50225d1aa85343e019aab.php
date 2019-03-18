<?php /*a:3:{s:61:"D:\gitee\oa\txzh_oa\application\home\view\category\index.html";i:1552639566;s:58:"D:\gitee\oa\txzh_oa\application\home\view\common\meta.html";i:1552630136;s:60:"D:\gitee\oa\txzh_oa\application\home\view\common\footer.html";i:1552639549;}*/ ?>
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

<div id="wrapper" class="am-text-sm">
    <div class="am-g">
        <div class="am-u-sm-12 am-u-sm-centered">
            <div class="am-panel am-panel-default">
                <div class="am-panel-bd">
                    <ol class="am-breadcrumb am-text-default am-margin-bottom-0 categort-breadcrumb">
                        <li class="am-active">
                            <a href="http://192.168.4.109:8088/?m=Category&amp;a=index"><span class="am-badge am-badge-primary am-round am-text-default">1</span> 选择问题类型</a>
                        </li>
                        <!--<li class="">-->
                            <!--<a href="javascript:;"><span class="am-badge am-badge-primary am-round am-text-default">2</span> 选择对应工单</a>-->
                        <!--</li>-->
                        <li class="">
                            <a href="javascript:;"><span class="am-badge am-badge-primary am-round am-text-default">2</span> 创建工单</a>
                        </li>
                    </ol>
                    <hr class="am-margin-top-0">
                    <ul class="am-avg-sm-1 am-avg-lg-4 am-thumbnails">
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a onclick="ticket(<?php echo htmlentities($vo['model_id']); ?>);" class="ticket-category">
                                <h4 class="am-margin-bottom-xs"><?php echo htmlentities($vo['model_name']); ?></h4>
                                <p class="am-margin-top-0"><?php echo htmlentities($vo['model_des']); ?></p>
                            </a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="my-footer pescms-footer-2">
    <small>© Copyright 2019. Power by <a href="#" target="_blank">TXZH</a>
    </small>
</footer>
<script>
    function ticket(id) {
        window.location.href = '<?php echo url("ticket"); ?>?id='+id;
    }
</script>
</body></html>