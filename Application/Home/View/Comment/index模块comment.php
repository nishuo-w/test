<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" type="text/css" href="/public/css/page.css" />
        <link rel="stylesheet" href="/public/css/header.css" /> 
        <link rel="stylesheet" href="/public/css/bootstrap.css" />
        <link rel="stylesheet" href="/public/css/mypage.css" />

        <title>学习心得分享平台--我的主页</title>
        <style>
            .comm_text{background-color: #f7f7f7;padding:10px 16px;border-radius:8px;}
            .comm_text .delComm{display:none;float:right;}
            .comm_text:hover a.delComm{display: inline-block;}
        </style>
    </head>


     <!--引入页面顶部-->
  <include file="./Public/header.html" />
      <!--引入个人主页导航栏-->
      <include file="./Public/pageMenu.html" />
        
        <div class="right-content col-md-8 col-sm-8  panel panel-default edit">
            <div>
                <h3 style="line-height: 50px;">我发表的评论</h3>
              <volist name='data' id='vo'>
                  <div style="border-top:1px solid #ccc;padding:10px 5px;">
                      <p>评论了 {$vo.nickname} 的文章&nbsp;&nbsp;&nbsp;<span><a href="/home/index/showblog/id/{$vo.aid}">{$vo.title}</a></span></p>
                      <p  class="comm_text">{$vo.text}
                          <a title="删除" href="/home/comment/deleteMyComm/id/{$vo.id}" class="ml-5  jq-del delComm"  data-id="{$vo.id}" >删除</a>&nbsp;&nbsp;&nbsp;
                      </p>
                  </div>
              </volist>
            </div>

        </div>
    </div>
        <!--_footer 作为公共模版分离出去-->
         <script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
        <script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
        <script type="text/javascript" src="/public/static/h-ui/js/H-ui.min.js"></script> 
        <script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script> 

        <!--请在下方写此页面业务相关的脚本-->
         <script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
        <script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script> 
        
        <script type="text/javascript">
            //删除前提示
            $(".jq-del").click(function () {
                if (confirm("评论一旦删除，不可恢复。确定要删除吗?")) 
                {
                    var id = $(this).attr("data-id");
                    location.href = '/home/comment/deleteMyComm/id/' + id;
                }
                return false;
            });
        </script>
    </body>
      </html>
    