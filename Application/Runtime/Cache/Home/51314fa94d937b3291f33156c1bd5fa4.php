<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/index.php/Home/User/addData" method="post" enctype="multipart/form-data">
        邮箱：<input  type="text" id="mail" name="mail"/>
        标题：<input  type="text" id="title" name="title"/>
        内容<input  type="text" id="content" name="content"/>
        <input class="button" type="submit" value="发送" style="margin: 0 auto;display: block;"/>
    </form>
</body>
</html>