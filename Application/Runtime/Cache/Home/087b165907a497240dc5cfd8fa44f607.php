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
            ul{counter-reset:section;}
            li{width:300px; border-bottom: 1px dotted #ccc; line-height: 30px; height: 30px; overflow:hidden }
            li:before{counter-increment:section;content:counter(section);display:inline-block;padding:0 6px;margin-right:10px;height:18px;line-height:18px;background:#717070;color:#fff;border-radius:3px;font-size:9px}
            li:nth-child(1):before{background:#ff6a00}
            li:nth-child(2):before{background:#107db4}
            li:nth-child(3):before{background:#56ae11}
</style>

    </head>
    <body>
        <div>        
            热门文章
        <ul>
            <li>文章1</li>
            <li>文章2</li>
            <li>文章3</li>
            <li>文章4</li>
            <li>文章1</li>
            <li>文章2</li>
            <li>文章3</li>
            <li>文章4</li>
            <li>文章3</li>
            <li>文章4</li>
        </ul>
        </div>
    </body>
</html>