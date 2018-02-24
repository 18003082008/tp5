<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"E:\new_gmsh\public/../application/admin\view\vip\vip_add.html";i:1518080274;s:51:"E:\new_gmsh\application\admin\view\Public\meta.html";i:1517816088;s:53:"E:\new_gmsh\application\admin\view\Public\footer.html";i:1517825973;}*/ ?>
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
	<link rel="stylesheet" type="text/css" href="/static/admin/lib/uploadify/uploadify.css" />
<title>新建网站角色 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo url('vip_add'); ?>" method="post" class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">VIP名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="roleName" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">图标：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input id="file_upload"  type="file" multiple="true" name="file" >
				<img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
				<input id="file_upload_image" name="pic" type="hidden" multiple="true" value="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">售价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">每月充值额度：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="max_pay">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">充值折扣：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="discount">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">一级佣金金额：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="commission1">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">二级佣金金额：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="commission2">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">三级佣金金额：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="commission3">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">返积分比例：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="score_rate">
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">不享受此佣金级别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list">
					<dd>
						<dl class="cl permission-list1">
							<dt>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0" id="user-Character-0-0">
									全选</label>
							</dt>
							<dd>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-0">
									添加</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-1">
									修改</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-2">
									删除</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-3">
									查看</label>
								<label class="">
									<input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-4">
									审核</label>
								<label class="c-orange"><input type="checkbox" value="" name="user-Character-0-0-0" id="user-Character-0-0-5"> 只能操作自己发布的</label>
							</dd>
						</dl>
					</dd>
				</dl>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">排序：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="sort">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">状态：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="status" type="radio" id="sex-1" checked value="1">
					<label for="sex-1">启用</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="status" value="0">
					<label for="sex-2">禁用</label>
				</div>

			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
			</div>
		</div>
	</form>
</article>


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
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/lib/uploadify/jquery.uploadify.min.js"></script>

<script type="text/javascript">
    var SCOPE = {
        'uploadify_swf' : '/static/admin/lib/uploadify/uploadify.swf',
        'image_upload' : "<?php echo url('api/Image/upload'); ?>",
    };
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});
	
	/*$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			//parent.layer.close(index);
		}
	});*/
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/js/image.js"></script>
</body>
</html>