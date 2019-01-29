<?php
 echo 1;
$strAccessToken = "oZxK/Z6/to4eZ3Cqs/iXCLHDh0S87hfbjK0T5C0Vf7egrs9VzorH9MU4Am7AVoViQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aIR5A7VpCOSgIygI4xSoimdMs6T7V3cmCD8I7G0ce5PCwdB04t89/1O/w1cDnyilFU=
";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$textIn = $arrJson['events'][0]['message']['text'];
$nameIn = $arrJson['events'][0]['source']['userId'];
	 $strUrl = 'https://api.line.me/v2/bot/message/reply';
 	 $card = array('type' => 'join');


send($card, 'reply', $arrJson['events'][0]['replyToken']);


function send($card,$target ,$to){
	
	$access_token = 'oZxK/Z6/to4eZ3Cqs/iXCLHDh0S87hfbjK0T5C0Vf7egrs9VzorH9MU4Am7AVoViQILujSmdpeWT8GZlQcHRa3c0hK5b28DGTxLp87VY+aIR5A7VpCOSgIygI4xSoimdMs6T7V3cmCD8I7G0ce5PCwdB04t89/1O/w1cDnyilFU=';
	$arrHeader = array();
	$arrHeader[] = "Content-Type: application/json";
	$arrHeader[] = "Authorization: Bearer {$access_token}";
	
	
	if($target == 'reply'){
		$strUrl = 'https://api.line.me/v2/bot/message/reply';
		$data = array('replyToken' => $to, 'messages' => $card);
	}
	else if($target == 'push'){
		$strUrl = 'https://api.line.me/v2/bot/message/push';
		$data = array('to' => $to, 'messages' => $card);
	}
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$strUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	echo $result ;
	curl_close ($ch);
}
 
?>
