<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.css">
        <link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.min.css">
        
        <script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
        <script type="text/javascript" src="/public/lib/Validform/5.3.2/Validform.js"></script>
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
   
    </head>
    <body>
        <div class="container ui-sortable">
            <div class="panel panel-default">
                <div class="panel-header">表单</div>
                <div class="panel-body">
                        <form action="/home/index/addblog" method="post" class="form form-horizontal responsive" id="demoform" novalidate="novalidate">
                            <div class="row cl">
                                    <label class="form-label col-xs-3">邮箱：</label>
                                    <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" placeholder="@" name="email" id="email" autocomplete="off">
                                    </div>
                            </div>
                            <div class="row cl">
                                    <label class="form-label col-xs-3">用户名：</label>
                                    <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" placeholder="4~16个字符，字母/中文/数字/下划线" name="username" id="username">
                                    </div>
                            </div>
                            <div class="row cl">
                                    <label class="form-label col-xs-3">手机：</label>
                                    <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" autocomplete="off" placeholder="手机" name="telephone" id="telephone">
                                    </div>
                            </div>
                            <div class="row cl">
                                    <label class="form-label col-xs-3">密码：</label>
                                    <div class="formControls col-xs-8">
                                            <input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password" id="password">
                                    </div>
                            </div>
                            <div class="row cl">
                                    <label class="form-label col-xs-3">密码验证：</label>
                                    <div class="formControls col-xs-8">
                                            <input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password2" id="password2">
                                    </div>
                            </div>
                            <div class="row cl">
                                    <div class="col-xs-8 col-xs-offset-3">
                                            <input class="btn btn-primary" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                                    </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    
        
        <script type="text/javascript" src="/public/lib/Validform/5.3.2/Validform.js"></script>
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
        <script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
        <script>
    $(function(){
      $("#menu-jquery dt").addClass("selected");
      $("#menu-jquery dd").show();

      $(".textarea").Huitextarealength({
        minlength:10,
        maxlength:200.
      });
      $("#demoform").validate({
        rules: {
          email: {
            required: true,//必填字段
            email: true,
          },
          username:{
            required: true,
            minlength: 4,
            maxlength:16
          },
          telephone:{
            required: true,
            isMobile: true
          },
          password:{
            required: true
          },
          password2:{
            required: true,
            equalTo: "#password"
          }

        },
        onkeyup:false,
        focusCleanup:true,
        success:"valid",
        submitHandler:function(form){
          $("#modal-shenqing-success").modal("show");
          $(form).ajaxSubmit();
        }
      });
    });
  </script>
    </body>
</html>