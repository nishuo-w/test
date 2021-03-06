<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <link rel="Shortcut Icon" href="/favicon.ico" />
        <!--[if lt IE 9]>
        <script type="text/javascript" src="lib/html5shiv.js"></script>
        <script type="text/javascript" src="lib/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
        <link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />

        <!--[if IE 6]>
        <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
        
        <title>后台--学生学习心得分享平台</title>
        <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
        <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">

        <style>
            input{
                margin-bottom:20px;
            }
            .btn{
                margin:20px auto;
            }
        </style>
    </head>
    <body>
    <header class="navbar-wrapper">
        <div class="navbar navbar-fixed-top">
            <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">学生学习心得分享平台</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> 
                <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
                <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                    <ul class="cl">              
                        <li class="dropDown dropDown_hover">
                            <a href="#" class="dropDown_A"><?php echo ($username); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <!--<li><a href="/home/admin/editPass">修改密码</a></li>-->
                                <!--<li><a href="javascript:;" onclick="pass_edit('修改密码', '/home/admin/admin/id/<?php echo ($vo["id"]); ?>', '1', '800', '500')">修改密码</a></li>-->
                                <li><a data-toggle="modal" data-target="#reg">修改密码</a></li>
                                <li><a href="/home/admin/logout" >退出</a></li>
                            </ul>
                        </li>
                        <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                        <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                                <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                                <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                                <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                                <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                                <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
        
<!--修改密码模态框-->
<!-- Modal -->
<div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">修改密码</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="form-editPass" enctype="multipart/form-data" action="/home/login/editPass" method="post">

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>输入原密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>新密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" name="newPass" id="newPass">
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" value=""  placeholder="确认新密码"  name="newPass2">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
                    <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
</div>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">

        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="/home/admin/welcome" data-title="主页" href="javascript:void(0)">主页</a></li>
                    <li><a data-href="/home/admin/newslist" data-title="日志管理" href="javascript:void(0)">日志管理</a></li>
                    <li><a data-href="/home/comment/index" data-title="评论管理" href="javascript:void(0)">评论管理</a></li>
                    <li><a data-href="/home/admin/menulist" data-title="栏目管理" href="javascript:void(0)">栏目管理</a></li>
                    <li><a data-href="/home/admin/adminlist" data-title="用户管理" href="javascript:void(0)">用户管理</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
        <div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
        <section class="Hui-article-box">
            <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
                <div class="Hui-tabNav-wp">
                    <ul id="min_title_list" class="acrossTab cl">
                        <li class="active">
                            <span title="我的桌面" data-href="/home/admin/welcome">我的桌面</span>
                            <em></em>
                        </li>
                    </ul>
                    
                    <span class='glyphicon glyphicon-refresh' style='float:right;'><a href="<?php echo U('admin/clears');?>">清除缓存</a></span>
                </div>
                <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
            </div>
            <div id="iframe_box" class="Hui-article">
                <div class="show_iframe">
                    <div style="display:none" class="loading"></div>
                    <iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
                </div>
            </div>
        </section>

        <div class="contextMenu" id="Huiadminmenu">
            <ul>
                <li id="closethis">关闭当前 </li>
                <li id="closeall">关闭全部 </li>
            </ul>
        </div>
        
         <!--_footer 作为公共模版分离出去--> 
        <script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
        <script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="/public/static/h-ui/js/H-ui.min.js"></script> 
        <script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

        <!--请在下方写此页面业务相关的脚本-->
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

        <script type="text/javascript" src="/public/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
        
        <script type="text/javascript">
            $(function () {
                $('.skin-minimal input').iCheck({
                    checkboxClass: 'icheckbox-blue',
                    radioClass: 'iradio-blue',
                    increaseArea: '20%'
                });

                $("#form-editPass").validate({
                    rules: {
                         password: {
                            required: true
                        },
                        newPass: {
                            required: true
                        },
                        newPass2: {
                            required: true,
                            equalTo: "#newPass"
                        }
                    },
                    onkeyup: false,
                    focusCleanup: true,
                    success: "valid"
//               
                });
            });
        </script> 
        
        <script>
             function pass_edit(title, url, id, w, h) {
                layer_show(title, url, w, h);
            }
        </script>
        <script type="text/javascript">
            $(function () {
                $("dt").click();
            });
            /*个人信息*/
            function myselfinfo() {
                layer.open({
                    type: 1,
                    area: ['300px', '200px'],
                    fix: false, //不固定
                    maxmin: true,
                    shade: 0.4,
                    title: '查看信息',
                    content: '<div>管理员信息</div>'
                });
            }

            /*资讯-添加*/
            function article_add(title, url) {
                var index = layer.open({
                    type: 2,
                    title: title,
                    content: url
                });
                layer.full(index);
            }
            /*图片-添加*/
            function picture_add(title, url) {
                var index = layer.open({
                    type: 2,
                    title: title,
                    content: url
                });
                layer.full(index);
            }
            /*产品-添加*/
            function product_add(title, url) {
                var index = layer.open({
                    type: 2,
                    title: title,
                    content: url
                });
                layer.full(index);
            }
            /*用户-添加*/
            function member_add(title, url, w, h) {
                layer_show(title, url, w, h);
            }
        </script> 


</body>
</html>