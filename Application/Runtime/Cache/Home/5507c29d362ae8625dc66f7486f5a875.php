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
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
    </head>
    <body style="margin:20px 50px;">
        <p style="font-size:24px;"><strong>欢迎 <?php echo ($name); ?> 进入学习心得分享平台后台管理系统！</strong>
        <table class="table" style="width:1000px">
            <thead class="thead-light">
              <tr>
                  <th scope="col" colspan="2">服务器信息</th>
                  <th scope="col" colspan="2">系统信息</th>
              </tr>
            </thead>
            <tbody>
                
              <tr>
                <td>操作系统：</td>
                <td>win10</td>
                <td>系统开发：</td>
                <td>ThinkPHP</td>
              </tr>
              <tr>
                <td>PHP Version：</td>
                <td>PHP/<?php echo ($phpVersion); ?></td>
                <td>主页：</td>
                <td>index</td>
              </tr>
              <tr>
                <td>服务器IP：</td>
                <td><?php echo ($ip); ?></td>
                <td>演示：</td>
                <td>http://www.blog.com</td>
              </tr>
              <tr>
                <td>数据库：</td>
                <td>MySQL</td>
                <td>Apache Version：</td>
                <td><?php echo ($apache); ?></td>
              </tr>
            </tbody>
          </table>
        
    </body>
</html>