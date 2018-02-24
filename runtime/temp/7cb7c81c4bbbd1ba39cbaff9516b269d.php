<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"E:\new_gmsh\public/../application/admin\view\goods\good_list.html";i:1518586109;s:51:"E:\new_gmsh\application\admin\view\Public\meta.html";i:1517816088;}*/ ?>
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
<title>建材列表</title>
<link rel="stylesheet" href="/static/admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">
<!--<div class="pos-a" style="width:200px;left:0;top:0; bottom:0; height:100%; border-right:1px solid #e5e5e5; background-color:#f5f5f5; overflow:auto;">
	<ul id="treeDemo" class="ztree"></ul>
</div>-->
<div style="">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="text-c">
			<span class="select-box inline">
		<select name="" class="select">
			<option >全部分类</option>
			<?php foreach($type as $v): ?>
			<option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
			<?php endforeach; ?>
		</select>
		</span>
			<!--日期范围：
			<input type="text" onfocus="selecttime(1)" id="logmin" class="input-text Wdate" style="width:140px;">
			-
			<input type="text" onfocus="selecttime(2)" id="logmax" class="input-text Wdate" style="width:140px;">-->
			<input type="text" name="" id="" placeholder="商品名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜商品</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="good_add('添加商品','good_add.html')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加商品</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="10"><input name="" type="checkbox" value=""></th>
						<th width="20">ID</th>
						<th width="40">缩略图</th>
						<th width="">标题</th>
						<th width="40">分类</th>
						<th width="60">售价</th>
						<th width="50">可用积分</th>
						<th width="40">运费</th>
						<th width="80">每天奖励金额</th>
						<th width="90">获利周期（天）</th>
						<th width="30">热销</th>
						<th width="30">推荐</th>
						<th width="30">排序</th>
						<th width="30">属性</th>
						<th width="60">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($goods as $v): ?>
					<tr class="text-c va-m">
						<td><input name="" type="checkbox" value=""></td>
						<td><?php echo $v['id']; ?></td>
						<td><img width="40" height="40" t class="good-thumb" src="<?php echo $v['pic']; ?>"></td>
						<td class="text-l"><?php echo $v['title']; ?></td>
						<td class="text-l"><?php echo good_type($v['goods_type']); ?></td>
						<td><?php echo $v['price']; ?></td>
						<td><?php echo $v['score_price']; ?></td>
						<td><?php echo $v['ship_fee']; ?></td>
						<td><?php echo $v['day_award']; ?></td>
						<td><?php echo $v['N_day']; ?></td>
						<td><?php if($v['is_hot']==1): ?>
							<span class="label label-success radius"  >√</span>
							<?php else: ?><span class="label label-error radius" >×</span>
							<?php endif; ?></td>
						<td><?php if($v['recommend']==1): ?>
							<span class="label label-success radius"  >√</span>
							<?php else: ?><span class="label label-error radius" >×</span>
							<?php endif; ?></td>
						<td><?php echo $v['sort']; ?></td>
						<td class="td-status">
							<?php echo $v['attribute_name']; ?>
						<td class="td-manage"><a style="text-decoration:none" onClick="good_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="good_edit('商品编辑','<?php echo url('good_edit',['id'=>$v['id']]); ?>','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="good_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    function selecttime(flag){
        if(flag==1){
            var endTime = $("#countTimeend").val();
            if(endTime != ""){
                WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
                WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
        }else{
            var startTime = $("#countTimestart").val();
            if(startTime != ""){
                WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
                WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
        }
    }
/*var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pid",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
            if(treeNode.pid !=""){
                var id=treeNode.id;

                location.href="<?php echo url('good_list'); ?>?id="+id+"";

            }
		}
	}
};

var zNodes;
    $.ajax({
        //
        url:"<?php echo url('good_category_ajax'); ?>",
        type:'get',
        dataType:'json',
        async: false,
        success:function(data){
            zNodes=data;
            //console.log(data);
        }

    });*/
		
		
/*$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	//demoIframe = $("#testIframe");
	//demoIframe.on("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
});*/

$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
	]
});
/*产品-添加*/
function good_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-查看*/
function good_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-审核*/
function good_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="good_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="good_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*产品-下架*/
function good_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="good_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*产品-发布*/
function good_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="good_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}

/*产品-申请上线*/
function good_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*产品-编辑*/
function good_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*产品-删除*/
function good_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
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