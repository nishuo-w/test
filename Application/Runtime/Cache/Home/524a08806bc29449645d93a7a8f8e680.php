<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
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
        <title>注册页面</title>
        <style>
            body{background: #8DA6CE}
            .reg{width:600px;height:500px;margin-top:100px;position:relative;}
            .msg{position:absolute;right:16px;bottom:16px;}
        </style>
    </head>
    <body>

            <div class="container panel panel-default reg ">
                <div class=""><h3 style="border-bottom:1px solid #ccc;text-align: center;line-height: 50px">用户注册</h3></div>
                <div class="panel-body">
                <form class="form form-horizontal" id="form-admin-add" enctype="multipart/form-data" action="/home/login/registerdata" method="post">
                    <div class="row cl">
                        <label class="form-label col-xs-3"><span class="c-red">*</span>邮箱：</label>
                        <div class="formControls col-xs-8">
                                <input type="text" class="input-text" placeholder="@" name="email" id="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-3"><span class="c-red">*</span>用户名：</label>
                        <div class="formControls col-xs-8">
                            <input type="text" class="input-text" value="" placeholder="" id="adminName" name="nickname" >
                        </div>
                    </div>
                    <div class="row cl">
                            <label class="form-label col-xs-3"><span class="c-red">*</span>手机：</label>
                            <div class="formControls col-xs-8">
                                    <input type="text" class="input-text" autocomplete="off" placeholder="手机" name="phone" id="telephone">
                            </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-3"><span class="c-red">*</span>密码：</label>
                        <div class="formControls col-xs-8">
                            <input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="password">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-3"><span class="c-red">*</span>确认密码：</label>
                        <div class="formControls col-xs-8">
                            <input type="password" class="input-text" autocomplete="off" value=""  placeholder="确认新密码" id="password2" name="password2">
                        </div>
                    </div>

                    <!--上传头像-->
                    <div class="row cl">
                        <label class="form-label col-xs-3"><span class="c-red">*</span>头像：</label>
                        <div class="formControls col-xs-8">
                            <input type="file" name="pic" />
                        </div>
                    </div>

                    <div class="row cl" style="margin-top:40px;">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                            <input class="btn btn-danger radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;注册&nbsp;&nbsp;">
                        </div>
                    </div>
                </form>
                
                <p class="msg">已有账户，<a href="/home/login/index" style="color:#0062cc">立即登录</a></p>
            </div>
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
        <script type="text/javascript">
            $(function () {
                $('.skin-minimal input').iCheck({
                    checkboxClass: 'icheckbox-blue',
                    radioClass: 'iradio-blue',
                    increaseArea: '20%'
                });

                $("#form-admin-add").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        username: {
                            required: true,
                            minlength: 4,
                            maxlength: 16
                        },
                        telephone:{
                            required: true,
                            isMobile: true
                          },
                        password: {
                            required: true
                        },
                        password2: {
                            required: true,
                            equalTo: "#password"
                        }
                    },
                    onkeyup: false,
                    focusCleanup: true,
                    success: "valid",
//                    submitHandler: function (form) {
//                        $(form).ajaxSubmit({
//                            type: 'post',
//                            url: "xxxxxxx",
//                            success: function (data) {
//                                layer.msg('添加成功!', {icon: 1, time: 1000});
//                            },
//                            error: function (XmlHttpRequest, textStatus, errorThrown) {
//                                layer.msg('error!', {icon: 1, time: 1000});
//                            }
//                        });
//                        var index = parent.layer.getFrameIndex(window.name);
//                        parent.$('.btn-refresh').click();
//                        parent.layer.close(index);
//                    }
                });
            });
        </script> 
        <!--/请在上方写此页面业务相关的脚本-->
    </body>
</html>