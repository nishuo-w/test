<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templatess
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/public/css/swiper.min.css">  
        <link rel="stylesheet" href="/public/css/index.css">

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

        <div id="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="/public/image/20.jpg"/></div>
                    <div class="swiper-slide"><img src="/public/image/21.jpg"/></div>
                    <div class="swiper-slide"><img src="/public/image/22.jpg"/></div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>

            </div>
        </div>

        <div id="main">
            <div class="main-left">
                <div class="al">
                    <div class="al-each">
                        <div class="title"><a href="">这是第一篇文章</a></div>
                        <div class="description">欢迎使用内容管理系统</div>
                        <div class="img"><a href="show.html?id=2"><img src="./upload/<?php echo ($vo["thumb"]); ?>" alt="点击阅读文章"></a></div>
                        <div class="more">
                            <p>作者：播客 | 发表于：2019-01-22 03：34：23</p>
                            <a href="">查看原文</a>
                        </div>
                    </div>

                    <div class="al-each">
                        <div class="title"><a href="">这是第一篇文章</a></div>
                        <div class="description">欢迎使用内容管理系统</div>
                        <div class="img"><a href="show.html?id=2"><img src="./upload/<?php echo ($vo["thumb"]); ?>" alt="点击阅读文章"></a></div>
                        <div class="more">
                            <p>作者：播客 | 发表于：2019-01-22 03：34：23</p>
                            <a href="">查看原文</a>
                        </div>
                    </div>

                    <div class="al-each">
                        <div class="title"><a href="">这是第一篇文章</a></div>
                        <div class="description">欢迎使用内容管理系统</div>
                        <div class="img"><a href="show.html?id=2"><img src="./upload/<?php echo ($vo["thumb"]); ?>" alt="点击阅读文章"></a></div>
                        <div class="more">
                            <p>作者：播客 | 发表于：2019-01-22 03：34：23</p>
                            <a href="">查看原文</a>
                        </div>
                    </div>
                    <div class="page-list">

                        <a href="" class="curr">首页</a>
                        <a href="">上一页</a>
                        <a href="">1</a>
                        <a href="">下一页</a>
                        <a href="">尾页</a>

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