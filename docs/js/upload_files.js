$(document).ready(function()
{

	var options = { 
    beforeSend: function() 
    {
        $("#progress").show();
        $("#bar").width('0%');
        $("#percent").html("0%");
        $('#modal_upload_top_btn').addClass('loading');
        $('#btns_upload_images').hide();
        $('#btn_sort_upload_images').hide();
        $('#upload_callback').text('กำลังอัปโหลดภาพ');
        $('#btn_close_modal').fadeOut(200);
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
    },
    success: function() 
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
    },
	complete: function(response) 
	{
        $('#upload_callback').text('อัปโหลดสำเร็จ');

             $("#progress").fadeOut(100);
                setTimeout(function(){
                              $('#modal_upload_top_btn').removeClass('loading');
                             $('#btns_upload_images').fadeIn(200);
                             $('#btn_sort_upload_images').fadeIn(200);
                             $('#upload_callback').text('อัปโหลดได้ครั้งละหลายไฟล์');
                             $('#btn_close_modal').fadeIn(200);
                 }, 1000);

        callback = response.responseText;
        callback = callback.split('---');
         
        if(callback[1] == 'logo'){
            $('#busi-name_logo').val(callback[2]).focus().blur();
            $('#busi-name_preview_upload_logo').removeClass('d-none');
            $('.preview_upload_logo').css('background-image', 'url(../contents/stores/logos/'+$('#busi_detial_code').val()+'_'+ callback[2] + '.jpg)');

        }

        else if(callback[1] == 'thumb'){
            $('#busi-detail_thumb').val(callback[2]).focus().blur();
            $('.preview_upload_thumb').css('background-image', 'url(../contents/stores/thumbs/'+$('#busi_detial_code').val()+'_'+ callback[2] + '.jpg)');
        }

        else if(callback[1] == 'images'){

                imgs = callback[2].split('::');
                for (i = 0; i < imgs.length-1; i++) { 

                  list_upload_images(imgs[i], 'stores/images/', '');

                      resize_modal_list();
                }
                $('#upload_callback').text(img[2]);
         }

        $('#file').val('');
	},
	error: function()
	{
	//	$("#upload_callback").append("<font color='red'> ERROR: unable to upload files</font>");

	}
     
}; 

     $("#form_upload_img").ajaxForm(options);

});

