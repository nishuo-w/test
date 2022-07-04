<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>学习心得分享平台--我的主页</title>
      
        <link rel="stylesheet" href="/public/css/header.css" />
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
        <link rel="stylesheet" href="/public/css/mypage.css" />
       
        <style>
            .addblog{width:150px;margin-left:50px;}
            .user-achievement{padding-top: 30px;}
            a{color:#777;}
        </style>
	</head>
<body>
     <!--引入页面顶部-->
  <include file="./Public/header.html" />
      <!--引入个人主页导航栏-->
      <include file="./Public/pageMenu.html" />
        
        <div class="right-content col-md-8 col-sm-8  panel panel-default edit" >
            <volist name="data" id="vo">
                <div class="item-content">
                    <h3><a href="/home/index/showblog/id/{$vo.id}">{$vo.title}</a></h3>
                    <p>{$vo.content}</p>
                    <p class="collect">
                        <a href="#" class="name">{$vo.nickname}</a> |<a href=""> {$vo.name}</a>&nbsp;&nbsp;
                        <a href=""> <span>浏览({$vo.views}) </span></a>&nbsp;&nbsp;
                        <a href="/home/Index/praise/id/{$vo.id}"><span>点赞({$vo.likes}) </span></a>&nbsp;&nbsp;
                        <a href="/home/comment/addcomment/aid/{$aid}"><span>评论({$vo.comments}) </span></a>&nbsp;&nbsp;
                        <a href="/home/Index/collect/id/{$vo.id}">收藏({$vo.collects})</a>
                    </p>
                </div>
            </volist>
        </div>
    </div>

</body>
</html>
