<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/home/index/markdownUpload" method="post" enctype="multipart/form-data">
        <input type="file" name="pic" id="">
        <input type="submit" value="上传">
    </form>
</body>
</html>