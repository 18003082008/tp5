/**
 * Created by Administrator on 2018/2/2 0002.
 */
$(function() {
    $("#file_upload").uploadify({
        'height'        : 30,
        'swf'           : SCOPE.uploadify_swf,
        'uploader'      : SCOPE.image_upload,
        'width'         : 120,
        'buttonText'  :'图片上传',
        'fileTypeDesc'    : 'Image files',
        'fileObjName' : 'file',
        'fileTypeExts'    : '*.gif;*.jpg;*.jpeg;*.png',
        'onUploadSuccess' : function(file,data,response){
            if(response){
                /*console.log(file);
                console.log(data);
                console.log(response);*/
                var obj=JSON.parse(data);
                $("#upload_org_code_img").attr("src",obj.data);
                $("#file_upload_image").val(obj.data);
                $("#upload_org_code_img").show();
            }
        }
    });
});