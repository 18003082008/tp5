<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"E:\new_gmsh\public/../application/admin\view\goods\attribute_list.html";i:1518161315;s:51:"E:\new_gmsh\application\admin\view\Public\meta.html";i:1517816088;s:53:"E:\new_gmsh\application\admin\view\Public\footer.html";i:1517825973;}*/ ?>
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
<title>产品分类</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品属性 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius"  href="<?php echo url('attribute_add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加属性</a></span></div>
<div class="mt-20">
	<table class="table table-border table-bordered table-bg table-hover table-sort">
		<thead>
		<tr class="text-c">
			<th width="20"><input name="" type="checkbox" value=""></th>
			<th width="20">ID</th>
			<th width="200">名称</th>
			<th width="20">状态</th>
			<th width="100">操作</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($data as $vo): ?>
		<tr class="text-c va-m">
			<td><input name="" type="checkbox" value="<?php echo $vo['id']; ?>"></td>
			<td><?php echo $vo['id']; ?></td>
			<td><?php echo $vo['name']; ?></td>
			<td class="td-status">
				<?php if($vo['status']==1): ?>
				<span class="label label-success radius"  >√</span>
				<?php else: ?><span class="label label-error radius" >×</span>
				<?php endif; ?>

			</td>
			<td class="td-manage"> <a style="text-decoration:none" onclick="status(this,'<?php echo $vo['id']; ?>','<?php echo $vo['status']; ?>')" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe6de;</i></a><a style="text-decoration:none" class="ml-5"  href="<?php echo url('attribute_edit',['id'=>$vo['id']]); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="good_del(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
<script type="text/javascript">
    function clear(){
        $.ajax({
            //
            url:"<?php echo url('cache_clear'); ?>",
            type:'get',
            dataType:'json',
            async: false,
            success:function(data){
                layer.msg('清除成功', {icon: 1,time:2000});
                alert(1);
            },
            error:function(data){
                layer.msg('清除失败', {icon: 1,time:2000});
                alert(2);
            }

        });
    }

</script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script> 
<script type="text/javascript">
    function datadel(){
        layer.confirm('确认要删除吗？',function(index){
            //获取选中的id元素
            var id = $(':checkbox:checked');
            var ids = '';
            for(var i=0;i<id.length;i++) {
                ids += id[i].value + ',';
            }
            if(ids == '') {
                layer.msg('请选择要删除的选项');
                return;
            }
            ids = ids.substring(0,ids.length-1);
            $.ajax({
                url:"<?php echo url('Goods/attribute_del'); ?>",
                type:'get',
                data:{id:ids},
                dataType:'json',
                success:function(data){
                    if(data ==1){
                        $(':checkbox:checked').parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }else{
                        layer.msg(data,{icon:2,time:3000});
                    }
                }
            });
        });
    }
    function status(obj,id,status){
        if(status == 1){
            status=0;
        }else{
            status=1;
        }
        layer.confirm('确认要修改状态吗？',function(index){
            $.ajax({
                url:"<?php echo url('Goods/attribute_status'); ?>",
                type:'get',
                data:{id:id,status:status},
                dataType:'json',
                success:function(data){
                    if(data ==1){
                        location.replace(location.href);
                    }else{
                        layer.msg(data,{icon:2,time:3000});
                    }
                }
            });
        });
    }
    function good_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                url:"<?php echo url('Goods/attribute_del'); ?>",
                type:'get',
                data:{id:id},
                dataType:'json',
                success:function(data){
                    if(data ==1){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }else{
                        layer.msg(data,{icon:2,time:3000});
                    }
                }
            });
        });
    }
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "id",
			pIdKey: "pId",
			rootPId: ""
		}
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			/*var zTree = $.fn.zTree.getZTreeObj("tree");
			if (treeNode.isParent) {
				zTree.expandNode(treeNode);
				return false;
			} else {
				demoIframe.attr("src",treeNode.file + ".html");
				return true;
			}*/
		}
	}
};

var zNodes =[
	{ id:1, pId:0, name:"一级分类", open:true},
	{ id:11, pId:1, name:"二级分类"},
	{ id:111, pId:11, name:"三级分类"},
	{ id:112, pId:11, name:"三级分类"},
	{ id:113, pId:11, name:"三级分类"},
	{ id:114, pId:11, name:"三级分类"},
	{ id:115, pId:11, name:"三级分类"},
	{ id:12, pId:1, name:"二级分类 1-2"},
	{ id:121, pId:12, name:"三级分类 1-2-1"},
	{ id:122, pId:12, name:"三级分类 1-2-2"},
];
		
var code;
		
function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}
		
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	demoIframe = $("#testIframe");
	//demoIframe.on("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	//zTree.selectNode(zTree.getNodeByParam("id",'11'));
});
</script>
</body>
</html>