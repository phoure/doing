
    <script src="docs/js/jquery.min.js"></script>


    <link rel="stylesheet" href="docs/basic.css" crossorigin="anonymous">

<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<style type="text/css">

body{
	background: #000;
}
#ss td{

	 width: 10%; text-align: center; font-size: 4.5vw;  background: #333; border:1px dashed #fff; color:#fff;   font-family: 'thaisans_neueextra_light' !important; 
}

#aa td{
	 width: 10%; text-align: center; font-size: 1.8vw;  border:1px dashed #fff; background:rgba(0,0,0,.5); color:#fff;   font-family: 'thaisans_neueextra_light' !important; cursor: pointer;
}

</style>

<div id="image" style="width: 70%; padding-bottom: 52.6%; background: url(); background-size:cover; background-position: center center; float:left;">
</div>

<div style="float:left; width:30%;">
	<div style="padding: 20px;">
		<div style=" height: 30px;">
			<div id="change_image">
				<input id="input_image" type="text" onkeyup="re_image();"  onchange="re_image();" style="width: calc(100% - 120px);" placeholder="URL รูปภาพ">
				<input id="btn_change_image" type="button" value="เปลี่ยนภาพ" ondblclick="change_image();" style="display: none; width: 100px;">
			</div>

			<div id="answer_image" style="display: none;">
				<input type="button" value="เฉลย" ondblclick="answer();" style="width: 100px;">
			</div>
		</div>

		<div id="image_preview" style="width: 100%; padding-bottom: 70%; background: url(); background-size:cover; background-position: center center; float:left; margin-top:30px; ">

		</div>

	<table id="aa" style="position: absolute; margin-top:30px; display: none;" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td data-block="1">1</td>
			<td data-block="2">2</td>
			<td data-block="3">3</td>
			<td data-block="4">4</td>
			<td data-block="5">5</td>
			<td data-block="6">6</td>
			<td data-block="7">7</td>
		</tr>
		<tr>
			<td data-block="8">8</td>
			<td data-block="9">9</td>
			<td data-block="10">10</td>
			<td data-block="11">11</td>
			<td data-block="12">12</td>
			<td data-block="13">13</td>
			<td data-block="14">14</td>
		</tr>
		<tr>
			<td data-block="15">15</td>
			<td data-block="16">16</td>
			<td data-block="17">17</td>
			<td data-block="18">18</td>
			<td data-block="19">19</td>
			<td data-block="20">20</td>
			<td data-block="21">21</td>
		</tr>
		<tr>
			<td data-block="22">22</td>
			<td data-block="23">23</td>
			<td data-block="24">24</td>
			<td data-block="25">25</td>
			<td data-block="26">26</td>
			<td data-block="27">27</td>
			<td data-block="28">28</td>
		</tr>

		<tr>
			<td data-block="29">29</td>
			<td data-block="30">30</td>
			<td data-block="31">31</td>
			<td data-block="32">32</td>
			<td data-block="33">33</td>
			<td data-block="34">34</td>
			<td data-block="35">35</td>
		</tr>
	</table>
</div>



	</div>	



</div>

<div style="position: fixed; left:0; top:0; width: 70%; z-index: 2;">
	<table id="ss" style="width:100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td data-block="1" class="close">1</td>
			<td data-block="2" class="close">2</td>
			<td data-block="3" class="close">3</td>
			<td data-block="4" class="close">4</td>
			<td data-block="5" class="close">5</td>
			<td data-block="6" class="close">6</td>
			<td data-block="7" class="close">7</td>
		</tr>
		<tr>
			<td data-block="8" class="close">8</td>
			<td data-block="9" class="close">9</td>
			<td data-block="10" class="close">10</td>
			<td data-block="11" class="close">11</td>
			<td data-block="12" class="close">12</td>
			<td data-block="13" class="close">13</td>
			<td data-block="14" class="close">14</td>
		</tr>
		<tr>
			<td data-block="15" class="close">15</td>
			<td data-block="16" class="close">16</td>
			<td data-block="17" class="close">17</td>
			<td data-block="18" class="close">18</td>
			<td data-block="19" class="close">19</td>
			<td data-block="20" class="close">20</td>
			<td data-block="21" class="close">21</td>
		</tr>
		<tr>
			<td data-block="22" class="close">22</td>
			<td data-block="23" class="close">23</td>
			<td data-block="24" class="close">24</td>
			<td data-block="25" class="close">25</td>
			<td data-block="26" class="close">26</td>
			<td data-block="27" class="close">27</td>
			<td data-block="28" class="close">28</td>
		</tr>

		<tr>
			<td data-block="29" class="close">29</td>
			<td data-block="30" class="close">30</td>
			<td data-block="31" class="close">31</td>
			<td data-block="32" class="close">32</td>
			<td data-block="33" class="close">33</td>
			<td data-block="34" class="close">34</td>
			<td data-block="35" class="close">35</td>
		</tr>
	</table>
