<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>学习心得分享平台--我的主页</title>

        <!--元素运动动画CSS-->
        <script src="/public/js/jquery-3.3.1.min.js"></script>
        <script src="/public/js/popper.min.js"></script>
        <script src="/public/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/public/css/header.css" />
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
        <link rel="stylesheet" href="/public/css/mypage.css" />

        <style>
          
            .addblog{width:150px;margin-left:50px;}
            .user-achievement{padding-top: 30px;}
            .title{padding:6px 0}
            .title a, .collect a{color:#333;}
            .link_edit{display: none;}
            .link_edit a{font-size:13px;}
            .item-content:hover .link_edit {display:inline-block}
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
        <a href="/home/User/followMe" class="list-group-item  " >关注我的|我关注的</a>
        <a href="/home/User/editUserPass" class="list-group-item  " >修改密码</a>
    </div>
  </div>
    
   
       
        
        <div class="right-content col-md-8 col-sm-8" style="padding-left: 10px;
        padding-right: 10px;">
            <div>
                <h3 style="padding:16px">我发表的日志</h3><hr/>
            </div>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item-content">
                    <div class='d-flex justify-content-between'>
                        <h5 class='title'><a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h5> 
                        
                        <p class='link_edit'><a href='/home/index/editBlog/id/<?php echo ($vo["id"]); ?>' >编辑</a> 
                            <a href='/home/index/deleteBlog/id/<?php echo ($vo["id"]); ?>'  class=" jq-del"  data-id="<?php echo ($vo["id"]); ?>">删除</a>
                        </p>
                    </div>
                    
                    <p><?php echo ($vo["content"]); ?></p>
                    <p class="collect">
                        <a href="#" class="name"><?php echo ($vo["username"]); ?></a> |<a href=""> <?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;
                        <a href=""> <span>浏览(<?php echo ($vo["views"]); ?>) </span></a>&nbsp;&nbsp;
                        <a href="/home/Index/praise/id/<?php echo ($vo["id"]); ?>"><span>点赞(<?php echo ($vo["likes"]); ?>) </span></a>&nbsp;&nbsp;
                        <a href="/home/comment/addcomment/aid/<?php echo ($aid); ?>"><span>评论(<?php echo ($vo["comments"]); ?>) </span></a>&nbsp;&nbsp;
                        <a href="/home/Index/collect/id/<?php echo ($vo["id"]); ?>">收藏(<?php echo ($vo["collects"]); ?>)</a>
                    </p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
   <script type="text/javascript" src="/public/js/pageMenu.js"></script> 
   
   <script>
    $("#page_menu a").click(function() {
        $("#page_menu a").removeClass('active');
        $(this).addClass('active');        
    });

    </script>
   
   <script type="text/javascript">
       //删除前提示
       $(".jq-del").click(function () {
           if (confirm("日志一旦删除，不可恢复。确定要删除吗?")) 
           {
               var id = $(this).attr("data-id");
               location.href = '/home/index/deleteBlog/id/' + id;
           }
           return false;
       });
   </script>

</body>
</html>