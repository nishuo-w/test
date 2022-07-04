<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

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
    <div class="top d-flex  row">
  <div class="left-side-nav col-md-8 col-sm-8 d-flex">
      <p class=" logo">学生学习心得分享平台</p>
      <ul class="navbar ulindex d-flex  justify-content-between ">

          <li class="nav-item ">
              <a href="/Home/Index/index/p/1.html" class="navlink  " >首 页</a>
          </li>
          <li class="nav-item active">
              <a href="index.html" class="navlink  " >新 闻</a>
          </li>
          <li class="nav-item ">
              <a href="index.html" class="navlink  " >博 问</a>
          </li>
         
          <li class="nav-item ">
              <a href="/home/index/mypage/uid/<?php echo ($userid); ?>" class="navlink  " >我 的</a>
          </li>
      </ul>
  </div>

  <ul class="navbar ulindex d-flex  justify-content-between right-side-nav col-md-4 col-sm-4">
      <li>
          <form class="form-inline "  method="get"  action="/home/index/search">
              <input class="form-control mr-sm-2" type="search" name="find" placeholder="Search" aria-label="Search">
              <button class="btn  btn-primary my-2 my-sm-0" type="submit" style="width:70px;text-align: center;background: #007bff;border-color: #007bff">搜 索</button>
          </form>
      </li>
      
      <?php if($_SESSION['userid'] ): ?><li><button class="btn  btn-primary" style="background: #007bff;border-color: #007bff"><a href="/home/index/addblog"  style="color:#fff;">写日志</a></button></li>
          <li>
              <span class="person-pic" >
                  <img src="<?php echo ($picPath[0]['pic']); ?>" width="100%" height="100%" style="border-radius: 50%;"/>
                  <ul>
                      <li><a href="/home/index/mypage/uid/<?php echo ($userid); ?>">我的主页</a></li> 
                      <li><a href="/home/index/mypage/uid/<?php echo ($userid); ?>">我的收藏</a></li> 
                      <li><a href="/home/login/logout">日志管理</a></li>
                      <li><a href="/home/User/editInfo/<?php echo ($serid); ?>">账号设置</a></li>
                      <li><a href="/home/login/logout">退出登录</a></li> 
                  </ul>
              </span>
          </li>

      <?php else: ?>
          <li><button  class="btn  btn-primary"> <a href="/home/login/allow"  style="color:#fff;"> 写日志</a></button></li>
          <li><a href="/home/user/login">登录 |</a> <a href="/home/user/register">注册</a></li><?php endif; ?>
      
  </ul>

</div>
     
    
    <div class="container d-flex  justify-content-between">   
        <div class="left col-md-8 ">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--新闻详细信息-->
                <div class="as">
                    <h3 style='color:blue;line-height: 80px;'><?php echo ($vo["title"]); ?></h3> 

                    <?php if($vo["user_id"] == $_SESSION['userid'] ): ?><a href="/home/index/editblog/id/<?php echo ($vo["id"]); ?>">编辑日志</a><?php endif; ?>

                    <div  style="font-size:13px;">
                        <span>作者：<?php echo ($vo["username"]); ?></span>&nbsp;&nbsp;
                        <span>发表时间：<?php echo ($vo["time"]); ?></span>&nbsp;&nbsp;
                        <span>阅读：<?php echo ($vo["views"]); ?>次</span>&nbsp;&nbsp;
                    </div>

                    <!---转换后-->
                    <div id="testEditorMdview"   class="center">
                        <textarea id="appendTest"><!----默认加分割线--->
                            
