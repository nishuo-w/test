<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>班级列表</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #main
            {
                width:900px;
                margin-left: auto;
                margin-right:auto;
            }
            #main div
            {
                height:40px;
                line-height: 40px;
                border-bottom: solid 1px #efefef;
            }
            .xbmc
            {
                padding-left: 20px;
                width:180px;
                float:left;
            }
            .bjdm
            {
                width:100px;
                float:left;
            }
            .bjmc
            {
                width:400px;
                float:left;
            }
            .nj
            {
                width:100px;
                float:left;
            }
            .xz
            {
                width:100px;
                float:left;
            }
            .b
            {
                font-weight: bold;
            }
            #page
            {
                width:100%;
                margin-top: 30px;
            }
            .page
            {
                width:30px;
                height: 25px;
                line-height: 25px;
                float:left;
                margin-right: 5px;
                border:solid 1px #cccccc;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <div class="xbmc b">系部名称</div>
            <div class="bjdm b">班级代码</div>
            <div class="bjmc b">班级名称</div>
            <div class="nj b">年级</div>
            <div class="xz b">学制</div> 
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="xbmc "><?php echo ($vo["xbmc"]); ?></div>
            <div class="bjdm "><?php echo ($vo["bh"]); ?></div>
            <div class="bjmc "><a href="/home/index/xs/bh/<?php echo ($vo["bh"]); ?>" target="_blank"><?php echo ($vo["bj"]); ?></a></div>
            <div class="nj "><?php echo ($vo["nj"]); ?></div>
            <div class="xz "><?php echo ($vo["xz"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
            
            <div id="page">
                <?php echo ($page); ?>
            </div>
        </div>

    </body>
</html>