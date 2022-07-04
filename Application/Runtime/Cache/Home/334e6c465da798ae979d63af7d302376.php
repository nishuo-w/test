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
        <link rel="stylesheet" type="text/css" href="/public/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/pageMenu.css" />


        <!--[if IE 6]>
        <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <title>个人资料</title>
        <style>
            body{background: #8DA6CE}
            .reg{width:600px;height:500px;margin-top:100px;position:relative;}
            .msg{position:absolute;right:16px;bottom:16px;}
        </style>
    </head>
    <body>

<!-- <div class="top d-flex  row">
  <div class="left-side-nav col-md-8 col-sm-8 d-flex">
      <p class=" logo">学生学习心得分享平台</p>
      <ul class="navbar ulindex d-flex  justify-content-between ">

          <li class="nav-item ">
              <a href="/Home/Index/index/p/1.html" class="navlink  " >首 页</a>
          </li>
          <li class="nav-item active">
              <a href="index.html" class="navlink  " >新 闻</a>
          </li>
          <li class="nav-item ">
              <a href="index.html" class="navlink  " >博 问</a>
          </li>
         
          <li class="nav-item ">
              <a href="/home/index/mypage/uid/<?php echo ($userid); ?>" class="navlink  " >我 的</a>
          </li>
      </ul>
  </div>

  <ul class="navbar ulindex d-flex  justify-content-between right-side-nav col-md-4 col-sm-4">
      <li>
          <form class="form-inline "  method="get"  action="/home/index/search">
              <input class="form-control mr-sm-2" type="search" name="find" placeholder="Search" aria-label="Search">
              <button class="btn  btn-primary my-2 my-sm-0" type="submit" style="width:70px;text-align: center;background: #007bff;border-color: #007bff">搜 索</button>
          </form>
      </li>
      
      <?php if($_SESSION['userid'] ): ?><li><button class="btn  btn-primary" style="background: #007bff;border-color: #007bff"><a href="/home/index/addblog"  style="color:#fff;">写日志</a></button></li>
          <li>
              <span class="person-pic" >
                  <img src="<?php echo ($picPath[0]['pic']); ?>" width="100%" height="100%" style="border-radius: 50%;"/>
                  <ul>
                      <li><a href="/home/index/mypage/uid/<?php echo ($userid); ?>">我的主页</a></li> 
                      <li><a href="/home/index/mypage/uid/<?php echo ($userid); ?>">我的收藏</a></li> 
                      <li><a href="/home/login/logout">日志管理</a></li>
                      <li><a href="/home/User/editInfo/<?php echo ($serid); ?>">账号设置</a></li>
                      <li><a href="/home/login/logout">退出登录</a></li> 
                  </ul>
              </span>
          </li>

      <?php else: ?>
          <li><button  class="btn  btn-primary"> <a href="/home/login/allow"  style="color:#fff;"> 写日志</a></button></li>
          <li><a href="/home/login/index">登录 |</a> <a href="/home/login/register">注册</a></li><?php endif; ?>
      
  </ul>

</div> 
 <div class="container d-flex justify-content-between main">
  <div class="left-content col-md-3 col-sm-3">
    <div class="user-achievement">
        <h3 style="display: flex;">
            <div style="width: 50px;height:50px;">
                <img  src="<?php echo ($user[0]['pic']); ?>" width="100%" height="100%" style="border-radius: 50%;"/>
            </div>&nbsp;&nbsp;&nbsp;
            <a href="/home/User/editInfo/<?php echo ($serid); ?>"><?php echo ($user[0]['nickname']); ?></a>
        </h3>
        
        <p class="addblog btn-info btn-lg  text-center "><a href="/home/index/addblog" style="color:#fff;">写文章</a></p>
    </div>
    
    <div class="list-group text-center">
        <a href="#" class="list-group-item btn-info active"  > 主 页 </a>
        <a href="/home/index/mypage/uid/<?php echo ($userid); ?>" class="list-group-item list-group-item-action " >日志管理</a>
        <a href="/home/comment/commList/uid/<?php echo ($userid); ?>" class="list-group-item list-group-item-action " >评论管理</a>
        <a href="/home/User/editInfo/" class="list-group-item list-group-item-action " >个人资料</a>
        <a href="/home/index/myCollect/uid/<?php echo ($userid); ?>" class="list-group-item list-group-item-action " >收藏夹</a>
    </div>
  </div> -->

<div class="right-content panel panel-default reg ">
  <div class="">
    <h3 style="border-bottom:1px solid #ccc;text-align: center;line-height: 50px">个人资料</h3>
  </div>
  <div class="panel-body">
  <form class="form form-horizontal" id="form-admin-add" enctype="multipart/form-data" action="/home/User/editData"  method="post">
      <div class="row cl">
          <label class="form-label col-xs-3"><span class="c-red">*</span>邮箱：</label>
          <div class="formControls col-xs-8">
                  <input type="text" class="input-text" placeholder="@" name="email" id="email" autocomplete="off" value="<?php echo ($data[0]['email']); ?>">
          </div>
      </div>
      <div class="row cl">
          <label class="form-label col-xs-3"><span class="c-red">*</span>用户名：</label>
          <div class="formControls col-xs-8">
              <input type="text" class="input-text" placeholder="" id="adminName" name="nickname" value="<?php echo ($data[0]['nickname']); ?> ">
          </div>
      </div>
      <div class="row cl">
              <label class="form-label col-xs-3"><span class="c-red">*</span>手机：</label>
              <div class="formControls col-xs-8">
                      <input type="text" class="input-text" autocomplete="off" placeholder="手机" name="phone" id="telephone" value="<?php echo ($data[0]['phone']); ?>">
              </div>
      </div>
      

      <!--上传头像-->
      <div class="row cl">
          <label class="form-label col-xs-3"><span class="c-red">*</span>头像：</label>
          <div class="formControls col-xs-8">
            <img src="<?php echo ($data[0]['pic']); ?>" alt="" width="50" height="50" style="border-radius: 50%;">
              <input type="file" name="pic" placeholder="点击上传"/>
          </div>
      </div>

      <div class="row cl" style="margin-top:40px;">
          <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
              <input class="btn btn-danger radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
          </div>
      </div>
  </form>
  
  <p class="msg"><a href="/home/index/index" style="color:#0062cc">返回首页</a></p>
  </div>
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

            });
        });
    </script> 
        <!--/请在上方写此页面业务相关的脚本-->
    </body>
</html>