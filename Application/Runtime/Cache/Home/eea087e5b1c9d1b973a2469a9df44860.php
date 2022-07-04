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
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
</script>
<script>
    $(document).ready(function(){
         $("#sex").val('<?php echo ($data[0]["xb"]); ?>');   
          $("#mz").val('<?php echo ($data[0]["mz"]); ?>');   
        
});
</script>
    </head>
    <body>
        <div>
            <form action="/home/index/xssavedata" method="post">
                <table border="0" cellspacing="1" cellpadding="3">
                    <tr>
                        <td width="168">学号：</td>
                        <td><input type="text" name="xh" value="<?php echo ($data[0]['xh']); ?>" readonly="true"/></td>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" name="xm" value="<?php echo ($data[0]['xm']); ?>" /></td>
                    </tr>
                    <tr>
                        <td>班号：</td>
                        <td><input type="text" name="bh" value="<?php echo ($data[0]['bh']); ?>" /></td>
                    </tr>
                    <tr>
                        <td>性别：</td>
                        <td><select id="sex" name="sex">
                                <option value="男" >男</option>
                                <option value="女" >女</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>民族：</td>
                        <td><select id="mz" name="mz">
                                <option value="汉族">汉族</option>
                                <option value="苗族">苗族</option>
                                <option value="瑶族">瑶族</option>
                                <option value="蒙古族">蒙古族</option>
                                <option value="藏族">藏族</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>生日：</td>
                        <td><input type="text" name="csrq" value="<?php echo ($data[0]['csrq']); ?>" /></td>
                    </tr>
                </table>
                <input type="submit" value="保存" />
            </form>
        </div>
    </body>
</html>