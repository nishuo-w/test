<?php if (!defined('THINK_PATH')) exit();?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>后台</title>
        
        <link rel="stylesheet" href="/Public/css/reset.css">
        <link rel="stylesheet" href="/Public/css/list.css">
        <link rel="stylesheet" href="/Public/css/dashicons.css">
        <link rel="stylesheet" href="/Public/css/newslist.css">
        <script src="/Public/js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/public/css/page.css" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            th{text-align: center;}
        </style>
    </head>
    <body>
        <div class="wrap wrap-course">
            <h1>日志管理</h1>
            <div class="s-nav">
                <form action="/home/admin/newslist" method="post">
                    <div>
                        <select name="name">
                            <?php echo ($c); ?>
                        </select>
                        <input type="submit" class="btn btn-primary radius" name="search" value="筛选">
                    </div>

                    <div>
                        <input type="text" name="s" value="" placeholder="输入关键字">
                        <input type="submit" class="btn btn-primary radius" name="search" value="搜索文章">
                    </div>    

                    <div class="text-c"> 日期范围：
                        <input type="text" onfocus="WdatePicker()" id="datemin" name="t1" class="input-text Wdate" style="width:120px;">
                        -
                        <input type="text" onfocus="WdatePicker()" id="datemax" name="t2" class="input-text Wdate" style="width:120px;">

                        <input type="submit" class="btn btn-primary radius" name="search" value="搜索">
                    </div>
                </form>
                
                <span style="float:right;">共有数据：<strong><?php echo ($count); ?></strong> 条</span>
            </div>
            
            <div class="tips"></div>
            <div class="box">
                <div class="box-body">

                    <table>
                        <tr>
                            <th width="80">状态</th>
                            <th width="400">标题</th>
                            <th width="120">所属栏目</th>
                            <th width="150">作者</th>
                            <th width="150">创建时间</th>
                            <th width="200">操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td width="80" class="s-show"><i class="icon-yes">已发布</i></td>
                                <td width="400" class="s-title"><a href="/home/index/showblog/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></td>
                                <td width="120"><a href="/home/index/newslist/cid/<?php echo ($vo["type_id"]); ?>">[ <?php echo ($vo["name"]); ?> ]</a></td>
                                <td width="150"><?php echo ($vo["nickname"]); ?></td>
                                <td width="150"><?php echo ($vo["time"]); ?></td>
                                <td width="200" class="s-act">
                                    <a href="/home/admin/news/id/<?php echo ($vo["id"]); ?>" >编辑</a> <a href="/home/admin/newsdelete/id/<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="jq-del">删除</a>      
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>

                    <!--分页-->
                    <div id="page"> <?php echo ($show); ?></div>

                </div>
            </div>
           
        </div>
        <!--请在下方写此页面业务相关的脚本-->
        <script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
        <script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
        <script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
        <script>
            (function () {
                //自动生成URL
                function getCourseUrl() {
                    var target = '/?p=admin&c=course'; //目标链接
                    var category_id = $('select[name=category_id] option:selected').val();
                    var order = $('select[name=order] option:selected').val();
                    var search = encodeURIComponent($('input[name=search]').val());
                    return target + '&category_id=' + category_id + '&order=' + order + '&search=' + search;
                }

                //列表功能按钮
                $(".jq-change").click(function () {
                    location.href = getCourseUrl();
                });


                //删除前提示
                $(".jq-del").click(function () {
                    if (confirm("您确定要删除此文章？")) {
                        var id = $(this).attr("data-id");
                        //location.href = getCourseUrl() + '&page=1&exec=del&id=' + id + '&token=c15a2f6833d839516c2d95b4ce48456b';
                        location.href = '/home/admin/newsdelete/id/' + id;
                    }
                    return false;
                });
            })();
        </script>


    </body>
</html>