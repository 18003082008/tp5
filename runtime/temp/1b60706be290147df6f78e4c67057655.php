<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"E:\new_gmsh\public/../application/admin\view\goods\good_edit.html";i:1518619964;s:51:"E:\new_gmsh\application\admin\view\Public\meta.html";i:1517816088;}*/ ?>
<!--_meta 作为公共模版分离出去-->
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
<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<style>
	.state-complete{

	}
</style>
</head>
<body>
<div class="page-container">
	<form action="<?php echo url('good_edit'); ?>" method="post" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $good['title']; ?>" placeholder="" id="" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">简略标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $good['shorttitle']; ?>" placeholder="" id="" name="shorttitle">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="goods_type" class="select">
					<?php foreach($type as $v): ?>
					<option value="<?php echo $v['id']; ?>" <?php echo $v['id']==$good['goods_type']?'selected':''; ?>><?php echo $v['name']; ?></option>
					<?php endforeach; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">售价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="price" id="" placeholder="" value="<?php echo $good['price']; ?>" class="input-text" style="width:90%">
				元</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">原价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="privilege_price" id="" placeholder="" value="<?php echo $good['privilege_price']; ?>" class="input-text" style="width:90%">
				元</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">成本：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="cost" id="" placeholder="" value="<?php echo $good['cost']; ?>" class="input-text" style="width:90%">
				元</div>
		</div>

		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">服务券：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="checkbox-1">
					<label for="checkbox-1">123</label>
				</div>
			</div>
		</div>-->
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品规格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="" id="" placeholder="输入长度" value="" class="input-text" style=" width:25%">
				MM
				<input type="text" name="" id="" placeholder="输入宽度" value="" class="input-text" style=" width:25%">
				MM
				<input type="text" name="" id="" placeholder="输入高度" value="" class="input-text" style=" width:25%">
				MM </div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">运费：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="ship_fee" id="" placeholder="" value="<?php echo $good['ship_fee']; ?>" class="input-text" style="width:90%">元
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">可用积分：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="score_price" id="" placeholder="" value="<?php echo $good['score_price']; ?>" class="input-text">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">VIP商品：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="is_vip" type="radio" id="sex-1" value="1" <?php echo $good['is_vip']==1?'checked':''; ?>>
					<label for="sex-1">是</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="is_vip" <?php echo $good['is_vip']==1?'':'checked'; ?> value="0">
					<label for="sex-2">否</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">赠送VIP：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" name="send_vip">
					<option>请选择</option>
					<?php foreach($send as $v): ?>
					<option value="<?php echo $v['id']; ?>" <?php echo $v['id']==$good['send_vip']?'selected':''; ?>><?php echo $v['name']; ?></option>
					<?php endforeach; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">一级佣金比例：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="commission1" id="" placeholder="" value="<?php echo $good['commission1']; ?>" class="input-text" style="width:90%">
				</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">二级佣金比例：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="commission2" id="" placeholder="" value="<?php echo $good['commission2']; ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">三级佣金比例：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="commission3" id="" placeholder="" value="<?php echo $good['commission3']; ?>" class="input-text" style="width:90%">
				</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">返积分比例：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="score_rate" id="" placeholder="" value="<?php echo $good['score_rate']; ?>" class="input-text" >
				</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">每天奖励金额：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="day_award" id="" placeholder="" value="<?php echo $good['day_award']; ?>" class="input-text" style="width:90%">
				元</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">获利周期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="N_day" id="" placeholder="" value="<?php echo $good['N_day']; ?>" class="input-text" style="width:90%">
				天</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">开售时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="time" id="datemin" name="start_time"  style="width:180px;" value="<?php echo $good['start_time']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">停售时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="time" id="datemax" name="end_time" style="width:180px;" value="<?php echo $good['end_time']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">每日销售数量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="number" name="day_num" id="" placeholder="" value="<?php echo $good['day_num']; ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">每人每天最大购买量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="number" name="max_num" id="" placeholder="" value="<?php echo $good['max_num']; ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">一键访问京东链接：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="pkurl" id="" placeholder="" value="<?php echo $good['pkurl']; ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">货到付款：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="COD" type="radio" id="sex-1" <?php echo $good['COD']==1?'checked':''; ?>>
					<label for="sex-1">支持</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="COD" <?php echo $good['COD']==1?'':'checked'; ?>>
					<label for="sex-2">不支持</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">已售：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="sold" id="" placeholder="" value="<?php echo $good['sold']; ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="stock" id="" placeholder="" value="<?php echo $good['stock']; ?>" class="input-text">
			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品介绍：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input id="file_upload"  type="file" multiple="true" name="file" >
				<img style="" id="upload_org_code_img" src="<?php echo $good['pic']; ?>" width="150" height="150">
				<input id="file_upload_image" name="pic" type="hidden" multiple="true" value="<?php echo $good['pic']; ?>">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">多图上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-list-container">
					<div class="queueList filled">
						<div id="dndArea" class="placeholder element-invisible">
							<div id="filePicker-2">
							</div>
							<p>或将照片拖到这里，单次最多可选300张</p>
						</div>
					</div>
					<ul class="filelist">
						<li id="WU_FILE_0" class="state-complete">
							<p class="title">php.jpg</p>
							<p class="imgWrap">
								<img src="/upload\20180211\940c6614be35f88cddc36b6ce6e7b90b.jpg"></p>
							<p class="progress"><span></span></p>
							<input type="hidden" name="pics[]" value="php.jpg">
							<div class="file-panel" style="height: 0px;"><span class="cancel">删除</span><span class="rotateRight">向右旋转</span><span class="rotateLeft">向左旋转</span></div></li></ul>
					<div class="statusBar" style="display:none;">
						<div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
						<div class="info"></div>
						<div class="btns">
							<div id="filePicker2"></div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品介绍：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script name="content" id="editor1" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">规格参数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <script name="parameter" id="editor2" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">包装售后：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script name="service" id="editor3" type="text/plain" style="width:100%;height:400px;"></script>
                </div>
		</div>
		<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">热销：</label>
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                    <div class="radio-box">
                    <input name="is_hot" type="radio" id="sex-1" >
                    <label for="sex-1">是</label>
                    </div>
                    <div class="radio-box">
                    <input type="radio" id="sex-2" name="is_hot" checked>
                <label for="sex-2">否</label>
                    </div>
                    </div>
		</div>
		<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">推荐：</label>
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                    <div class="radio-box">
                    <input name="recommend" type="radio" id="sex-1" >
                    <label for="sex-1">是</label>
                    </div>
                    <div class="radio-box">
                    <input type="radio" id="sex-2" name="recommend" checked>
                <label for="sex-2">否</label>
                    </div>
                    </div>
		</div>
		<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">属性：</label>
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
						<?php foreach($attribute as $v): ?>
                    <div class="check-box">
                    <input type="checkbox" id="checkbox-1" name="attribute_id" value="<?php echo $v['id']; ?>">
                    <label for="checkbox-1"><?php echo $v['name']; ?></label>
                    </div>
						<?php endforeach; ?>

				</div>
		</div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">排序值：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="0" placeholder="" id="" name="sort">
                </div>
                </div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit">确定</button>

				<button onClick="layer_close();" class="btn btn-default radius" type="button">取消</button>
			</div>
		</div>
		<input type="hidden" value="" id="edit1">
		<input type="hidden" value="" id="edit2">
		<input type="hidden" value="" id="edit3">
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/static/admin/lib/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="/static/admin/js/image.js"></script>
<script type="text/javascript">
    var SCOPE = {
        'uploadify_swf' : '/static/admin/lib/uploadify/uploadify.swf',
        'image_upload' : "<?php echo url('api/Image/upload'); ?>",
    };
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
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$list = $("#fileList"),
	$btn = $("#btn-star"),
	state = "pending",
	uploader;

	var uploader = WebUploader.create({
		auto: true,
		swf: '/static/admin/lib/webuploader/0.1.5/Uploader.swf',
	
		// 文件接收服务端。
		server: '/static/admin/lib/webuploader/0.1.5/server/fileupload.php',
	
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker',
	
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		}
	});
	uploader.on( 'fileQueued', function( file ) {
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list.append( $li );
	
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader.makeThumb( file, function( error, src ) {
			if ( error ) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}

			$img.attr( 'src', src );
		}, thumbnailWidth, thumbnailHeight );
	});
	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
			$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function( file ) {
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
	});
	
	// 文件上传失败，显示上传出错。
	uploader.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});
	
	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });

    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });

});