------------

                          <?php echo ($vo["content"]); ?>
                        </textarea>
                    </div>
                </div><!--as end-->    
                      
                <div class="tags d-flex flex-column align-items-start">
                    <div style="float:left">
                       <!--<p style='color:red;'><a href='/home/collect/index'>收藏(<?php echo ($vo["collects"]); ?>)</a></p>-->
                       <p >
                           标签：<a href="#"><?php echo ($vo["name"]); ?></a>&nbsp;&nbsp;
                           <a href="/home/Index/praise/id/<?php echo ($vo["id"]); ?>">点赞(<?php echo ($vo["likes"]); ?>)</a>&nbsp;&nbsp;&nbsp;
                           <a href="/home/Index/collect/id/<?php echo ($vo["id"]); ?>">收藏(<?php echo ($vo["collects"]); ?>)</a><?php echo ($coll); ?>&nbsp;&nbsp;&nbsp;
                           <a href="/home/Index/collect/id/<?php echo ($vo["id"]); ?>">评论(<?php echo ($count); ?>)</a><br/><br/>
                       </p>
                    </div>
                
                    <?php if($pre[0]['title'] == null ): ?><p><span>上一篇：没有了</span></p>
                    <?php else: ?> 
                         <p><span>上一篇：<a href='/home/index/showblog/id/<?php echo ($pre[0]["id"]); ?>'><?php echo ($pre[0]["title"]); ?></a></span></p><?php endif; ?>

                    <?php if($next[0]['title'] == null ): ?><p ><span>下一篇：没有了</span></p>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php else: ?> 
                    <p ><span>下一篇：<a href='/home/index/showblog/id/<?php echo ($next[0]["id"]); ?>'><?php echo ($next[0]["title"]); ?></a></span></p><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>

            <!---用户评论表单-->
            <div class="col-md-12 text-left">
                <h5 style="border-bottom:1px solid #ccc;line-height: 50px;margin-bottom:10px;">发表评论</h5>
              <form method="get" action="/home/comment/addcomment/aid/<?php echo ($aid); ?>" id="commSubmit" >
                  <div style='width:100%;display:flex;margin-bottom:20px;'>
                    <div style='width:40px;height:40px;'>
                        <?php if(isset($_SESSION['userid']) == null ): ?><img src="/upload/image/personPic.png" alt="" width='100%' height='100%' style='border-radius:50%'/>
                        <?php else: ?>
                            <img src="<?php echo ($picPath[0]['pic']); ?>" alt="" width='100%' height='100%' style='border-radius:50%'><?php endif; ?>
                    </div>  
                    &nbsp;&nbsp;&nbsp;<input type='text' name="text" placeholder="撰写评论…" required style='outline:none;text-indent: 6px;width:100%;border:1px solid #ccc;border-radius: 8px;'/>
                  </div>              
                  <p><input type="submit" name="submit"  value="提交评论" class="btn-primary" style="padding:4px 8px;border:none;padding:5px 8px;float:right;border-radius: 6px;"/></p>
              </form>
           </div>
             <!--显示用户评论-->
             <div class='commments text-left col-md-12 float-none' style='clear:both'> 
                <h5 style='border-bottom:1px solid #ccc;line-height: 50px;margin-bottom:10px;'>全部评论&nbsp;&nbsp;&nbsp; <?php echo ($count); ?></h5> 
                <?php if(is_array($comm)): $i = 0; $__LIST__ = $comm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div >
                        <!--a标签不能添加链接，否则回复弹框无法显示--->
                        <p><a href="#" class='reply' data-id='<?php echo ($vo["id"]); ?>'><span style='color:blue'><?php echo ($vo["id"]); ?>-<?php echo ($vo["username"]); ?>：</span><?php echo ($vo["text"]); ?></a></p>
                    </div>

                    
                    <div id='reply_box<?php echo ($vo["id"]); ?>' style='display: none;'>
                        <form method="get" action="/home/comment/replyComment/aid/<?php echo ($aid); ?>/pid/<?php echo ($vo["id"]); ?>/from_uid/<?php echo ($vo["from_uid"]); ?>">
                           <input type="text" name="text" value="" style="border: 1px solid #333;"/>
                           <input type="submit" name="submit"  value="回复" />
                       </form>
                     </div>
                    
                    <!--显示用户回复内容-->
                    <?php if(is_array($reply)): $i = 0; $__LIST__ = $reply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$re): $mod = ($i % 2 );++$i;?><p name='<?php echo ($vo["id"]); ?>'><?php echo ($re["username"]); ?>回复<?php echo ($vo["username"]); ?>:<?php echo ($re["text"]); ?><p><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>  

                <?php if(is_array($reply)): $i = 0; $__LIST__ = $reply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style='color:red;'>
                        <a href=''></a><?php echo ($vo["username"]); ?>回复：<a href="/home/comment/"><span style='color:blue'></span><?php echo ($vo["text"]); ?></a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?> 
        
