<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
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
        <title>管理员列表</title>
    </head>
    <body>
        <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 用户列表 <a  id="refresh"  class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
        <div class="page-container">

            <div class="cl pd-5 bg-1 bk-gray mt-20"> 
                <span class="l">
                    <a href="javascript:;" onclick="datadel()" id="del_all" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
                    <a href="javascript:;" onclick="admin_add('添加管理员', 'admin.html', '800', '500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a>
                </span>
                <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span>
            </div>
            <table class="table table-border table-bordered table-bg">
                <thead>
                    <tr>
                        <th scope="col" colspan="9">员工列表</th>
                    </tr>
                    <tr class="text-c">
                        <th width="25"><input type="checkbox" id="check_all"></th>
                        <th width="40">ID</th>
                        <th width="150">登录名</th>
                        <th width="150">邮箱</th>
                        <th width="200">角色</th>
                        <th width="100">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c" id="tr<?php echo ($vo["id"]); ?>">
                        <td><input type="checkbox" value="<?php echo ($vo["id"]); ?>" class="check"></td>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["username"]); ?></td>	
                        <td><?php echo ($vo["email"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td class="td-manage">
                            <a style="text-decoration:none" onClick="admin_stop(this, '10001')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
                            <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑', '/home/admin/admin/id/<?php echo ($vo["id"]); ?>', '1', '800', '500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
                            <a title="删除" href="/home/admin/admindelete/id/<?php echo ($vo["id"]); ?>" class="ml-5 jq-del"  data-id="<?php echo ($vo["id"]); ?>"    style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
<!--                            <a href="/home/admin/admin/id/<?php echo ($vo["id"]); ?>">编辑</a>-->
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
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
           //  alert(arr);输出该栏目的id
 
            str = arr.join(',');
            
            if( confirm("您确定删除所选的用户信息？"))
            {
                //发送Ajax请求
                $.post("<?php echo U('ajax_delAllUser');?>",{str:str},function(data)
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
         
         
            /*
             参数解释：
             title	标题
             url		请求的url
             id		需要操作的数据id
             w		弹出层宽度（缺省调默认值）
             h		弹出层高度（缺省调默认值）
             */
            /*管理员-增加*/
            function admin_add(title, url, w, h) {
                layer_show(title, url, w, h);
            }
            /*管理员-删除*/
            $(".jq-del").click(function () {
                if (confirm("确定要删除吗？")) {
                    var id = $(this).attr("data-id");
                    location.href = '/home/admin/admindelete/id/' + id;
                }
                return false;
            });

            /*管理员-编辑*/

            function admin_edit(title, url, id, w, h) {
                layer_show(title, url, w, h);
            }
            /*管理员-停用*/
            function admin_stop(obj, id) {
                layer.confirm('确认要停用吗？', function (index) {
                    //此处请求后台程序，下方是成功后的前台处理……

                    $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
                    $(obj).remove();
                    layer.msg('已停用!', {icon: 5, time: 1000});
                });
            }

            /*管理员-启用*/
            function admin_start(obj, id) {
                layer.confirm('确认要启用吗？', function (index) {
                    //此处请求后台程序，下方是成功后的前台处理……


                    $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!', {icon: 6, time: 1000});
                });
            }
        </script>
    </body>
</html>