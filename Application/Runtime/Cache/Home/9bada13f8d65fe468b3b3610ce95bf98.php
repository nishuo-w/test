<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <!--[if lt IE 9]>
        <script type="text/javascript" src="lib/html5shiv.js"></script>
        <script type="text/javascript" src="lib/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
        <link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
        <link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
        <!--[if IE 6]>
        <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="/public/css/page.css" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
        <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script  src="/public/js/jquery.js"></script>
        <title>用户管理</title>
    </head>
    <body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页  <span class="c-gray en">&gt;</span> 评论管理 <a class="btn btn-success radius r" id="refresh" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20">
        <span class="l btn btn-success radius"> 评论列表</span>
        <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span>    
        

    </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
                <tr class="text-c" >
                    <th width="25"><input type="checkbox" name="check" id="check_all" value=""></th>
                    <th width="20">ID</th>
                    <th width="100">日志标题</th>
                    <th width="100">评论者</th>
                    <th width="100">内容</th>
                    <th width="100">时间</th>
                    <th width="100">状态</th>
                    <!--<th width="100">操作</th>-->
                </tr>
            </thead>
            <tbody>       
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c" id="tr<?php echo ($vo["id"]); ?>"> 
                    <td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name="" class="check"></td>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td style=" text-align: left"><?php echo ($vo["title"]); ?></td>
                    <td><?php echo ($vo["nickname"]); ?></td>
                    <td><?php echo ($vo["text"]); ?></td>
                    <td><?php echo ($vo["time"]); ?></td>
<!--                            <?php if($vo[statu] == 0): ?><td><span class="btn btn-success">已发布</span></td>
                    <?php else: ?>
                        <td><span class="btn btn-danger">禁用</span></td><?php endif; ?>-->


                    <td><!--显示审核状态-->
                        <select id='' name=''>
                            <?php switch($vo["statu"]): case "0": ?><option selected value='0'>未审核</option>
                                    <option value='1'>已审核</option>
                                    <option value='2'>未通过</option><?php break;?>
                                <?php case "1": ?><option value='0'>未审核</option>
                                    <option selected value='1'>已审核</option>
                                    <option value='2'>未通过</option><?php break;?>
                                <?php case "2": ?><option  value='0'>未审核</option>
                                    <option value='1'>已审核</option>
                                    <option selected value='2'>未通过</option><?php break; endswitch;?>
                        </select>
                        <button onclick="statu1(this,<?php echo ($vo[id]); ?>)" class='btn btn-danger radius'>提交</button><!--<?php echo ($vo[id]); ?>  equal <?php echo ($vo["id"]); ?>-->
                    </td>
                    
<!--                            <td class="td-manage">
                        <a title="编辑" href="/home/admin/menu/id/<?php echo ($vo["id"]); ?>" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
                        <a title="删除" href="/home/admin/menudelete/id/<?php echo ($vo["id"]); ?>" class="ml-5  jq-del"  data-id="<?php echo ($vo["id"]); ?>" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>-->
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>
        </table>
    </div>
</div>
    
 <!--分页-->
<div id="page"> <?php echo ($show); ?></div>
    

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

function statu1(obj,id)
{
    //获取上一个select
    statu = $(obj).prev().val();
    //ajax提交数据
    $.post("<?php echo U(ajax_statu);?>",{statu:statu,id:id},function(data)
    {
        if(data == 1)
        {
            alert("修改成功");
        }
        else
        {
            alert("修改失败");
        }
    });
        
}


/*选择全部栏目*/
 $("#check_all").click(function(){
    $(".check").click(); 
 });

  $("#del_all").click(function datadel()
 {

    datas = $(".check:checked");//获取被选中的数据
    //遍历对象获取每一个数据的id
    //设置空数组
    arr = new Array();//数组保存选中的id
    for(i=0;i<datas.length;i++)
    {
        arr[arr.length] = datas.eq(i).val();
     }
     //alert(arr);输出该栏目的id

    str = arr.join(',');

    if( confirm("您确定删除所选的栏目？"))
    {
        //发送Ajax请求
        $.post("<?php echo U('ajax_delAllMenu');?>",{str:str},function(data)
        {
            if(data == 0)
            {
                alert("删除失败");
            }
            else if(data == arr.length)
            {
                for(i=0;i<arr.length;i++)
                {
                    $('#tr'+arr[i]).remove();//前端页面删除数据
                }
                alert("删除成功");
                $('#refresh').click();//页面自动刷新
            }
            else
            {
                alert("删除失败");
            }
        });
    }
    return flase;//点击“取消”按钮
 });
 
 /**/
 
 
 /*批量删除数据*/
//         function datadel()
//         {
//            datas = $(".check:checked");//获取被选中的数据
//            //遍历对象获取每一个数据的id
//            //设置空数组
//            arr = new Array();//数组保存选中的id
//            for(i=0;i<datas.length;i++)
//            {
//                arr[arr.length] = datas.eq(i).val();
//             }
//             //alert(arr);输出该栏目的id
// 
//            str = arr.join(',');
//            //发送Ajax请求
//            $.post("<?php echo U('ajax_delAll');?>",{str:str},function(data)
//            {
//                if(data == 0)
//                {
//                    alert("删除失败");
//                }
//                else if(data == arr.length)
//                {
//                    for(i=0;i<arr.length;i++)
//                    {
//                        $('#tr'+arr[i]).remove();//前端页面删除数据
//                    }
//                    alert("删除成功");
//                    $('#refresh').click();//页面自动刷新
//                }
//                else
//                {
//                    alert("删除失败");
//                }
//            });
//         }
//            
function save(id)
{
    alert(id);
    x = "#t" + id;
    alert($(x).val());
}

$(function () {
    $(".save").click(function () {
        id = $(this).parent().prev().prev().prev().text();
        sort = $(this).prev().val();

        $.post("/home/admin/save", {
            id: id,
            sort: sort
        },
                function (data) {
                    alert("保存成功，请关闭，并刷新主页面");
                });


    });
});

/*用户-添加*/
function member_add(title, url, w, h) {
    layer_show(title, url, w, h);
}
/*用户-查看*/
function member_show(title, url, id, w, h) {
    layer_show(title, url, w, h);
}
/*用户-停用*/
function member_stop(obj, id) {
    layer.confirm('确认要停用吗？', function (index) {
        $.ajax({
            type: 'POST',
            url: '',
            dataType: 'json',
            success: function (data) {
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
                $(obj).remove();
                layer.msg('已停用!', {icon: 5, time: 1000});
            },
            error: function (data) {
                console.log(data.msg);
            },
        });
    });
}

/*用户-启用*/
function member_start(obj, id) {
    layer.confirm('确认要启用吗？', function (index) {
        $.ajax({
            type: 'POST',
            url: '',
            dataType: 'json',
            success: function (data) {
                $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                $(obj).remove();
                layer.msg('已启用!', {icon: 6, time: 1000});
            },
            error: function (data) {
                console.log(data.msg);
            },
        });
    });
}
/*用户-编辑
function member_edit(title, url, id, w, h) {
    layer_show(title, url, w, h);
}*/
/*密码-修改*/
function change_password(title, url, id, w, h) {
    layer_show(title, url, w, h);
}

//删除前提示
$(".jq-del").click(function () {
    if (confirm("您确定要删除此栏目？")) 
    {
        var id = $(this).attr("data-id");
        //location.href = getCourseUrl() + '&page=1&exec=del&id=' + id + '&token=c15a2f6833d839516c2d95b4ce48456b';
        location.href = '/home/admin/menudelete/id/' + id;
    }
    return false;
});

</script> 
</body>
</html>