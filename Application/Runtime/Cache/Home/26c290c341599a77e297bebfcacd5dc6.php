<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>高校新闻管理系统--新闻列表页</title>
        <link href="/public/css/reset.css"  rel="stylesheet"/>  
        <link href="/public/css/swiper.css" rel="stylesheet"/>

        <style>
            body{background-color:#FFFFF7}

            /*头部*/
            #top{width:1000px;height:80px;line-height:80px;font-size:36px;text-indent:10px;color:#168eda;font-family:"方正姚体";background-color:#F2F2F2;margin:auto;}

            /*导航*/
            #nav{margin:auto;width:1000px;height:50px;background-color:#168eda;line-height:50px;display:flex;justify-content:space-around;}
            #nav a{font-size:18px;color:#fff;padding:0px 28px;}
            #nav a:hover{background-color:#47a3da}

            #banner{width:1000px;height:260px;margin:auto;margin:2px auto }
            #banner img{width:1000px;height:260px;}

            #content{width:1000px;height:450px;display:flex;justify-content:space-between;margin: 10px auto 20px}
            /*侧边导航（新闻中心）*/
            #content .aside{width:200px;height:360px;text-align:center;background-color: rgba(247,247,247,.9);}
            #content .aside h3{font-size:22px;background-color:#69C;color:#fff;line-height:50px;}
            #content .aside ul{width:200px;}
            #content .aside ul li{width:88%;margin:auto;padding:10px 0px;border-bottom:1px solid #ccc;line-height:50px;background:none}
            #content .aside ul li a{font-size:18px;}
            #content .aside ul li a:hover{color:#3c85db}

            /*当前位置*/
            #content .central{width:750px;height:500px;text-indent:4px;}
            #content .central .location{width:750px;height:35px;line-height:35px;background-color:#69C;color:#fff}
            #content .central .location a{color:#fff}
            #content .central .location a:hover{text-decoration:underline}

            /*新闻列表*/
            #content .central ul{width:750px;}
            #content .central ul li{width:750px;background:url(/public/image/list.png) no-repeat 4px 14px;text-indent:12px;line-height:35px;position:relative;border-bottom:#ccc 1px dotted;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
            #content .central ul li span{width:80px;height:35px;color:#aaa;position:absolute;right:6px;top:0px}
            #content .central ul li a{display:block;width:650px;color:#333;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-size:16px;}
            #content .central ul li a:hover{text-decoration:underline;color:#3c85db}


            /*页面跳转*/
            #page{width:750px;height:180px;margin:auto;margin-top:20px;}
            #page .page-list a.curr {background-color: #0088B3;color: #fff;}
            #page .page-list a {display: inline-block;border: 1px solid #ccc;color: #808080;padding: 4px 10px;margin-right: 6px;}

            /*页脚*/
            #footer{width:1000px;background-color:#168eda;padding:40px 0;position:fixed;bottom:0;left:50%;margin-left: -500px;}
            #footer p{color:#fff;text-align:center}
        </style>
    </head>

    <body>
        <!--头部-->
        <div id="top">
            高校新闻管理系统
        </div>

        <!--导航--->
        <div id="nav">
            <a href="">首 页</a>
            <a href="">学校概况</a>
            <a href="">机构设置</a>
            <a href="">招生就业</a>
            <a href="">人才招聘</a>
            <a href="">国际交流</a>
            <a href="">校友之家</a>
            <a href="">图 书 馆</a>
        </div>

        <div id="banner">
            <img src="/public/image/banner01.jpg" width="1000" alt=""/>
        </div>

        <div id="content">

            <!--新闻中心--->
            <div class="aside">
                <h3>新闻中心</h3>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
                        <li><a href="/home/index/newslist/cid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></li>
                    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <!---新闻列表-->
            <div class="central">
                <div class="location">
                    所在位置： <a href="/home/index">学校首页</a> >> <a href="/home/index/newslist/cid/<?php echo ($data2[0]['id']); ?>">新闻中心</a> >> <a href="/home/index/newslist/cid/<?php echo ($data2[0]['id']); ?>"><?php echo ($data2[0]['name']); ?></a>
                </div>

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
                        <li><span><?php echo ($vo["time"]); ?></span><a href="/home/index/show/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li>
                    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--分页-->
                <div id="page">
                    <div class="page-list">
                        <a href="" class="curr">首页</a>
                        <a href="">上一页</a>
                        <?php echo ($page); ?>
                        <a href="">下一页</a>
                        <a href="">尾页</a>
                    </div>
                </div><!--page end-->

            </div><!--central end-->

        </div><!---content end-->

        <div id="footer">
            <p>17计算机应用技术（软件） 韦坤婷</p>

        </div>
    </body>
</html>