<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8" />
        <title>写日志--学习心得分享平台</title>
        <link rel="stylesheet" href="/public/lib/editormd/css/style.css" />
        <link rel="stylesheet" href="/public/lib/editormd/css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
        <script type="text/javascript" src="/public/lib/js/jquery.min.js"></script>
        <script src="/public/lib/editormd/editormd.min.js"></script>
        <style>
            header{
                padding: 0 27px;
                height: 100px;
                line-height:70px;
                background-color: #fff;
                border-bottom: 1px solid #ddd;
                z-index: 100;
                display:flex;
                justify-content: space-between;
            }
            header .title_input{    
                font-size: 24px;
                font-weight: 500;
                text-indent: 2em;
                width:500px;
                color: #1d2129;
                border: none;
                outline: none;
                border:1px solid red;
            }
            
            header .right_box
            {
                width:230px;
                padding:0px 20px;
                display: flex;
                border: none;
                justify-content: space-between;
                align-items: center;
            }
            header .right_box .submit_btn
            {
                height: 32px;
                padding: 2px 16px;
                font-size: 14px;
                line-height: 22px;
                border: none;
                border-radius: 2px;
                cursor: pointer;
                color: #fff;
                box-sizing: border-box;
                background-color: #1d7dfa;
            }
            header .right_box .imgpath
            {
                width:50px;
                height:50px;
                border-radius: 50%;
                position:relative;
            }
            header .right_box .imgpath img
            {
                width:100%;
                height:100%;
                border-radius: 50%;
                position:absolute;
                top:0;
                left:0;
            }
                 ul{counter-reset:section;}
        li{width:300px; border-bottom: 1px dotted #ccc; line-height: 30px; height: 30px; overflow:hidden }
        li:before{counter-increment:section;content:counter(section);display:inline-block;padding:0 6px;margin-right:10px;height:18px;line-height:18px;background:#717070;color:#fff;border-radius:3px;font-size:9px}
        li:nth-child(1):before{background:#ff6a00}
        li:nth-child(2):before{background:#107db4}
        li:nth-child(3):before{background:#56ae11}
            
        </style>
    </head>
    <body>


        
        
        <form method="post" action="/home/index/addblogdata">
            <div id="layout" style="height: 2000px;background: #f6f6f6;">
                <header class="container">
                    <div class="col-md-5"><input type="text" name="title"  class="title_input" placeholder="输入日志标题…"></div>
                    <div>
                       关键词：<input type="text" name="keywords"/>&nbsp;&nbsp;
                       标 签：
                        <select name="name">
                            <option value="1">前端</option><option value="2">后端</option><option value="3">Linux</option><option value="4">JavaScript</option><option value="5">代码规范</option><option value="6">算法</option><option value="7">CSS</option><option value="8">数据库</option><option value="9">程序员</option><option value="10">MySQL</option><option value="22">rewe</option><option value="27">你好123</option><option value="28">435435</option><option value="29">76876</option><option value="30">你说jjj</option><option value="35">0221</option><option value="36">0220</option>                        </select>
                    </div>
                    <div class="right_box col-md-4">
                        <input type="submit" name="submit" value="发布日志" class="submit_btn">
    <!--                    <button>发布日志</button>-->
                        <div class="imgpath"><img src="/public/image/1.jpg" alt=""/></div>
                    </div>
                </header>
                
                <div id="test-editormd" >
                    <textarea name="content" autofocus="autofocus"></textarea>
                </div>
            </div>  
        </form>
        
        
                热门文章
<ul>
    <li>文章1</li>
    <li>文章2</li>
    <li>文章3</li>
    <li>文章4</li>
</ul>
        
        
        
        <script src="/public/js/jquery.min.js"></script>
        <script src="/public/lib/editormd/editormd.js"></script>


        <script type="text/javascript">
            $(function() {                
                var testEditor = editormd("test-editormd", {
                    width: "90%",
                    height: 640,
                    markdown : "",
                    path : '/public/lib/editormd/lib/',
                    //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为 true
                    //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为 true
                    //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为 true
                    //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为 0.1
                    //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为 #fff
                    imageUpload : true,
                    imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                    imageUploadURL : "./php/upload.php?test=dfdf",
                    
                    /*
                     上传的后台只需要返回一个 JSON 数据，结构如下：
                     {
                        success : 0 | 1,           // 0 表示上传失败，1 表示上传成功
                        message : "提示的信息，上传成功或上传失败及错误信息等。",
                        url     : "图片地址"        // 上传成功时才返回
                     }
                     */
                });
            });
        </script>
    </body>
</html><div id="think_page_trace" style="position: fixed;bottom:0;right:0;font-size:14px;width:100%;z-index: 999999;color: #000;text-align:left;font-family:'微软雅黑';">
<div id="think_page_trace_tab" style="display: none;background:white;margin:0;height: 250px;">
<div id="think_page_trace_tab_tit" style="height:30px;padding: 6px 12px 0;border-bottom:1px solid #ececec;border-top:1px solid #ececec;font-size:16px">
	    <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">基本</span>
        <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">文件</span>
        <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">流程</span>
        <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">错误</span>
        <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">SQL</span>
        <span style="color:#000;padding-right:12px;height:30px;line-height: 30px;display:inline-block;margin-right:3px;cursor: pointer;font-weight:700">调试</span>
    </div>
<div id="think_page_trace_tab_cont" style="overflow:auto;height:212px;padding: 0; line-height: 24px">
		    <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">请求信息 : 2022-02-26 18:55:12 HTTP/1.1 GET : /home/index/addblog</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">运行时间 : 0.1142s ( Load:0.0353s Init:0.0102s Exec:0.0104s Template:0.0583s )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">吞吐率 : 8.76req/s</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">内存开销 : 300.48 kb</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">查询信息 : 1 queries 0 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">文件加载 : 33</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">缓存信息 : 0 gets 0 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">配置加载 : 123</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">会话信息 : SESSION_ID=clal08v7g5t3hv2f44cv2b4b16</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\index.php ( 1.01 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\ThinkPHP.php ( 4.71 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Think.class.php ( 12.32 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Storage.class.php ( 1.38 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Storage\Driver\File.class.php ( 3.56 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Mode\common.php ( 2.82 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Common\functions.php ( 52.60 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Hook.class.php ( 4.02 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\App.class.php ( 12.44 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Dispatcher.class.php ( 15.15 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Route.class.php ( 13.38 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Controller.class.php ( 10.95 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\View.class.php ( 7.96 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Behavior\BuildLiteBehavior.class.php ( 3.69 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Behavior\ParseTemplateBehavior.class.php ( 3.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Behavior\ContentReplaceBehavior.class.php ( 1.93 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Conf\convention.php ( 11.18 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\Application\Common\Conf\config.php ( 0.57 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Lang\zh-cn.php ( 2.57 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Conf\debug.php ( 1.51 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\Application\Home\Conf\config.php ( 0.08 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Behavior\ReadHtmlCacheBehavior.class.php ( 5.62 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\Application\Home\Controller\IndexController.class.php ( 52.76 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Model.class.php ( 67.27 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Db.class.php ( 5.70 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Db\Driver\Mysql.class.php ( 8.73 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Db\Driver.class.php ( 41.60 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Template.class.php ( 28.35 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Template\TagLib\Cx.class.php ( 22.62 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Think\Template\TagLib.class.php ( 9.19 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\Application\Runtime\Cache\Home\dc2db6718ae4c02edd16ad07b4ae32f8.php ( 5.44 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Behavior\WriteHtmlCacheBehavior.class.php ( 1.43 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\ThinkPHP\Library\Behavior\ShowPageTraceBehavior.class.php ( 5.27 KB )</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_init ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\BuildLiteBehavior [ RunTime:0.000013s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_init ] --END-- [ RunTime:0.000159s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ReadHtmlCacheBehavior [ RunTime:0.002038s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --END-- [ RunTime:0.002076s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ template_filter ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ContentReplaceBehavior [ RunTime:0.000035s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ template_filter ] --END-- [ RunTime:0.000067s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ParseTemplateBehavior [ RunTime:0.011295s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --END-- [ RunTime:0.011345s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\WriteHtmlCacheBehavior [ RunTime:0.002021s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --END-- [ RunTime:0.002048s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_end ] --START--</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[8] Constant APP_DEBUG already defined E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\Application\Home\Conf\config.php 第 4 行.</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[2048] Declaration of Home\Controller\IndexController::show() should be compatible with Think\Controller::show($content, $charset = '', $contentType = '', $prefix = '') E:\UPUPW_AP5.5-1510\UPUPW_AP5.5\vhosts\www.blog.com\Application\Home\Controller\IndexController.class.php 第 15 行.</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">select id,name from blog_type [ RunTime:0.0003s ]</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	    </ol>
    </div>
    </div>
</div>
<div id="think_page_trace_close" style="display:none;text-align:right;height:15px;position:absolute;top:10px;right:12px;cursor: pointer;"><img style="vertical-align:top;" src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAAMDA////wAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUQxMjc1MUJCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUQxMjc1MUNCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRDEyNzUxOUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRDEyNzUxQUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDPzs3My8rJyMfGxcTDwsHAv769vLu6ubi3trW0s7KxsK+urayrqqmop6alpKOioaCfnp2cm5qZmJeWlZSTkpGQj46NjIuKiYiHhoWEg4KBgH9+fXx7enl4d3Z1dHNycXBvbm1sa2ppaGdmZWRjYmFgX15dXFtaWVhXVlVUU1JRUE9OTUxLSklIR0ZFRENCQUA/Pj08Ozo5ODc2NTQzMjEwLy4tLCsqKSgnJiUkIyIhIB8eHRwbGhkYFxYVFBMSERAPDg0MCwoJCAcGBQQDAgEAACH5BAAAAAAALAAAAAAPAA8AAAIdjI6JZqotoJPR1fnsgRR3C2jZl3Ai9aWZZooV+RQAOw==" /></div>
</div>
<div id="think_page_trace_open" style="height:30px;float:right;text-align: right;overflow:hidden;position:fixed;bottom:0;right:0;color:#000;line-height:30px;cursor:pointer;"><div style="background:#232323;color:#FFF;padding:0 6px;float:right;line-height:30px;font-size:14px">0.1142s </div><img width="30" style="" title="ShowPageTrace" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVERDVENkZGQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVERDVENzAwQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NURENUQ2RkRCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NURENUQ2RkVCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5fx6IRAAAMCElEQVR42sxae3BU1Rk/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"></div>
<script type="text/javascript">
(function(){
var tab_tit  = document.getElementById('think_page_trace_tab_tit').getElementsByTagName('span');
var tab_cont = document.getElementById('think_page_trace_tab_cont').getElementsByTagName('div');
var open     = document.getElementById('think_page_trace_open');
var close    = document.getElementById('think_page_trace_close').childNodes[0];
var trace    = document.getElementById('think_page_trace_tab');
var cookie   = document.cookie.match(/thinkphp_show_page_trace=(\d\|\d)/);
var history  = (cookie && typeof cookie[1] != 'undefined' && cookie[1].split('|')) || [0,0];
open.onclick = function(){
	trace.style.display = 'block';
	this.style.display = 'none';
	close.parentNode.style.display = 'block';
	history[0] = 1;
	document.cookie = 'thinkphp_show_page_trace='+history.join('|')
}
close.onclick = function(){
	trace.style.display = 'none';
this.parentNode.style.display = 'none';
	open.style.display = 'block';
	history[0] = 0;
	document.cookie = 'thinkphp_show_page_trace='+history.join('|')
}
for(var i = 0; i < tab_tit.length; i++){
	tab_tit[i].onclick = (function(i){
		return function(){
			for(var j = 0; j < tab_cont.length; j++){
				tab_cont[j].style.display = 'none';
				tab_tit[j].style.color = '#999';
			}
			tab_cont[i].style.display = 'block';
			tab_tit[i].style.color = '#000';
			history[1] = i;
			document.cookie = 'thinkphp_show_page_trace='+history.join('|')
		}
	})(i)
}
parseInt(history[0]) && open.click();
(tab_tit[history[1]] || tab_tit[0]).click();
})();
</script>