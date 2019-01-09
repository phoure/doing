
    <script src="docs/js/jquery.min.js"></script>


    <link rel="stylesheet" href="docs/basic.css" crossorigin="anonymous">

<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<style type="text/css">

body{
	background: #000;
}
#ss td{

	 width: 10%; text-align: center; font-size: 250%;  background: #333; border:1px dashed #fff; color:#fff;   font-family: 'thaisans_neueextra_light' !important; 
}

#aa td{
	 width: 10%; text-align: center;   border:1px dashed #fff; background:rgba(0,0,0,.5); color:#fff;   font-family: 'thaisans_neueextra_light' !important; cursor: pointer;
}

</style>

<div id="image" style="width: 70%; padding-bottom: 52.6%; background: url(); background-size:cover; background-position: center center; float:left;">
</div>

<div style="float:left; width:30%;">
	<div style="padding: 20px;">
		<div id="change_image">
			<input id="input_image" type="text" onkeyup="$('#aa td').css({'background':'rgba(0,0,0,.5)'}).removeClass('open');
	   $('#ss td').css({'opacity':1, 'border' : '1px dashed #fff'}); $('#image').css('background-image','url('+$('#input_image').val()+')'); $('#image_preview').css('background-image','url('+$('#input_image').val()+')'); $('#image_preview').css('background-image','url('+$('#input_image').val()+')'); $('#step').val('1'); $('#ss').css('opacity',0); $('#image').css('opacity',0);"  onchange="$('#aa td').css({'background':'rgba(0,0,0,.5)'}).removeClass('open');
	   $('#ss td').css({'opacity':1, 'border' : '1px dashed #fff'});  $('#image').css('background-image','url('+$('#input_image').val()+')'); $('#image_preview').css('background-image','url('+$('#input_image').val()+')'); $('#image_preview').css('background-image','url('+$('#input_image').val()+')'); $('#step').val('1'); $('#ss').css('opacity',0); $('#image').css('opacity',0);">
			<input type="button" value="เปลี่ยนรูป" ondblclick="change_image();">
		</div>

		<div id="answer_image" style="display: none;">
			<input type="button" value="เฉลย" ondblclick="answer();">
		</div>

		<div id="image_preview" style="width: 100%; padding-bottom: 70%; background: url(); background-size:cover; background-position: center center; float:left; margin-top:30px; ">

		</div>

	<table id="aa" style="position: absolute; margin-top:30px; display: noหne;" border="0" cellspacing="0" cellpadding="0">
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

<input type="hidden" id="step" />


<script type="text/javascript">
	$('#aa td').click(function(){


		if($('.open').length == 2){
		   $('#aa .lock').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : 'rgba(0,0,0,.5)'});
		   $('#ss .lock').css({'opacity':1, 'border' : '1px dashed #fff', 'background' : '#333'});
			$('.lock').removeClass('lock');
		}

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
			   $('#ss td[data-block='+$(this).data('block')+']').css({'opacity':1, 'border' : '1px dashed #fff'});
			}
			else{
			   $(this).css({'background':'transparent'}).addClass('open');
			   $('#ss td[data-block='+$(this).data('block')+']').css({'opacity':0, 'border' : 0});
			}
		}
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
	$('#change_image').hide();
	$('#answer_image').show();
    $('#aa').show();
     $('#ss').css('opacity',1);
     $('#image').css('opacity',1);
     $('#step').val(2);

	   
}

function answer(){
	$('#aa td').css({'background':'transparent'}).addClass('open');
	$('#ss td').css({'opacity':0, 'border' : 0});
	$('#change_image').show();
	$('#answer_image').hide();
	   $('#aa').hide();
}
</script>
