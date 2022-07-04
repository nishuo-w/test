<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生学习心得分享平台</title>
    <link rel="stylesheet" type="text/css" href="/public/css/header.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/index.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/page.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-grid.css" />
    <link rel="stylesheet" type="text/css" href="https://v4.bootcss.com/docs/4.6/dist/css/bootstrap.min.css" />
    

    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script  src="/public/js/jquery.js"></script>
<!--                
     <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
     <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />-->
    <style>

        body{background-color: rgb(244,245,245);}
        li{list-style: none;}

        .main{position: relative;}
        .main-left{background:#fff;}

        .collect a{color:#0066cc;}
        .main-right{background:#fff;height:600px;}
        .main-right .hot h3{font-size: 24px;border-bottom:1px solid #ccc;line-height: 50px;}
        .main-right .hot>ul{counter-reset:section;padding: 0;}
        .main-right .hot>ul>li{border-bottom: 1px dotted #ccc; line-height: 30px; overflow:hidden }
        .main-right .hot>ul>li:before{counter-increment:section;content:counter(section);display:inline-block;padding:0 6px;margin-right:10px;height:18px;line-height:18px;background:#717070;color:#fff;border-radius:3px;font-size:9px}
        .main-right .hot>ul>li:nth-child(-n+3):before{background:#ff6a00}/* -n+3:获取前三个标签  n+3：获取3到最后的标签*/
        .main-content .item{border-bottom:1px solid #ccc;}
        .item-content .item-description{height:100px;}
        
        /*页面跳转*/
      
        #page{width:600px;margin:30px auto;}
        #page ul li{width:30px;height:30px;line-height: 30px;text-align: center;}
        #page ul li span{display:block;width:30px;height:30px;color:#fff;background:#1e80ff;}/*当前页面样式*/
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

    <div class="container main  d-flex justify-content-between">
        <!--main-left start-->
        <div class="main-left col-md-8 col-sm-8" style="width:70%;">
            <div class="list-header ">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">综合排序</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">最新优先</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">最热优先</a>
                    </li>
                </ul>
            </div>

            <!--主要内容-->
            <div class="main-content ">
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item"  >
                        <h3><a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h3>
                        <p  class=" overflow-hidden item-description" style="height:100px;"><?php echo ($vo["content"]); ?></p>
                        <p class="collect">
                            <span>
                                <a href="/home/index/mypage/uid/<?php echo ($userid); ?>" class="name"><?php echo ($vo["username"]); ?></a> |
                                <a href="/home/index/menu"> <?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;
                                <a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>"> 浏览(<?php echo ($vo["views"]); ?>)</a>&nbsp;&nbsp;
                                <a href="/home/Index/praise/id/<?php echo ($vo["id"]); ?>">点赞(<?php echo ($vo["likes"]); ?>) </a>&nbsp;&nbsp;
                                <a href="/home/comment/addcomment/aid/<?php echo ($aid); ?>">评论(<?php echo ($vo["comments"]); ?>) </a>&nbsp;&nbsp;
                                <a href="/home/Index/collect/id/<?php echo ($vo["id"]); ?>">收藏(<?php echo ($vo["collects"]); ?>)</a>
                            </span>
                        </p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <!--分页-->
            <div id="page"> <?php echo ($show); ?></div>
        </div><!--main-left end-->

        <!--main-right start-->
        <div class="main-right col-md-3 col-sm-3">
            <div class="hot">        
                <h3> 热门文章</h3>
                <ul>
                <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>

            <div class="hot">        
                <h3> 浏览记录</h3>
                <ul>
                <?php if(is_array($history)): $i = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div><!--main-right end-->
    </div>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

        
</body>

</html>