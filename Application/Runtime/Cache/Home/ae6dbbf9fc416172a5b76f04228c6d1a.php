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
            body
            {
                margin: 0;
                padding: 0;
                background-color: black;
            }
            #main
            {
                width: 1000px;
                height:952px;
                padding: 0px 3px 0px 3px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom:60px;
                background-color: white;
            }
            #top
            {
                height:180px;
                width:1000px;
                background-image: url(/public/image/top.jpg)
            }
            #menu
            {
                margin-top: 10px;
                width: 1000px;
                height:42px;
                line-height: 42px;
                background-image: url(/public/image/mb.jpg)
            }
            #menu div
            {
                float: left;
                margin-left: 15px;
                
            }
            #menu div a
            {
                font-size: 15px;
                font-weight: bold;
                color: white;
            }
            #search
            {
                margin-top: 5px;
                border:solid 1px #cccccc;
                padding: 3px 3px 3px 3px;
            }
            #sb
            {
                margin-left: 20px;
                width: 39px;
                height: 18px;
                background-image: url(/public/image/s.gif);
                border:solid 0px white;
                cursor:pointer;
            }
            #a
            {
                margin-top: 5px;
                border:solid 1px #cccccc;
                border-bottom:1px solid #000;
                padding: 3px 3px 3px 3px;
                height: 600px;
            }
            #b
            {
                width: 860px;
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                border:solid 1px #cccccc;
                border-bottom:1px solid #000;
                height: 500px;
                
                background-color: #efefef;
            }
            #table
            {
                width:100%;
                font-size: 12px;
                color: #333333;
            }
            th{font-size:14px;line-height:40px}
            .left
            {
                text-align: right;
                width:300px;
                height: 40px;
            }
            .left span
            {
                color:red;
            }
            .right
            {
                text-align: left;
                width: 600px;
            }
            .right input
            {
                border: solid 1px #f0c040;
                height:22px;
                width:200px;
                padding: 3px 0px 3px 2px;
            }
            #footer{width:1000px;height:60px; border:solid 1px #cccccc;margin:10px auto;padding:3px;font-size:12px;box-sizing:border-box;background-color:#fff;text-indent:2px;color:#333;}
            #footer p{line-height:10px}
        </style>
    </head>
    <body>
        <div id="main">
            <div id="top"></div>
            <div id="menu">
                <div><a>首页</a></div>
                <div><a>发表留言</a></div>
            </div>
            <div id="search"> <input type="text" name="search" value="" /><input id="sb" type="submit" value="" /></div>
            <div id="a">
                <form action="/home/index1/ly" method="post">
                    <div id="b">
                        <table id="table">
                            <tr><th colspan="2">发表留言</th></tr>
                            <tr><td class="left"><span>*</span>留言标题：</td><td class="right"><input type="text" name="title" value="" /></td></tr>
                            <tr><td class="left"><span>*</span>姓名：</td><td class="right"><input type="text" name="realname" value="" /></td></tr>
                            <tr><td class="left"><span>*</span>所在院系：</td><td class="right"><input type="text" name="college" value="" /></td></tr>
                            <tr><td class="left"><span>*</span>E_mail：</td><td class="right"><input type="text" name="email" value="" /></td></tr>
                            <tr><td class="left"><span>*</span>联系电话：</td><td class="right"><input type="text" name="phone" value="" /></td></tr>
                            <tr><td class="left">联系地址：</td><td class="right"><input type="text" name="address" value="" /></td></tr>
                            <tr><td class="left"><span>*</span>留言内容：</td><td class="right"><textarea name="content" rows="8" cols="50">
                                    </textarea></td></tr>
                            <tr><td></td><td><input type="submit" value="添加" /></td></tr>
                        </table>
                    </div>
                </form>
            </div>
            <div id="footer">
            <p>版权所有：©上海交通大学图书馆</p>
            <p>上海交通大学图书馆留言板系统</p>

        </div>
        </div>
       
    </body>
</html>