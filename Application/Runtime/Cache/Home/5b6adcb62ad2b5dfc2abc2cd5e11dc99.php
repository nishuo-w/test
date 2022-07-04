<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>用户登录 --学生学习心得分享平台</title>
        <link rel="stylesheet" href="/Public/css/dashicons.css">
        <link rel="stylesheet" href="/Public/css/layout.css">
        <script src="/Public/js/jquery.min.js"></script>
        <script>
            if (top.location !== self.location) {
                top.location = self.location;
            }
        </script>
        <style>
            .tips{text-indent: 10px;color:#f00;font-size:20px;background-color:#fff;line-height:40px;margin-bottom:10px;}
            .logo{color: #168eda;font-family: "方正姚体";font-size:32px;padding:20px}
            .logo a{text-decoration: none;}
            .login-box td input[type=reset]:hover {
                background: #005580;
            }
            .login-box td input[type=reset] {
                background: #0077a2;
                color: #fff;
                border: 1px solid #deeffa;
                cursor: pointer;
                padding: 6px 40px;
            </style>
        </head>
        <body>
    

            <div class="login">
                <div class="login-wrap">
                    <div class="logo"><a href="../" target="_blank" class="logo" title="点击查看前台首页">学生学习心得分享平台</a></div>
                    <div class="tips"><?php echo ($msg); ?></div>
                    <div class="login-box">
                        <form method="post" action="/home/login/index">
                            <table>
                                <tr><th>用户名：</th><td><input type="text" name="username" value=""></td></tr>
                                <tr><th>密　码：</th><td><input type="password" name="password"></td></tr>
                                <tr><th>验证码：</th><td><input type="text" name="yzm"></td></tr>
                                <tr><th></th><td><img src="/home/login/yzm" id="captcha" alt="验证码" title="点击刷新验证码"></td></tr>
                                <tr><th></th><td><input type="submit" value="登录">&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"> </td></tr>
                            </table>
                        </form>
                        <p class="msg">没有账户，<a href="/home/login/register" style='color:#0062cc'>点击注册</a></p>
                    </div>
                    
                </div>
                
            </div>
            <script>
                //验证码点击刷新
                (function () {
                    var $img = $("#captcha");
                    var src = $img.attr("src") + "?_=";
                    $img.click(function () {
                        $img.attr("src", src + Math.random()); //添加随机数防止浏览器缓存图片
                    });
                })();
            </script>
        </body>
    </html>