</div>

<input type="hidden" id="step" />
<input type="hidden" id="open" value="0" />


<script type="text/javascript">
	$('#aa td').click(function(){

	if($('#step').val() == '1'){
		if ( $( this ).hasClass('lock') ) {
		   $(this).css({'background':'rgba(0,0,0,.5)'}).removeClass('lock');
		   $('#ss td[data-block='+$(this).data('block')+']').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : '#333'}).removeClass('lock');
		}
		else{
		   $(this).css({'background':'rgba(167,0,0,.8)'}).addClass('lock');
		   $('#ss td[data-block='+$(this).data('block')+']').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : '#af0000'}).addClass('lock');
		}
	}
	else{

		if($(this).hasClass('lock')){
		}
		else{
			if ( $( this ).hasClass('open') ) {
			   $(this).css({'background':'rgba(0,0,0,.5)'}).removeClass('open');
			   $('#ss td[data-block='+$(this).data('block')+']').animate({'opacity':1, 'border' : '1px dashed #fff'} ,700);
			}
			else{
			   $(this).css({'background':'transparent'}).addClass('open');
			   $('#ss td[data-block='+$(this).data('block')+']').animate({'opacity':0, 'border' : 0} ,700);
			}
		}
	}


		if($('.open').length == 10){
		   $('#aa .lock').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : 'rgba(0,0,0,.5)'});
		   $('#ss .lock').css({'background': '#333'});

		   setTimeout( function(){ $('#ss .lock').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : '#333' }); $('.lock').removeClass('lock'); }, 2000);
		   
			
		}
});


  $('#ss td').css('height',$('#image').innerHeight()/5);

  $('#aa').css('width',$('#image_preview').innerWidth());
  $('#aa td').css('height',$('#image_preview').innerHeight()/5);

$( window ).resize(function() {
  $('#ss td').css('height',$('#image').innerHeight()/5);
  $('#aa').css('width',$('#image_preview').innerWidth());
  $('#aa td').css('height',$('#image_preview').innerHeight()/5);
});


function change_image(){
	if($('#input_image').val() == ''){
		alert('โปรดใส่ url ภาพก่อน');
	}
	else{
		$('#change_image').hide();
		$('#answer_image').fadeIn(300);
	    $('#aa').fadeIn(300);
	     $('#ss').animate({'opacity':1},300);
	     setTimeout( function(){ $('#image').animate({'opacity':1},300); }, 500);
	     $('#step').val(2);
     }
	$('#image').css('background-image','url('+$('#input_image').val()+')');
}

function re_image(){
	$('#image_preview').show();
	$('#ss td').removeClass('open close').addClass('close');
	$('#open').val(0); $('#aa .lock').css({'background':'rgba(0,0,0,.5)'}).removeClass('lock');
	$('#ss .lock').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : '#333'}).removeClass('lock');
	$('#aa').show(); $('#aa td').css({'background':'rgba(0,0,0,.5)'}).removeClass('open');
	$('#ss td').css({'opacity':1, 'border' : '1px dashed #fff'});
	$('#image').animate({'opacity':0},300);
	$('#image_preview').css('background-image','url('+$('#input_image').val()+')');
	$('#image_preview').css('background-image','url('+$('#input_image').val()+')');
	$('#step').val('1'); $('#ss').css('opacity',0); $('#image').css('opacity',0);
	$('#btn_change_image').show();
}

function answer(){
 $('#image_preview').fadeOut(200);
 $('#btn_change_image').hide();
 var $cards = $('.close');

  var time = 500;
  $('.close').each(function() {

      setTimeout( function(){ $('.close:eq('+$('#open').val()+')').animate({'opacity':0, 'border' : 0}, 200); $('#open').val(parseInt($('#open').val())+1); }, time);
      time += 50;
  });



	$('#aa td').css({'background':'transparent'}).addClass('open');
	
	 setTimeout( function(){ $('#change_image').show(); $('#input_image').val(''); }, 3000);
	
	$('#answer_image').hide();
	   $('#aa').hide();
}
</script>
