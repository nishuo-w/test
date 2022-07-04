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
        <style>
            .page{width:30px;height:30px;border:1px solid #ccc;margin-top: 20px;line-height:30px;text-align:center;float:left;margin-right: 5px}
            .bold{font-weight:bold;}
            .title{width:1000px;height:35px;padding:5px 20px;line-height:35px;border-bottom:1px solid #ccc;display:flex}
            .xbmc{width:200px;float:left}
            .bh{width:200px;float:left}
            .bj{width:350px;float:left}
            .nj{width:200px;float:left}
            .xz{width:50px;float:left}
        </style>
    </head>
    <body>
        
        <div class="title bold"> <div class="xbmc">系部名称</div> <div class="bh">班级名称</div> <div class="bj">班级代码</div> <div class="nj">年级</div> <div class="xz">学制</div></div>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="title"> <div class="xbmc"><?php echo ($vo["xbmc"]); ?></div><div class="bh"><?php echo ($vo["bh"]); ?></div>
            <div class="bj"><?php echo ($vo["bj"]); ?></div><div class="nj"><?php echo ($vo["nj"]); ?></div><div class="xz"><?php echo ($vo["xz"]); ?></div></div><?php endforeach; endif; else: echo "" ;endif; ?>

<?php
 $xbdm=$_GET["xbdm"]; ?>
<?php $__FOR_START_7028__=1;$__FOR_END_7028__=$page+1;for($i=$__FOR_START_7028__;$i < $__FOR_END_7028__;$i+=1){ ?><div class="page">
            <a href="/home/manage/index/xbdm/<?php echo ($xbdm); ?>/page/<?php echo ($i); ?>"><?php echo ($i); ?></a>
        </div><?php } ?>
    <br/>
</body>
</html>