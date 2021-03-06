<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"E:\new_gmsh\public/../application/admin\view\vip\vip_list.html";i:1517882460;s:51:"E:\new_gmsh\application\admin\view\Public\meta.html";i:1517816088;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->
<title>VIP管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> VIP管理 <span class="c-gray en">&gt;</span> VIP套餐 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加套餐','vip_add.html','800')"><i class="Hui-iconfont">&#xe600;</i> 添加套餐</a> </span>  </div>
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>

			<tr class="text-c">
				<th width=""><input type="checkbox" value="" name=""></th>
				<th width="">ID</th>
				<th width="">图标</th>
				<th>名称</th>
				<th width="">价格</th>
				<th width="">每月充值额度</th>
				<th width="">充值折扣</th>
				<th width="">一级佣金金额</th>
				<th width="">二级佣金金额</th>
				<th width="">三级佣金金额</th>
				<th width="">返积分比例</th>
				<th width="">排序</th>
				<th width="">状态</th>
				<th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($data as $v): ?>
			<tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td><?php echo $v['id']; ?></td>
				<td><img src="<?php echo $v['pic']; ?>"> </td>
				<td><?php echo $v['name']; ?></a></td>
				<td><?php echo $v['price']; ?></td>
				<td><?php echo $v['max_pay']; ?></td>
				<td><?php echo $v['discount']; ?></td>
				<td><?php echo $v['commission1']; ?></td>
				<td><?php echo $v['commission2']; ?></td>
				<td><?php echo $v['commission3']; ?></td>
				<td><?php echo $v['score_rate']; ?></td>
				<td><?php echo $v['enjoy']; ?></td>
				<td><?php echo $v['sort']; ?></td>
				<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','1')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript">
/*管理员-角色-添加*/
function admin_role_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-编辑*/
function admin_role_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-删除*/
function admin_role_del(obj,id){
	layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
</script>
</body>
</html>