<?php /*a:3:{s:58:"D:\gitee\oa\txzh_oa\application\home\view\index\index.html";i:1552639602;s:58:"D:\gitee\oa\txzh_oa\application\home\view\common\meta.html";i:1552630136;s:60:"D:\gitee\oa\txzh_oa\application\home\view\common\footer.html";i:1552639549;}*/ ?>
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
<script src="/static/home/txzh/base.js"></script>
<div id="wrapper" class="am-text-sm">
    <div class="am-g">
        <div class="am-u-sm-12 am-u-sm-centered">

            <div class="am-panel am-panel-default">
                <div class="am-panel-bd am-text-center">
                    <div class="am-g">
                        <div class="am-u-sm-3">
                            <a style="cursor:pointer;text-decoration:none;" onclick="ticket_loc(-1)">
                                <div class="am-text-xxxl"><?php echo htmlentities($num); ?></div>
                                <div>待解决</div>
                            </a>
                        </div>
                        <div class="am-u-sm-3">
                            <a style="cursor:pointer;text-decoration:none;" onclick="ticket_loa(2)">
                                <div class="am-text-xxxl"><?php echo htmlentities($huifuNum); ?></div>
                                <div>待回复</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="am-g am-margin-bottom am-g-collapse">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-sm">
                            <a href="" class="am-btn am-btn-white am-disabled">全部</a>
                            <a href='<?php echo url("index"); ?>?keywords=1' class="am-btn am-btn-white ">今天</a>
                            <a href='<?php echo url("index"); ?>?keywords=-1' class="am-btn am-btn-white ">昨天</a>
                            <a href='<?php echo url("index"); ?>?keywords=7' class="am-btn am-btn-white ">本周</a>
                        </div>
                    </div>
                </div>

                <div class="am-u-sm-12 am-u-md-4">
                    <form>
                        <div class="am-input-group am-input-group-sm">
                            <input type="hidden" name="g" value="Form">
                            <input type="hidden" name="m" value="Member">
                            <input type="hidden" name="a" value="index">
                            <input type="text" name="keyword" placeholder="请输入工单编号或者工单内容" value="" class="am-form-field">
                            <span class="am-input-group-btn">
                        <button class="am-btn am-btn-default" type="submit"><span class="am-icon-search"></span></button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="am-panel am-panel-default">
                <table class="am-table">
                    <tbody>
                    <tr>
                        <th class="am-show-lg-only">工单编号</th>
                        <th class="am-show-lg-only">相关产品</th>
                        <th>问题内容</th>
                        <th class="am-show-lg-only">状态</th>
                        <th class="am-show-lg-only">提交时间</th>
                        <th class="am-show-lg-only">操作</th>
                    </tr>
                    <?php if(count($data) >0): if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td class="am-show-lg-only">
                                    <?php echo htmlentities($vo['number']); ?>
                                </td>
                                <td>
                                    <?php echo htmlentities($vo['ModelName']); ?>
                                </td>
                                <td>
                                    <a style="cursor:pointer;text-decoration:none;" href=""><?php echo htmlentities($vo['title']); ?></a>
                                </td>
                                <td class="am-show-lg-only"><?php echo htmlentities($vo['StatusA']); ?></td>
                                <td class="am-show-lg-only"><?php echo htmlentities($vo['SubmitTime']); ?></td>
                                <td class="am-show-lg-only">
                                    <a style="cursor:pointer;text-decoration:none;" onclick="javascript:loca_tick(this);" id="<?php echo htmlentities($vo['number']); ?>">查看详情</a>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; else: ?>
                    <tr>
                        <td colspan="6" style="text-align: center">无提交工单</td>
                    </tr>

                    <?php endif; ?>


                    </tbody>
                </table>
            </div>
            <ul class="am-pagination am-pagination-right am-text-sm">
                <?php echo $page; ?>
            </ul>

        </div>
    </div>
</div>
<footer class="my-footer pescms-footer-2">
    <small>© Copyright 2019. Power by <a href="#" target="_blank">TXZH</a>
    </small>
</footer>
<script>
    function loca_tick(e){
        window.location.href = '<?php echo url("ticket/index"); ?>?id='+e.id;
    }

    function ticket_tick(e){
        alert(e.class);
        window.location.href = '<?php echo url("ticket/index"); ?>?id='+e.id;
    }

    function ticket_loc() {
        var u = getUrlParam('keywords');
        location.href = '<?php echo url("index"); ?>?v=-1&keywords='+u;
    }

    function ticket_loa() {
        var u = getUrlParam('keywords');
        location.href = '<?php echo url("index"); ?>?v=2&keywords='+u;
    }

    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg);  //匹配目标参数

        if (r != null)
            return unescape(r[2]);
        return null; //返回参数值
    }
</script>
</body></html>