<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>学习心得分享平台-修改密码</title>

        <!--元素运动动画CSS-->
        
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
        
        <link rel="stylesheet" href="/public/css/header.css" />
        <link rel="stylesheet" href="/public/css/mypage.css" />

        <style>
            body{background: #f7f7f7;}
            .left-side-nav{height:120px;}
            .right-side-nav{height:120px;}
            .panel-body .row{
                margin:20px 0;
            }
        </style>
    </head>
<body>

<!--引入页面顶部-->
<div class="top d-flex  row">
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
          <li><a href="/home/user/login">登录 |</a> <a href="/home/user/register">注册</a></li><?php endif; ?>
      
  </ul>

</div>
<!--引入个人主页导航栏-->
<div class="container d-flex justify-content-between main">
  <div class="left-content col-md-3 col-sm-3">
    <div class="user-achievement">
        <h3 style="display: flex;">
            <div style="width: 50px;height:50px;">
                <img  src="<?php echo ($user[0]['pic']); ?>" width="100%" height="100%" style="border-radius: 50%;"/>
            </div>&nbsp;&nbsp;&nbsp;
            <a href="/home/User/editInfo/<?php echo ($userid); ?>"><?php echo ($user[0]['username']); ?></a>
        </h3>
        
        <p class="addblog btn-info btn-lg  text-center "><a href="/home/index/addblog" style="color:#fff;">写文章</a></p>
    </div>
    
    <div class="list-group text-center" id="page_menu">
        <a href="/home/index/mypage/uid/<?php echo ($userid); ?>" class="list-group-item  "  > 主 页 </a>
        <a href="/home/index/mypage/uid/<?php echo ($userid); ?>" class="list-group-item  " >日志管理</a>
        <a href="/home/comment/commList/uid/<?php echo ($userid); ?>" class="list-group-item " >评论管理</a>
        <a href="/home/User/editInfo/" class="list-group-item  " >个人资料</a>
        <a href="/home/User/myCollect/uid/<?php echo ($userid); ?>" class="list-group-item  " >收藏夹</a>
        <a href="/home/User/editUserPass" class="list-group-item  " >修改密码</a>
    </div>
  </div>
    
   
        
<div class="right-content col-md-8 col-sm-8  panel panel-default edit">
    <div class="">
        <h3 style="border-bottom:1px solid #ccc;text-align: center;line-height: 50px">修改密码</h3>
        </div>
        <div class="panel-body">
        <form class="needs-validation" id="form-editPass" enctype="multipart/form-data" action="/home/user/editUserPass" method="post">
            

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3">输入原密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="oldPass" >
                    
                </div>
                
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red"><?php echo ($error2); ?></span>新密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" value="" placeholder="输入新密码" name="newPass" id="newPass" >
                </div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span class="c-red"><?php echo ($error3); ?></span>确认密码：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="password" class="input-text" autocomplete="off" value=""  placeholder="确认新密码"  name="newPass2" id='newPass2' >
                </div>
            </div>
            <div class="row cl" style="height: 30px;;">
                <label class="form-label col-xs-4 col-sm-3"></label>
                <div class="formControls col-xs-8 col-sm-9">
                    <span class="c-red"><?php echo ($tips); ?></span>
                </div>
            </div>
            <div class="row cl" style="margin-top: 30px;">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary " type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;"  style="height: 36px;">
                    <input class="btn btn-danger " type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;"  style="height: 36px;">
                </div>
            </div>
        </form>

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

    <script>
        $("#page_menu a").click(function() {
           // $(this).siblings().removeClass("active");
            $(this).addClass('active');        
        });
    
    </script>


    <script type="text/javascript">
        $(function () {
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });

            $("#form-editPass").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                   oldPass: {
                        required: true,
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
                success: "valid",

            });
        });
    </script> 

</body>
</html>