<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" type="text/css" href="/public/css/page.css" />
        <link rel="stylesheet" href="/public/css/header.css" /> 
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
        <link rel="stylesheet" href="/public/css/mypage.css" />

        <title>学习心得分享平台--我的主页</title>
        <style>
            .comm_text{background-color: #f7f7f7;padding:10px 16px;border-radius:8px;}
            .comm_text .delComm{display:none;float:right;}
            .comm_text:hover a.delComm{display: inline-block;}
        </style>
    </head>


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
            <div>
                <h3 style="line-height: 50px;">我发表的评论</h3>
              <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="border-top:1px solid #ccc;padding:10px 5px;">
                      <p>评论了 <?php echo ($vo["nickname"]); ?> 的文章&nbsp;&nbsp;&nbsp;<span><a href="/home/index/showblog/id/<?php echo ($vo["aid"]); ?>"><?php echo ($vo["title"]); ?></a></span></p>
                      <p  class="comm_text"><?php echo ($vo["text"]); ?>
                          <a title="删除" href="/home/comment/deleteMyComm/id/<?php echo ($vo["id"]); ?>" class="ml-5  jq-del delComm"  data-id="<?php echo ($vo["id"]); ?>" >删除</a>&nbsp;&nbsp;&nbsp;
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
        <!--_footer 作为公共模版分离出去-->
         <script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
        <script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="/public/static/h-ui/js/H-ui.min.js"></script> 
        <script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script> 

        <!--请在下方写此页面业务相关的脚本-->
         <script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
        <script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script> 
        
        <script type="text/javascript">
            //删除前提示
            $(".jq-del").click(function () {
                if (confirm("评论一旦删除，不可恢复。确定要删除吗?")) 
                {
                    var id = $(this).attr("data-id");
                    location.href = '/home/comment/deleteMyComm/id/' + id;
                }
                return false;
            });
        </script>
    </body>
      </html>