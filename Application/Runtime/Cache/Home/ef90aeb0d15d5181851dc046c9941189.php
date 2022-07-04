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
        <link rel="stylesheet" href="/public/lib/editormd/css/style.css" />
        <link rel="stylesheet" href="/public/lib/editormd/css/editormd.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
        <script type="text/javascript" src="/public/lib/js/jquery.min.js"></script>
        <script src="/public/lib/editormd/editormd.min.js"></script>
    </head>
    <body>
        <!--<h1>转换前</h1>-->
<!--        <textarea id="demo1" style="width:800px;height:300px; display: none;">
            <?php echo ($html); ?>
        </textarea>   -->

        <!---转换后-->
        <div id="testEditorMdview" style="width:800px;">
            <textarea id="appendTest"  >
                <?php echo ($html); ?>
            </textarea>
        </div>
         <script src="/public/js/jquery.min.js"></script>
        <script src="/public/lib/editormd/editormd.js"></script>
        <script src="/public/lib/editormd/lib/marked.min.js"></script>
        <script src="/public/lib/editormd/lib/prettify.min.js"></script>
        <script src="/public/lib/editormd/lib/raphael.min.js"></script>
        <script src="/public/lib/editormd/lib/underscore.min.js"></script>
        <script src="/public/lib/editormd/lib/sequence-diagram.min.js"></script>
        <script src="/public/lib/editormd/lib/flowchart.min.js"></script>
        <script src="/public/lib/editormd/lib/jquery.flowchart.min.js"></script>
        
         <!--js开始-->
    <script type="text/javascript"> 
        //页面打开时自动加载函数
        $(document).ready(
            //markDown转HTMl的方法
            function (){
                //先对容器初始化，在需要展示的容器中创建textarea隐藏标签，
               // var content=$("#demo1").val();//获取需要转换的内容
               var content = $("#appendTest").val();
                $("#appendTest").val(content);//将需要转换的内容加到转换后展示容器的textarea隐藏标签中

                //转换开始,第一个参数是上面的div的id
                editormd.markdownToHTML("testEditorMdview", {
                    htmlDecode: "style,script,iframe", //可以过滤标签解码
                    emoji: true,
                    taskList:true,
                    tex: true,               // 默认不解析
                    flowChart:true,         // 默认不解析
                    sequenceDiagram:true // 默认不解析
                });
            });
    </script>
     <!--js结束-->

        

    </body>
</html>