<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>学习心得分享平台--登录页面</title>

		<!--元素运动动画CSS-->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>
		<script src="js/wow.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/register.css" />

	</head>


    <body>
        <div class="container register">
            <h3>用户登录</h3>
            <div class="tips"><?php echo ($msg); ?></div>
                <form method="post" action="/home/index/login">
                   <div><span>用 户 名：</span> <input type="text" name="nickname" /></div>
                   <div><span>密&nbsp;&nbsp;&nbsp;&nbsp;码：</span> <input type="password" name="password" ></div>
                   <div class="sub"><input type="submit" value="登录" name="login" class="signup" > </div>
                </form>
        </div>

    </body>


</html>