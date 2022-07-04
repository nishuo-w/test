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
        <link rel="stylesheet" href="/public/css/swiper.min.css">  
        <link rel="stylesheet" href="/public/css/index.css">
        <style>
            #main{margin-top:20px;}
            #main .main-left{width:860px;padding:20px;background-color:#fff;}
            #main .main-left .as{width:820px;margin:auto}
            #main .main-left .as h3{width:820px;text-align:center;}
            #main .main-left .as .row{text-align:center;line-height:40px;padding-top:10px;border-bottom:1px dotted #ccc}
            #main .main-left .as .row span{margin-right:15px;color:#848484;font-size: 12px;}
            #main .main-left .as  a{color:#0073aa}
            #main .main-left .as  a:hover{color:#1c99ff}
            #main .main-left .as .content{padding:10px 0;margin-bottom: 10px;border-bottom:1px dotted #ccc}
            #main .main-left .as .content p{line-height:36px;}
            #main .main-left .as .change{text-align:center;line-height:30px;}
           
            
        </style>
    </head>
    <body>
        <div id="top">
            <div class="top-container">
                <div class="top-logo">
                    <img src="/public/image/logo.png" width="170" height="50"/>
                </div>

                <div class="top-nav">
                    <a href="/home/index/index" class="curr">首页</a>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="list.php?cid=<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    <a href="about.php" class="">联系我们</a>
                </div>
            </div>
        </div>
        <div id="main">
            <div class="main-left">
                <div class="as">
                    <h3>这是第一篇文章</h3>
                    <div class="row">
                        <span>栏目：<a href="">php</a></span>
                        <span>作者：播客</span>
                        <span>发表时间：2019-09-23 43：43：43</span>
                        <span>阅读：5次</span>
                    </div>
                    <div class="content">
                        <p>欢迎使用内容管理系统</p>
                        <p>欢迎使用内容管理系统</p>
                    </div>
                    <div class="img"><a href="show.html?id=2"><img src="./upload/<?php echo ($vo["thumb"]); ?>" alt="点击阅读文章"></a></div>
                    <div class="change">
                        <span>上一篇：<a href="">最涨薪PHP项目—PHP微信公众平台开发</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>下一篇：<a href="">最涨薪PHP项目—PHP微信公众平台开发</a></span>
                    </div>

                </div>

            </div>

            <div class="main-right">
                <div class="si">

                    <div class="si-each">
                        <h3>内容栏目</h3>
                        <div class="si-p1">
                            <a href="">生活</a>
                            <a href="">生活</a>
                            <a href="">生活</a>
                            <a href="">生活</a>
                            <a href="">生活</a>
                        </div>
                    </div>

                    <div class="si-each">
                        <h3>浏览历史</h3>
                        <div class="si-p2">
                            <ul>                                
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="si-each">
                        <h3><span>TOP 10</span> &nbsp;&nbsp;热门文章</h3>
                        <div class="si-p3">
                            <ul>                                
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                                <li><a href="">PHP学科：MySQL手册免费分享</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="/public/js/swiper.min.js"></script>

        <script>

            var mySwiper = new Swiper('.swiper-container', {
                direction: 'horizontal', // 垂直切换选项
                loop: true, // 循环模式选项

                // 如果需要分页器
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: true,
                // 如果需要前进后退按钮
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

            })


        </script>
    </body>
</html>