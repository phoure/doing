$(document).ready(function()
{

	var options = { 
    beforeSend: function() 
    {
        $(".upload_progress").show();
        $(".upload_bar").width('0%');
        $(".upload_percent").html("0%");
        $('.btns_upload_images').hide();

        if($('#file_uploading').val() == 'upload_1'){
          $('#upload_callback_1').text('กำลังอัปโหลดภาพ');
        }

        else if($('#file_uploading').val() == 'upload_3'){
          $('#modal_upload_top_btn').addClass('loading');
          $('#btn_sort_upload_images').hide();
          $('#upload_callback_3').text('กำลังอัปโหลดภาพ');
          $('#btn_close_modal').fadeOut(200);
        }
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
        $(".upload_bar").width(percentComplete+'%');
        $(".upload_percent").html(percentComplete+'%');
    },
    success: function() 
    {
        $(".upload_bar").width('100%');
        $(".upload_percent").html('100%');
    },
	complete: function(response) 
	{

                              if($('#file_uploading').val() == 'upload_1'){
                                $('#upload_callback_1').text('อัปโหลดสำเร็จ');
                              }

                             else if($('#file_uploading').val() == 'upload_3'){
                                 $('#upload_callback_3').text('อัปโหลดสำเร็จ');
                                 $('#modal_upload_top_btn').removeClass('loading');
                                 $('#btn_sort_upload_images').fadeIn(200);
                                 $('#btn_close_modal').fadeIn(200);
                              }

                setTimeout(function(){
                                    $(".upload_progress").hide();
                                   $('.btns_upload_images').fadeIn(200);
                 }, 1000);

        callbacks = response.responseText;
        callback2 = callbacks.split('::');
         

        for (i = 0; i < callback2.length; i++) { 
        callback = callback2[i].split('---');
            if(callback[1] == 'logo'){
                 $('#upload_callback_1').text(callback[3]);
                 if(callback[0] == '1'){
                    $('#busi-name_preview_upload_logo').removeClass('d-none');
                    $('.preview_upload_logo').css('background-image', 'url(../contents/store/logos/'+$('#busi-name_codeme').val()+'_'+$('#busi-name_code').val()+'.jpg?'+callback[2]+')');
                    $('#busi-name_logo').val(callback[2]).focus().blur();
                 }
            }

            else if(callback[1] == 'thumb'){
                 $('#upload_callback_3').text(callback[3]);
                 if(callback[0] == '1'){
                   $('#busi-detail_thumb').val(callback[2]).focus().blur();
                   $('.preview_upload_thumb').css('background-image', 'url(../contents/store/thumbs/'+$('#busi_detail_mecode').val()+'_'+$('#busi_detail_code').val()+'_'+ callback[2] + '.jpg)');
                   
                        if ($('#busi-detail_thumb').val() != '' && $('#busi-busi_detail_images').val() != '') {
                            $('i[data-req="busi-detail_thumb_images"]').removeClass('uncheck checked warn').addClass('checked');
                        }
                        else{
                            $('i[data-req="busi-detail_thumb_images"]').removeClass('uncheck checked warn').addClass('uncheck');
                        }

                    
                }
            }
        

            else if(callback[1] == 'images'){
                    $('#upload_callback_3').text(callback[3]);
                     if(callback[0] == '1'){
                      list_upload_images(callback[2], 'store/images/', '');
                        resize_modal_list();
                        
                            if ($('#busi-detail_thumb').val() != '' && $('#busi-detail_images').val() != '') {
                                $('i[data-req="busi-detail_thumb_images"]').removeClass('uncheck checked warn').addClass('checked');
                            }
                            else{
                                $('i[data-req="busi-detail_thumb_images"]').removeClass('uncheck checked warn').addClass('uncheck');
                            }
                        
                    }
             }

          }
            setTimeout(function(){
                 $('#upload_callback_3').text('อัปโหลดได้ครั้งละหลายไฟล์');
                 $('#file_uploading').val('');
                $('#file').val('');
             }, 1500);

	},
	error: function()
	{
	//	$("#upload_callback").append("<font color='red'> ERROR: unable to upload files</font>");

	}
     
}; 

     $("#form_upload_img").ajaxForm(options);

});

