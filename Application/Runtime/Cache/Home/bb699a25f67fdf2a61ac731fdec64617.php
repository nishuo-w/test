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
        <link rel="stylesheet" href="/Public/css/swiper.min.css">  
        <link rel="stylesheet" href="/Public/css/index.css">
        <style>
            #main{margin-top:15px;}
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
                    <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/home/index/list2/cid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    <a href="about.php" >联系我们</a>
                </div>
            </div>
        </div>

        <div id="main">
            <div class="main-left">

                <div class="al">

                    <div class="name"><?php echo ($name[0]['name']); ?></div>
                    <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="al-each">
                            <div class="title"><a href="/home/index/show/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></div>
                            <div class="description"><?php echo ($vo["description"]); ?></div>
                            <div class="img"><a href="show.html?id=2"><img src="./upload/<?php echo ($vo["thumb"]); ?>" alt="点击阅读文章"></a></div>
                            <div class="more">
                                <p>作者：<?php echo ($vo["author"]); ?> | 发表于：<?php echo ($vo["time"]); ?></p>
                                <a href="/home/index/show/id/<?php echo ($vo["id"]); ?>">查看原文</a>
                            </div>

                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="page-list">

                        <a href="" class="curr">首页</a>
                        <a href="">上一页</a>
                        <?php echo ($page); ?>
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
                            <ul>
                                <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/home/index/list2/cid/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
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
                                <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/home/index/show/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="/public/js/swiper.min.js"></script>
        <script src="/public/js/jquery.min.js"></script>
<!--         <script>
                    $("#top .top-container .top-nav a").click(
                            function () {
                                $(this).addClass('curr').siblings().removeClass('curr');
                            });
                </script>-->

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

            });


        </script>

    </body>
</html>