(function( $ ){
    // 当domReady的时候开始初始化
    $(function() {
        var $wrap = $('.uploader-list-container'),

            // 图片容器
            $queue = $( '<ul class="filelist"></ul>' )
                .appendTo( $wrap.find( '.queueList' ) ),

            // 状态栏，包括进度和控制按钮
            $statusBar = $wrap.find( '.statusBar' ),

            // 文件总体选择信息。
            $info = $statusBar.find( '.info' ),

            // 上传按钮
            $upload = $wrap.find( '.uploadBtn' ),

            // 没选择文件之前的内容。
            $placeHolder = $wrap.find( '.placeholder' ),

            $progress = $statusBar.find( '.progress' ).hide(),

            // 添加的文件数量
            fileCount = 0,

            // 添加的文件总大小
            fileSize = 0,

            // 优化retina, 在retina下这个值是2
            ratio = window.devicePixelRatio || 1,

            // 缩略图大小
            thumbnailWidth = 110 * ratio,
            thumbnailHeight = 110 * ratio,

            // 可能有pedding, ready, uploading, confirm, done.
            state = 'pedding',

            // 所有文件的进度信息，key为file id
            percentages = {},
            // 判断浏览器是否支持图片的base64
            isSupportBase64 = ( function() {
                var data = new Image();
                var support = true;
                data.onload = data.onerror = function() {
                    if( this.width != 1 || this.height != 1 ) {
                        support = false;
                    }
                }
                console.log(data);
                data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
                return support;
            } )(),

            // 检测是否已经安装flash，检测flash的版本
            flashVersion = ( function() {
                var version;

                try {
                    version = navigator.plugins[ 'Shockwave Flash' ];
                    version = version.description;
                } catch ( ex ) {
                    try {
                        version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash')
                                .GetVariable('$version');
                    } catch ( ex2 ) {
                        version = '0.0';
                    }
                }
                version = version.match( /\d+/g );
                return parseFloat( version[ 0 ] + '.' + version[ 1 ], 10 );
            } )(),

            supportTransition = (function(){
                var s = document.createElement('p').style,
                    r = 'transition' in s ||
                            'WebkitTransition' in s ||
                            'MozTransition' in s ||
                            'msTransition' in s ||
                            'OTransition' in s;
                s = null;
                return r;
            })(),

            // WebUploader实例
            uploader;

        if ( !WebUploader.Uploader.support('flash') && WebUploader.browser.ie ) {

            // flash 安装了但是版本过低。
            if (flashVersion) {
                (function(container) {
                    window['expressinstallcallback'] = function( state ) {
                        switch(state) {
                            case 'Download.Cancelled':
                                alert('您取消了更新！')
                                break;

                            case 'Download.Failed':
                                alert('安装失败')
                                break;

                            default:
                                alert('安装已成功，请刷新！');
                                break;
                        }
                        delete window['expressinstallcallback'];
                    };

                    var swf = 'expressInstall.swf';
                    // insert flash object
                    var html = '<object type="application/' +
                            'x-shockwave-flash" data="' +  swf + '" ';

                    if (WebUploader.browser.ie) {
                        html += 'classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" ';
                    }

                    html += 'width="100%" height="100%" style="outline:0">'  +
                        '<param name="movie" value="' + swf + '" />' +
                        '<param name="wmode" value="transparent" />' +
                        '<param name="allowscriptaccess" value="always" />' +
                    '</object>';

                    container.html(html);

                })($wrap);

            // 压根就没有安转。
            } else {
                $wrap.html('<a href="http://www.adobe.com/go/getflashplayer" target="_blank" border="0"><img alt="get flash player" src="http://www.adobe.com/macromedia/style_guide/images/160x41_Get_Flash_Player.jpg" /></a>');
            }

            return;
        } else if (!WebUploader.Uploader.support()) {
            alert( 'Web Uploader 不支持您的浏览器！');
            return;
        }

        // 实例化
        uploader = WebUploader.create({
            pick: {
                id: '#filePicker-2',
                label: '点击选择图片'
            },
            formData: {
                uid: 123
            },
            dnd: '#dndArea',
            paste: '#uploader',
            swf: '/static/admin/lib/webuploader/0.1.5/Uploader.swf',
            chunked: false,
            chunkSize: 512 * 1024,
            server: '/static/admin/lib/webuploader/0.1.5/server/fileupload.php',
            // runtimeOrder: 'flash',

            // accept: {
            //     title: 'Images',
            //     extensions: 'gif,jpg,jpeg,bmp,png',
            //     mimeTypes: 'image/*'
            // },

            // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。
            disableGlobalDnd: true,
            fileNumLimit: 300,
            fileSizeLimit: 200 * 1024 * 1024,    // 200 M
            fileSingleSizeLimit: 50 * 1024 * 1024    // 50 M
        });

        // 拖拽时不接受 js, txt 文件。
        uploader.on( 'dndAccept', function( items ) {
            var denied = false,
                len = items.length,
                i = 0,
                // 修改js类型
                unAllowed = 'text/plain;application/javascript ';

            for ( ; i < len; i++ ) {
                // 如果在列表里面
                if ( ~unAllowed.indexOf( items[ i ].type ) ) {
                    denied = true;
                    break;
                }
            }

            return !denied;
        });

        uploader.on('dialogOpen', function() {
            console.log('here');
        });

        // uploader.on('filesQueued', function() {
        //     uploader.sort(function( a, b ) {
        //         if ( a.name < b.name )
        //           return -1;
        //         if ( a.name > b.name )
        //           return 1;
        //         return 0;
        //     });
        // });

        // 添加“添加文件”的按钮，
        uploader.addButton({
            id: '#filePicker2',
            label: '继续添加'
        });

        uploader.on('ready', function() {
            window.uploader = uploader;
        });

        // 当有文件添加进来时执行，负责view的创建
        function addFile( file ) {
            var $li = $( '<li id="' + file.id + '">' +
                    '<p class="title">' + file.name + '</p>' +
                    '<p class="imgWrap"></p>'+
                    '<p class="progress"><span></span></p>' +
					'<input type="hidden" name="pics[]" value="'+file.name+'">'+
                    '</li>' ),

                $btns = $('<div class="file-panel">' +
                    '<span class="cancel">删除</span>' +
                    '<span class="rotateRight">向右旋转</span>' +
                    '<span class="rotateLeft">向左旋转</span></div>').appendTo( $li ),
                $prgress = $li.find('p.progress span'),
                $wrap = $li.find( 'p.imgWrap' ),
                $info = $('<p class="error"></p>'),

                showError = function( code ) {
                    switch( code ) {
                        case 'exceed_size':
                            text = '文件大小超出';
                            break;

                        case 'interrupt':
                            text = '上传暂停';
                            break;

                        default:
                            text = '上传失败，请重试';
                            break;
                    }

                    $info.text( text ).appendTo( $li );
                };

            if ( file.getStatus() === 'invalid' ) {
                showError( file.statusText );
            } else {
                // @todo lazyload
                $wrap.text( '预览中' );
                uploader.makeThumb( file, function( error, src ) {
                    var img;

                    if ( error ) {
                        $wrap.text( '不能预览' );
                        return;
                    }

                    if( isSupportBase64 ) {
                        img = $('<img src="'+src+'">');
                        $wrap.empty().append( img );
                    } else {
                        $.ajax('/static/admin/lib/webuploader/0.1.5/server/preview.php', {
                            method: 'POST',
                            data: src,
                            dataType:'json'
                        }).done(function( response ) {
                            if (response.result) {
                                img = $('<img src="'+response.result+'">');
                                $wrap.empty().append( img );
                            } else {
                                $wrap.text("预览出错");
                            }
                        });
                    }
                }, thumbnailWidth, thumbnailHeight );

                percentages[ file.id ] = [ file.size, 0 ];
                file.rotation = 0;
            }

            file.on('statuschange', function( cur, prev ) {
                if ( prev === 'progress' ) {
                    $prgress.hide().width(0);
                } else if ( prev === 'queued' ) {
                    $li.off( 'mouseenter mouseleave' );
                    $btns.remove();
                }

                // 成功
                if ( cur === 'error' || cur === 'invalid' ) {
                    console.log( file.statusText );
                    showError( file.statusText );
                    percentages[ file.id ][ 1 ] = 1;
                } else if ( cur === 'interrupt' ) {
                    showError( 'interrupt' );
                } else if ( cur === 'queued' ) {
                    percentages[ file.id ][ 1 ] = 0;
                } else if ( cur === 'progress' ) {
                    $info.remove();
                    $prgress.css('display', 'block');
                } else if ( cur === 'complete' ) {
                    $li.append( '<span class="success"></span>' );
                }

                $li.removeClass( 'state-' + prev ).addClass( 'state-' + cur );
            });

            $li.on( 'mouseenter', function() {
                $btns.stop().animate({height: 30});
            });

            $li.on( 'mouseleave', function() {
                $btns.stop().animate({height: 0});
            });

            $btns.on( 'click', 'span', function() {
                var index = $(this).index(),
                    deg;

                switch ( index ) {
                    case 0:
                        uploader.removeFile( file );
                        return;

                    case 1:
                        file.rotation += 90;
                        break;

                    case 2:
                        file.rotation -= 90;
                        break;
                }

                if ( supportTransition ) {
                    deg = 'rotate(' + file.rotation + 'deg)';
                    $wrap.css({
                        '-webkit-transform': deg,
                        '-mos-transform': deg,
                        '-o-transform': deg,
                        'transform': deg
                    });
                } else {
                    $wrap.css( 'filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation='+ (~~((file.rotation/90)%4 + 4)%4) +')');
                    // use jquery animate to rotation
                    // $({
                    //     rotation: rotation
                    // }).animate({
                    //     rotation: file.rotation
                    // }, {
                    //     easing: 'linear',
                    //     step: function( now ) {
                    //         now = now * Math.PI / 180;

                    //         var cos = Math.cos( now ),
                    //             sin = Math.sin( now );

                    //         $wrap.css( 'filter', "progid:DXImageTransform.Microsoft.Matrix(M11=" + cos + ",M12=" + (-sin) + ",M21=" + sin + ",M22=" + cos + ",SizingMethod='auto expand')");
                    //     }
                    // });
                }


            });

            $li.appendTo( $queue );
        }

        // 负责view的销毁
        function removeFile( file ) {
            var $li = $('#'+file.id);

            delete percentages[ file.id ];
            updateTotalProgress();
            $li.off().find('.file-panel').off().end().remove();
        }

        function updateTotalProgress() {
            var loaded = 0,
                total = 0,
                spans = $progress.children(),
                percent;

            $.each( percentages, function( k, v ) {
                total += v[ 0 ];
                loaded += v[ 0 ] * v[ 1 ];
            } );

            percent = total ? loaded / total : 0;


            spans.eq( 0 ).text( Math.round( percent * 100 ) + '%' );
            spans.eq( 1 ).css( 'width', Math.round( percent * 100 ) + '%' );
            updateStatus();
        }

        function updateStatus() {
            var text = '', stats;

            if ( state === 'ready' ) {
                text = '选中' + fileCount + '张图片，共' +
                        WebUploader.formatSize( fileSize ) + '。';
            } else if ( state === 'confirm' ) {
                stats = uploader.getStats();
                if ( stats.uploadFailNum ) {
                    text = '已成功上传' + stats.successNum+ '张照片至XX相册，'+
                        stats.uploadFailNum + '张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>'
                }

            } else {
                stats = uploader.getStats();
                text = '共' + fileCount + '张（' +
                        WebUploader.formatSize( fileSize )  +
                        '），已上传' + stats.successNum + '张';

                if ( stats.uploadFailNum ) {
                    text += '，失败' + stats.uploadFailNum + '张';
                }
            }

            $info.html( text );
        }

        function setState( val ) {
            var file, stats;

            if ( val === state ) {
                return;
            }

            $upload.removeClass( 'state-' + state );
            $upload.addClass( 'state-' + val );
            state = val;

            switch ( state ) {
                case 'pedding':
                    $placeHolder.removeClass( 'element-invisible' );
                    $queue.hide();
                    $statusBar.addClass( 'element-invisible' );
                    uploader.refresh();
                    break;

                case 'ready':
                    $placeHolder.addClass( 'element-invisible' );
                    $( '#filePicker2' ).removeClass( 'element-invisible');
                    $queue.show();
                    $statusBar.removeClass('element-invisible');
                    uploader.refresh();
                    break;

                case 'uploading':
                    $( '#filePicker2' ).addClass( 'element-invisible' );
                    $progress.show();
                    $upload.text( '暂停上传' );
                    break;

                case 'paused':
                    $progress.show();
                    $upload.text( '继续上传' );
                    break;

                case 'confirm':
                    $progress.hide();
                    $( '#filePicker2' ).removeClass( 'element-invisible' );
                    $upload.text( '开始上传' );

                    stats = uploader.getStats();
                    if ( stats.successNum && !stats.uploadFailNum ) {
                        setState( 'finish' );
                        return;
                    }
                    break;
                case 'finish':
                    stats = uploader.getStats();
                    if ( stats.successNum ) {
                        alert( '上传成功' );
                    } else {
                        // 没有成功的图片，重设
                        state = 'done';
                        location.reload();
                    }
                    break;
            }

            updateStatus();
        }

        uploader.onUploadProgress = function( file, percentage ) {
            var $li = $('#'+file.id),
                $percent = $li.find('.progress span');

            $percent.css( 'width', percentage * 100 + '%' );
            percentages[ file.id ][ 1 ] = percentage;
            updateTotalProgress();
        };

        uploader.onFileQueued = function( file ) {
            fileCount++;
            fileSize += file.size;

            if ( fileCount === 1 ) {
                $placeHolder.addClass( 'element-invisible' );
                $statusBar.show();
            }

            addFile( file );
            setState( 'ready' );
            updateTotalProgress();
        };

        uploader.onFileDequeued = function( file ) {
            fileCount--;
            fileSize -= file.size;

            if ( !fileCount ) {
                setState( 'pedding' );
            }

            removeFile( file );
            updateTotalProgress();

        };

        uploader.on( 'all', function( type ) {
            var stats;
            switch( type ) {
                case 'uploadFinished':
                    setState( 'confirm' );
                    break;

                case 'startUpload':
                    setState( 'uploading' );
                    break;

                case 'stopUpload':
                    setState( 'paused' );
                    break;

            }
        });

        uploader.onError = function( code ) {
            alert( 'Eroor: ' + code );
        };

        $upload.on('click', function() {
            if ( $(this).hasClass( 'disabled' ) ) {
                return false;
            }

            if ( state === 'ready' ) {
                uploader.upload();
            } else if ( state === 'paused' ) {
                uploader.upload();
            } else if ( state === 'uploading' ) {
                uploader.stop();
            }
        });

        $info.on( 'click', '.retry', function() {
            uploader.retry();
        } );

        $info.on( 'click', '.ignore', function() {
            alert( 'todo' );
        } );

        $upload.addClass( 'state-' + state );
        updateTotalProgress();
    });

})( jQuery );

$(function(){
	var ue1 = UE.getEditor('editor1');

    var ue2 = UE.getEditor('editor2');

    var ue3 = UE.getEditor('editor3');

    /*$("#form-article-add").submit(funtion(){
        ue1.ready(function() {
            var html1 = ue1.getContent();
            $("#edit1").val(html1);
        });
        ue2.ready(function() {
            var html2 = ue2.getContent();
            $("#edit2").val(html2);
        });
        ue3.ready(function() {
            var html3 = ue3.getContent();
            $("#edit3").val(html3);
        });
	});*/
});
</script>
</body>
</html>