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
    $('#btn_close_modal_1').fadeOut(200);
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
                             $('#btn_close_modal_1').fadeIn(200);
                 }, 1000);

        $("#percent").text('อัปโหลดสำเร็จ');
        img = response.responseText.split('---');
        imgs = img[1].split('::');
        if(img[0] == 'thumbs'){
            $('#preview_upload_thumb').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + img[1] + '.jpg)');
            $('#preview_thumb').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + img[1] + '.jpg)');
            $('#thumb').val(img[1]);
            $('#ico_to_image').show();
        }

        if(img[0] == 'logo'){
            $('#preview_upload_logo').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + img[1] + '.jpg)');
            $('#preview_logo').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + img[1] + '.jpg)');
            $('#logo').val(img[1]);
            $('#ico_del_logo').show();
        }

        else if(img[0] == 'images'){
                for (i = 0; i < imgs.length-1; i++) { 

                  list_upload_images(imgs[i], 'store/images', '');

        		      resize_modal_list();
                }
                $('#upload_callback').text(img[2]);
         }
         else if(img[0] == '0'){
                $('#upload_callback').text(img[1]);
         }

	},
	error: function()
	{
		$("#upload_callback").append("<font color='red'> ERROR: unable to upload files</font>");

	}
     
}; 

     $("#form_upload_img").ajaxForm(options);

});






function swipe_to_thumb(callingElement){

    if($('#thumb').val() !== ''){

            list_upload_images($('#thumb').val(), 'store/images', $(this).parent().find('.caption_images').val());
            $('#ico_to_image').show();

    }
            $('#preview_upload_thumb').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + $(this).parent().find('.name_images_upload').attr('data-name') + '.jpg)');
            $('#preview_thumb').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + $(this).parent().find('.name_images_upload').attr('data-name') + '.jpg)');
            $('#thumb').val($(this).parent().find('.name_images_upload').attr('data-name'));
        
            $(this).parent().parent().parent().remove();
      
}


function swipe_to_image(callingElement){

            list_upload_images($('#thumb').val(), 'store/images', '');

            $('#preview_upload_thumb').css('background-image', '');
            $('#preview_thumb').css('background-image', '');
            $('#thumb').val('');
            $(this).hide();

}

function image_to_logo(callingElement){
           $('#ico_del_logo').show();
            $('#preview_upload_logo').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + $(this).parent().find('.name_images_upload').attr('data-name') + '.jpg)');
            $('#preview_logo').css('background-image', 'url(../contents/store/images/'+$('#code').val()+'_' + $(this).parent().find('.name_images_upload').attr('data-name') + '.jpg)');
            $('#logo').val($(this).parent().find('.name_images_upload').attr('data-name'));
}