<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>日志详情--学习心得分享平台</title>
        <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-grid.css" />
        <link rel="stylesheet" href="/public/lib/editormd/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/header.css" />
        <link rel="stylesheet" href="/public/lib/editormd/css/editormd.css" />
        <link rel="stylesheet" type="text/css" href="/public/css/header.css" />
        <link rel="shortcut icon" href="https://pandao.github.io/editor.md/favicon.ico" type="image/x-icon" />
        <script type="text/javascript" src="/public/lib/js/jquery.min.js"></script>
        <script src="/public/lib/editormd/editormd.min.js"></script>

    <style>
        body{background:#e9ecef;}
        .left{border:1px solid red;background:#fff;padding-bottom:50px}
        .right{border:1px solid blue;background:#fff;}
       
    </style>
    </head>

    <body>

        <!--引入页面顶部-->
    <include file="./Public/header.html" />
     
    
    <div class="container d-flex  justify-content-between">   
        <div class="left col-md-8 ">
            <volist name="data" id="vo">
                <!--新闻详细信息-->
                <div class="as">
                    <h3 style='color:blue;line-height: 80px;'>{$vo.title}</h3> 

                    <if condition="$vo.user_id eq $_SESSION['userid'] ">
                        <a href="/home/index/editblog/id/{$vo.id}">编辑日志</a>
                    </if>

                    <div  style="font-size:13px;">
                        <span>作者：{$vo.username}</span>&nbsp;&nbsp;
                        <span>发表时间：{$vo.time}</span>&nbsp;&nbsp;
                        <span>阅读：{$vo.views}次</span>&nbsp;&nbsp;
                    </div>

                    <!---转换后-->
                    <div id="testEditorMdview"   class="center">
                        <textarea id="appendTest"><!----默认加分割线--->
                            
------------

                          {$vo.content}
                        </textarea>
                    </div>
                </div><!--as end-->    
                      
                <div class="tags d-flex flex-column align-items-start">
                    <div style="float:left">
                       <!--<p style='color:red;'><a href='/home/collect/index'>收藏({$vo.collects})</a></p>-->
                       <p >
                           标签：<a href="#">{$vo.name}</a>&nbsp;&nbsp;
                           <a href="/home/Index/praise/id/{$vo.id}">点赞({$vo.likes})</a>&nbsp;&nbsp;&nbsp;
                           <a href="/home/Index/collect/id/{$vo.id}">收藏({$vo.collects})</a>{$coll}&nbsp;&nbsp;&nbsp;
                           <a href="/home/Index/collect/id/{$vo.id}">评论({$count})</a><br/><br/>
                       </p>
                    </div>
                
                    <if condition="$pre[0]['title'] eq null  ">
                        <p><span>上一篇：没有了</span></p>
                    <else /> 
                         <p><span>上一篇：<a href='/home/index/showblog/id/{$pre[0]["id"]}'>{$pre[0]["title"]}</a></span></p>
                    </if>

                    <if condition="$next[0]['title'] eq null  ">
                        <p ><span>下一篇：没有了</span></p>&nbsp;&nbsp;&nbsp;&nbsp;
                    <else /> 
                    <p ><span>下一篇：<a href='/home/index/showblog/id/{$next[0]["id"]}'>{$next[0]["title"]}</a></span></p>
                    </if>
                </volist>
                </div>

            <!---用户评论表单-->
            <div class="col-md-12 text-left">
                <h5 style="border-bottom:1px solid #ccc;line-height: 50px;margin-bottom:10px;">发表评论</h5>
              <form method="get" action="/home/comment/addcomment/aid/{$aid}" id="commSubmit" >
                  <div style='width:100%;display:flex;margin-bottom:20px;'>
                    <div style='width:40px;height:40px;'>
                        <if condition="isset($_SESSION['userid']) eq null  ">
                           <img src="/upload/image/personPic.png" alt="" width='100%' height='100%' style='border-radius:50%'/>
                        <else/>
                            <img src="{$picPath[0]['pic']}" alt="" width='100%' height='100%' style='border-radius:50%'> 
                        </if>
                    </div>  
                    &nbsp;&nbsp;&nbsp;<input type='text' name="text" placeholder="撰写评论…" required style='outline:none;text-indent: 6px;width:100%;border:1px solid #ccc;border-radius: 8px;'/>
                  </div>              
                  <p><input type="submit" name="submit"  value="提交评论" class="btn-primary" style="padding:4px 8px;border:none;padding:5px 8px;float:right;border-radius: 6px;"/></p>
              </form>
           </div>
             <!--显示用户评论-->
             <div class='commments text-left col-md-12 float-none' style='clear:both'> 
                <h5 style='border-bottom:1px solid #ccc;line-height: 50px;margin-bottom:10px;'>全部评论&nbsp;&nbsp;&nbsp; {$count}</h5> 
                <volist name="comm" id="vo">
                    <div >
                        <!--a标签不能添加链接，否则回复弹框无法显示--->
                        <p><a href="#" class='reply' data-id='{$vo.id}'><span style='color:blue'>{$vo.id}-{$vo.username}：</span>{$vo.text}</a></p>
                    </div>

                    
                    <div id='reply_box{$vo.id}' style='display: none;'>
                        <form method="get" action="/home/comment/replyComment/aid/{$aid}/pid/{$vo.id}/from_uid/{$vo.from_uid}">
                           <input type="text" name="text" value="" style="border: 1px solid #333;"/>
                           <input type="submit" name="submit"  value="回复" />
                       </form>
                     </div>
                    
                    <!--显示用户回复内容-->
                    <volist name="reply" id='re' >
                        <p name='{$vo.id}'>{$re.username}回复{$vo.username}:{$re.text}<p>
                    </volist>
                    
                    
                </volist>  

                <volist name="reply" id="vo">
                    <div style='color:red;'>
                        <a href=''></a>{$vo.username}回复：<a href="/home/comment/"><span style='color:blue'></span>{$vo.text}</a>
                    </div>
                </volist> 
        
<!--            显示用户评论
            <volist name="comm" id="vo">
                <div style='color:red;'>
                    <a href="/home/comment/answer/pid/{$vo.id}"><span style='color:blue'>{$vo.username}：</span>{$vo.text}</a>
                </div>
            
            
                <form method="get" action="/home/comment/answerComment/aid/{$aid}/pid/{$vo.id}">
                    <input type="text" name="text" value="" style="border: 1px solid #333;"/>
                    <input type="submit" name="submit"  value="回复" />
                </form> 
            </volist>-->
            
             </div><!---显示用户评论-->
        
        </div><!--left end-->
        
        <div class="right col-md-3" style="background:#ccc;">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <picture class="rounded-circle me-3">
                            <a href="/u/zhaoshuaiqiang">
                                <img src="https://avatar-static.segmentfault.com/285/553/2855531177-5c8cc76cae4df_huge128" alt="avatar" width="64" height="64" class="rounded-circle"></a></picture><div>
                                    <h5 class="mb-0"><a href="/u/zhaoshuaiqiang" class="text-body">&nbsp;&nbsp;{$data[0]['username']}</a></h5>
                                </div></div>
<!--                    <div class="text-secondary text-truncate-2 userExcerpt mb-3">
                        <p>文章被阅读 <strong>230</strong>&nbsp;&nbsp;&nbsp;<strong>23</strong>粉丝</p>
                    </div>-->
                    <div class="text-left mb-3">
                            <div class="me-4"><p>文章被阅读 <strong>230</strong>&nbsp;&nbsp;&nbsp;</p></div>
                            <div><span class="text-secondary"> 获得<strong>372</strong>次点赞</span></div>
                            <div><span class="text-secondary"> <strong>32</strong>粉丝</span></div>
                    </div>
                    <form action="/home/user/follow/fid/{$data[0]['user_id']}" id='followAuthor'>
                    <div class="d-grid" >
                        <input type="submit" value="关注作者" class="btn btn-primary" >
                        <!-- <button type="button" class="btn btn-primary follow" data-id="{$data[0]['user_id']}" style="padding:6px 26px;text-align: center;background: #007bff;border-color: #007bff">关注作者</button> -->
                    </div>
                    </form>
                </div>
            </div>
        </div><!--right end-->
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
    <script src="/public/lib/editormd/editormd.js"></script>
        
         <!--js开始-->
    <script type="text/javascript"> 
        //页面打开时自动加载函数
        $(document).ready(
            //markDown转HTMl的方法
            function (){
                //先对容器初始化，在需要展示的容器中创建textarea隐藏标签，
                //var content=$("#demo1").val();//获取需要转换的内容
                var content =  $("#appendTest").val();
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
    
    
    <script>
        //获取当前评论id  显示回复框
        $(".reply").click(function(){
            var id = $(this).attr("data-id");//获取当前评论id
//            alert(id);
             if($('#reply_box'+id).css("display")=="block")//关闭或打开回复表单
             {
                 $('#reply_box'+id).css("display","none");
             }else
             {
                 $('#reply_box'+id).css("display","block");
             }
         });
    </script>


<!-- 关注好友 -->
<!-- <script type="text/javascript">
  
    $(".follow").click(function () {
        var fid = $(this).attr("data-id");
        location.href = '/home/user/follow/fid/' + fid;
        
        
    });
</script> -->
<script type="text/javascript">
    //关注好友
    $('#followAuthor').click(function(){
        $.ajax({
            url: '{:U("/home/user/follow")}',
            type: 'POST',
            dataType: 'json',
            success: function(data){
                if(data == 1){
                    $('.follow').text('已关注');
                    $('.follow').removeClass('btn-primary');
                    alert('已关注');
                }else if(data==2)
                {
                    alert('请先登录！');
                }else
                 {

                    $('.follow').text('关注作者');
                    alert('关注失败');
                }

            },
            
        });
    });

    //点击评论
    $('#commSubmit').click(function(data) {
        $.ajax({
            url: '{:U("/home/comment/addcomment")}',
            type: 'POST',
            dataType: 'json',
            success: function(data){
                if(data == 2){
                    alert('请先登录后再评论！');
                }else {
                    alert('评论发表成功');
                }

            },
            
        });
    });

</script>
</body>
</html>
