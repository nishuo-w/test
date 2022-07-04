<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <form action="/index.php/Home/Index/upload" enctype="multipart/form-data" method="post" >
            <input type="text" name="name" />
            <input type="file" name="photo" />
            <input type="submit" value="提交" >
            </form>
    </body>
</html>