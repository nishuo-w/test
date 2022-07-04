<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>学习心得分享平台--我的主页</title>

        <!--元素运动动画CSS-->
        <script src="/public/js/jquery-3.3.1.min.js"></script>
        <script src="/public/js/popper.min.js"></script>
        <script src="/public/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
        <link rel="stylesheet" href="/public/css/mypage.css" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            
        </style>
	</head>


<body>
    <div class="container  content">
        <div class="left-content col-md-8 col-sm-8">
            <div>
                <ul class="nav nav-pills">
                    <li class="active"><a href="/home/index/mypage/uid/<?php echo ($userid); ?>">动态</a></li>
                    <li><a href="#">文章</a></li>
                    <li><a href="#">赞（2）</a></li>
                    <li><a href="/home/index/myCollect/uid/<?php echo ($userid); ?>">收藏夹</a></li>

                </ul>
            </div>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item-content">
                    <h3><a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h3>
                    <p><?php echo ($vo["content"]); ?></p>
                    <p class="collect">
                        <a href="#" class="name"><?php echo ($vo["nickname"]); ?></a> |<a href=""> <?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;
                        <a href=""> <span>浏览(<?php echo ($vo["views"]); ?>) </span></a>&nbsp;&nbsp;
                        <a href="/home/Index/praise/id/<?php echo ($vo["id"]); ?>"><span>点赞(<?php echo ($vo["likes"]); ?>) </span></a>&nbsp;&nbsp;
                        <a href="/home/comment/addcomment/aid/<?php echo ($aid); ?>"><span>评论(<?php echo ($vo["comments"]); ?>) </span></a>&nbsp;&nbsp;
                        <a href="/home/Index/collect/id/<?php echo ($vo["id"]); ?>">收藏(<?php echo ($vo["collects"]); ?>)</a>
                    </p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <div class="right-content col-md-3 col-sm-3">
            <div class="user-achievement">
                <h3>username</h3>
                <h3>个人成就</h3>
                <p><img src=""/>获得10次点赞</p>
                <p>内容获得39次评论</p>
                <p>获得28次收藏</p>


            </div>
        </div>

        
    </div>

</body>
</html>