<?php
return array(
	//'配置项'=>'配置值'
    //数据库配置信息
'DB_TYPE'   => 'mysql', // 数据库类型
'DB_HOST'   => 'localhost', // 服务器地址
'DB_NAME'   => 'blog', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => 'root', // 密码
'DB_PORT'   => 3306, // 端口
'DB_PARAMS' =>  array(), // 数据库连接参数
'DB_PREFIX' => 'blog_', // 数据库表前缀 
'DB_CHARSET'=> 'utf8', // 字符集
'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    


// 配置邮件发送服务器
'MAIL_HOST' =>'smtp.88.com',//smtp服务器的名称
'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
'MAIL_USERNAME' =>'t10086@88.com',//你的邮箱名  
'MAIL_FROM' =>'t10086@88.com',//发件人地址
'MAIL_PASSWORD' =>'eAP9mNBxtCafwn22',//  邮箱密码  网易
'MAIL_CHARSET' =>'utf-8',//设置邮件编码
'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件


//显示错误信息
'SHOW_ERROR_MSG' => true,
// 显示页面Trace信息
'SHOW_PAGE_TRACE' =>true, 

);