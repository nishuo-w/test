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
            table
            {
                width:368px;
                background-color: #333;
            }
            td
            {
                background-color: white;
            }
        </style>
    </head>
    <body>
        <div>
           
                <table border="0" cellspacing="1" cellpadding="3">
                    <tr>
                        <td width="168">学号：</td>
                        <td><?php echo ($data[0]['xh']); ?></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><?php echo ($data[0]['xm']); ?></td>
                    </tr>
                    <tr>
                        <td>班号：</td>
                        <td><?php echo ($data[0]['bh']); ?></td>
                    </tr>
                    <tr>
                        <td>性别：</td>
                        <td><?php echo ($data[0]['xb']); ?></td>
                    </tr>
                    <tr>
                        <td>民族：</td>
                        <td><?php echo ($data[0]['mz']); ?></td>
                    </tr>
                    <tr>
                        <td>生日：</td>
                        <td><?php echo ($data[0]['csrq']); ?></td>
                    </tr>
                </table>
            
        </div>
    </body>
</html>