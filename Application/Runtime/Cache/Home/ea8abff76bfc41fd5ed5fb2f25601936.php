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
                width:600px;
                height: 460px;
                margin-left: auto;
                margin-right:auto;
            }
            #main div
            {
                height:40px;
                line-height: 40px;
                border-bottom: solid 1px #efefef;
            }
            .xh
            {
                padding-left: 20px;
                width:180px;
                float:left;
            }
            .xm
            {
                width:100px;
                float:left;
            }
            .xb
            {
                width:100px;
                float:left;
            }
            .mz
            {
                width:100px;
                float:left;
            }
            .edit
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
                width:500px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
            }
            .page
            {
                width:30px;
                height: 25px;
                line-height: 25px;
                float:left;
                text-align:center;
                margin-right: 5px;
                border:solid 1px #cccccc;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <div class="xh b">学号</div>
            <div class="xm b">姓名</div>
            <div class="xb b">性别</div>
            <div class="mz b">民族</div>
            <div class="edit b">修改删除</div>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="xh "><?php echo ($vo["xh"]); ?></div>
                <div class="xm"><a href="/home/index/xsdetail/xh/<?php echo ($vo["xh"]); ?>" target="_blank"><?php echo ($vo["xm"]); ?></a></div>
                <div class="xb"><?php echo ($vo["xb"]); ?></div>
                <div class="mz"><?php echo ($vo["mz"]); ?></div>
                <div class="edit"><a href="/home/index/xssave/xh/<?php echo ($vo["xh"]); ?>" target="_blank">修改</a> <a href="/home/index/xsdelete/xh/<?php echo ($vo["xh"]); ?>" target="_blank">删除</a></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div id="page">
            <?php echo ($page); ?>
        </div>
    </body>
</html>