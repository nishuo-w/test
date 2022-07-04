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
            #box{width:800px;height:500px;margin:100px auto;border:1px solid #ccc;background-color:#F6F6F6}
            #box form table{margin:30px 100px}
            #box form table td{font-size:13px; color:#333}
            #box form p{text-align: center;font-size:14px}
            #box form table input{    width: 250px;
                      height: 20px;
                      border: 1px #FDCAB5 solid;
                      padding: 6px;
                     
            }
            span{color:#F00;margin-top:-2px}
            </style>
        </head>

        <body>
            <div id="box">
            <form>
                <p>发表留言</p>
                <table>
                    <tr><td><span>*</span>留言标题：</td><td><input type="text" name="title" value="" /></td></tr>
                    <tr><td><span>*</span>姓名：</td><td><input type="text" name="realname" value="" /></td></tr>
                    <tr><td><span>*</span>所在院系：</td><td><input type="text" name="title" value="" /></td></tr>
                    <tr><td><span>*</span>E_mail：</td><td><input type="text" name="email" value="" /></td></tr>
                    <tr><td><span>*</span>联系电话：<br/>(仅管理员可见)</td><td><input type="text" name="phone" value="" /></td></tr>
                    <tr><td>联系地址：</td><td><input type="text" name="address" value="" /></td></tr>
                    <tr><td><span>*</span>留言内容：</td><td><textarea  name="content" rows="8" cols="50"></textarea></td></tr>

                </table>
                
                <button type="submit">提交留言</button> <button type="reset">重新填写</button>
            </form>

        </div>
    </body>
</html>