<?php
 echo 1;
$strAccessToken = "oeiJGSBWoFxJapOkOH/S9lr+seNwHthJ80HOx6RKPICosBtCsnokTiUPwGVE6JGPQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aI+AximvWt+twJPNhjclozOc0HIRIbh2g0MqTV13iY74AdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$textIn = $arrJson['events'][0]['message']['text'];
$nameIn = $arrJson['events'][0]['source']['userId'];
	 $strUrl = 'https://api.line.me/v2/bot/message/reply';
 	 $data = array( 'replyToken' => $arrJson['events'][0]['replyToken'], 'type' => 'join');
	 send($data, $strUrl, $arrHeader);
if (strpos($textIn, 'twitter') !== false && $arrJson['events'][0]['source']['groupId'] == 'C214e858f2c0e42285b5d56a12f0cfced') {
	
	$data_vid = explode('http',$textIn);
	$post_vid = file_get_contents('http://drivegay.com/docs/upload_file.php?action=upload_url&url=http'.$data_vid[1].'&caption='.str_replace(' ','-', $data_vid[0]));
	
	$data = array(
	'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
	'messages' => array([
			'type' => 'text',
			'text' => $post_vid
	]));
	
	send($data, $strUrl, $arrHeader);
}
else if (strpos($textIn, 'twitter.com') !== false) {
 
 require 'app_tokens.php';
 require 'tmhOAuth.php';
 $connection = new tmhOAuth(array(
   'consumer_key'    => $consumer_key,
   'consumer_secret' => $consumer_secret,
   'user_token'      => $user_token,
   'user_secret'     => $user_secret
 ));
	 $startsAt = strpos($textIn, "status/") + strlen("status/");
	$twitter_id_search = substr ($textIn , $startsAt, 18 );
  $connection->request('GET', $connection->url('1.1/statuses/show'), array(
  'id' => $twitter_id_search, 'tweet_mode' => 'extended'));
          
                
  // Get the HTTP response code for the API request
  $response_code = $connection->response['code'];
  // Convert the JSON response into an array
  $response_data = json_decode($connection->response['response'],true);
  // A response code of 200 is a success
	if ($response_code == 200) {
 
  if($response_data['extended_entities']['media'][0]['type'] == 'photo'){
    if(count($response_data['extended_entities']['media'])-1 == 3){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][1]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][1]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][2]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][2]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][3]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][3]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 4 ภาพ 😀'
        ]));
     }
    else if(count($response_data['extended_entities']['media'])-1 == 2){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][1]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][1]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][2]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][2]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 3 ภาพ 😀'
        ]));
     }
    else if(count($response_data['extended_entities']['media'])-1 == 1){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],[
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][1]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][1]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 2 ภาพ 😀'
        ]));
     }
    else if(count($response_data['extended_entities']['media'])-1 == 0){
    $data = array(
    'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
    'messages' => array([
        'type' => 'image',
        'originalContentUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'].':thumb',
      ],
        [
          'type' => 'text',
          'text' => 'ดึงภาพจากทวีต จำนวน 1 ภาพ 😀'
        ]));
     }
  } //photo
  
  else if($response_data['extended_entities']['media'][0]['type'] == 'video'){
	
        $max = array(intval($response_data['extended_entities']['media'][0]['video_info']['variants'][0][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][1][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][2][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][3][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][4][bitrate]),
       intval($response_data['extended_entities']['media'][0]['video_info']['variants'][5][bitrate]));
  $response_code = $connection->response['code'];
  $response_data = json_decode($connection->response['response'],true);
        $maxs = array_search(max($max), $max);
      $data = array(
      'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
      'messages' => array([
          'type' => 'video',
          'originalContentUrl' => $response_data['extended_entities']['media'][0]['video_info']['variants'][$maxs]['url'],
          'previewImageUrl' => $response_data['extended_entities']['media'][0]['media_url_https'],
        ],
        [
          'type' => 'text',
          'text' => '🎞 ดึงวีดีโอจากทวีตมาให้เพื่อนๆ แล้ว 😀',
        ]));
} //video
  else{
	  $data = array(
	'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
	'messages' => array([
			'type' => 'text',
			'text' => 'ไม่สามารถดึงไฟล์จากทวิตเตอร์ได้ อาจด้วยเป็นบัญชีตั้งส่วนตัวไว้ หรือทวีตอาจมีปัญหา'
		]));
	  
	  
  }
}//200
	else{
	  $data = array(
	'replyToken' => $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'],
	'messages' => array([
			'type' => 'text',
			'text' => 'ไม่สามารถดึงไฟล์จากทวิตเตอร์ได้ อาจด้วยเป็นบัญชีตั้งส่วนตัวไว้ หรือทวีตอาจมีปัญหา'
		]));
	  
	  
  }
	send($data, $strUrl, $arrHeader);
}// tweet
else if($_GET['post'] == '1'){
			$strUrl = 'https://api.line.me/v2/bot/message/push';
	
			$groupid[] = array('C214e858f2c0e42285b5d56a12f0cfced','test');
			$groupid[] = array('Cdcbc1ac3c747ec546fdd194c0fbf7b1f','clipgaysab');
			$groupid[] = array('C16bffe43b165df3429a722dde84adcfc','konrakphone');
			$groupid[] = array('C5acee5a1fea67f1e79201ded58d1f91d','gkawanrak');
			$groupid[] = array('C04ae8ed4e3d9f6e8de35cd48639b85c0','peodklongwao1');
			$groupid[] = array('C19be33210e004052910aba5a817621e2','peodklongwao');
			$groupid[] = array('Cd08afe8945428db31485bca7effc88a2','mangkonnimitr');
	
	if($_GET['target'] == 'text'){
		for ($x = 0; $x <= count($groupid)-1; $x++) {
			$card = array([
				'type' => 'text',
				'text' => $_GET['text']
				]);
			$data = array('to' => $groupid[$_GET['group']][0], 'messages' => $card);
			echo 'ส่งแล้ว';
		}
		
		
	}
	if($_GET['target'] == 'share'){
		
		$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.imgur.com/3/image",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "image=".str_replace('../','http://drivegay.com/', str_replace('.png','_thumb.png', $_GET['thumb'])),
  CURLOPT_HTTPHEADER => array(
    "authorization: Client-ID 9247e4c204491c4",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 8b84fd63-b153-b627-403e-3c8251c250df"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
		if ($err) {
			 echo 'upload 0';
		} else {
			
		  $response_upload = json_decode($response,true);
			for ($x = 0; $x <= count($groupid)-1; $x++) {
			    $card = array(
			     [
			     'type' => 'template',
				"altText" => '🎬 แชร์วีดีโอ',
				"template" => array(
				    'type' => 'buttons',
				    'thumbnailImageUrl' => $response_upload['data']['link'],
				    'imageAspectRatio' => 'rectangle',
				    'imageSize' => 'cover',
				    'imageBackgroundColor' => '#000000',
				    'text' => str_replace('-', ' ', $_GET['title']),
				    'defaultAction' =>  array(
					 'type' => 'uri',
					 'label' => 'ดูคลิปนี้',
					 'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
				    ),
				    'actions' =>  array(['type' => 'uri',
					 'label' => '🎬 ดูคลิปนี้',
					 'uri' => 'http://drivegay.com/video/'.$_GET['id'].'&ref='.$groupid[$x][1]
					])
				    )
				]
				);
				$data = array('to' => $groupid[$x][0], 'messages' => $card);
				send($data, $strUrl, $arrHeader);
			} // for
			    echo 'posted';
		}
	}
}
else{
	
	$strUrl = 'https://api.line.me/v2/bot/message/push';
	$data = array(
	'to' => 'C214e858f2c0e42285b5d56a12f0cfced',
	'messages' => array([
			'type' => 'text',
			'text' => $arrJson['events'][0]['source']['userId']
	]));
	
	send($data, $strUrl, $arrHeader);
}
/*
		$strUrl = 'https://api.line.me/v2/bot/message/push';
  $data = array(
	'to' => 'C214e858f2c0e42285b5d56a12f0cfced',
	'messages' => array([
			'type' => 'text',
			'text' =>  $arrJson['events'][0]['message']['id']
		]));
*/
function send($data, $strUrl, $arrHeader){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close ($ch);
}
 
?>