<!--            显示用户评论
            <?php if(is_array($comm)): $i = 0; $__LIST__ = $comm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style='color:red;'>
                    <a href="/home/comment/answer/pid/<?php echo ($vo["id"]); ?>"><span style='color:blue'><?php echo ($vo["username"]); ?>：</span><?php echo ($vo["text"]); ?></a>
                </div>
            
            
                <form method="get" action="/home/comment/answerComment/aid/<?php echo ($aid); ?>/pid/<?php echo ($vo["id"]); ?>">
                    <input type="text" name="text" value="" style="border: 1px solid #333;"/>
                    <input type="submit" name="submit"  value="回复" />
                </form><?php endforeach; endif; else: echo "" ;endif; ?>-->
            
             </div><!---显示用户评论-->
        
        </div><!--left end-->
        
        <div class="right col-md-3" style="background:#ccc;">
            <div class="card" style="padding:10px;">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <picture class="rounded-circle me-3">
                            <a href="/u/zhaoshuaiqiang">
                                <img src="https://avatar-static.segmentfault.com/285/553/2855531177-5c8cc76cae4df_huge128" alt="avatar" width="64" height="64" class="rounded-circle"></a></picture><div>
                                    <h5 class="mb-0"><a href="/u/zhaoshuaiqiang" class="text-body">&nbsp;&nbsp;<?php echo ($data[0]['username']); ?></a></h5>
                                </div></div>
<!--                    <div class="text-secondary text-truncate-2 userExcerpt mb-3">
                        <p>文章被阅读 <strong>230</strong>&nbsp;&nbsp;&nbsp;<strong>23</strong>粉丝</p>
                    </div>-->
                    <div class="text-left mb-3">
                            <div class="me-4"><p>文章被阅读 <strong>230</strong>&nbsp;&nbsp;&nbsp;</p></div>
                            <div><span class="text-secondary"> 获得<strong>372</strong>次点赞</span></div>
                            <div><span class="text-secondary"> <strong>32</strong>粉丝</span></div>
                    </div>
                    <form action="/home/user/follow/fid/<?php echo ($data[0]['user_id']); ?>" id='followAuthor'>
                    <div class="d-grid" >
                        <input type="submit" value="关注作者" class="btn btn-primary" >
                        <!-- <button type="button" class="btn btn-primary follow" data-id="<?php echo ($data[0]['user_id']); ?>" style="padding:6px 26px;text-align: center;background: #007bff;border-color: #007bff">关注作者</button> -->
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
        // $.ajax({
            alert('dwewe');
        //     url: '<?php echo U("/home/user/follow");?>',
        //     type: 'POST',
        //     dataType: 'json',
        //     success: function(data){
        //         if(data == 1){
        //             $('.follow').text('已关注');
        //             $('.follow').removeClass('btn-primary');
        //             alert('已关注');
        //         }else if(data==2)
        //         {
        //             alert('请先登录！');
        //         }else
        //          {

        //             $('.follow').text('关注作者');
        //             alert('关注失败');
        //         }

        //     },
            
        // });
    });

    //点击评论
    $('#commSubmit').click(function(data) {
        $.ajax({
            url: '<?php echo U("/home/comment/addcomment");?>',
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