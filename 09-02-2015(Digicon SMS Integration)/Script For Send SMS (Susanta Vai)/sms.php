<?php
function getTextBetweenTags($string, $tagname) {
    $pattern = "/<$tagname ?.*>(.*)<\/$tagname>/";	
    preg_match($pattern, $string, $matches);	
    return isset($matches[1])? $matches[1] : "" ;
}
function twilio_hook_sendsms($sms_sender,$sms_footer,$sms_to,$sms_msg,$uid='',$gpid=0,$smslog_id=0,$sms_type='text',$unicode=0) {
	global $core_config;
	$sms_sender = stripslashes($sms_sender);
	$sms_footer = stripslashes($sms_footer);
	$sms_msg = stripslashes($sms_msg);
	$ok = false;

	if ($sms_footer) {
		$sms_msg = $sms_msg.$sms_footer;
	}
	
	//if ($sms_to = _test_mobile_no($sms_to)) 

	if ($sms_sender && $sms_to && $sms_msg) {
		$url = $core_config['plugin']['twilio']['url'].'/2010-04-01/Accounts/'.$core_config['plugin']['twilio']['account_sid'].'/SMS/Messages.json';
		$data = array(
				'To'   => $sms_to,
				'From' => $sms_sender,
				'Body' => $sms_msg,
			);
		if (trim($core_config['plugin']['twilio']['callback_url'])) {
			$data['StatusCallback'] = trim($core_config['plugin']['twilio']['callback_url']);
		}
		
		
		$user ="susanta@ssl";
		$pass = "myssl@123";
		$sid = "digicon";
		$url="http://sms.sslwireless.com/pushapi/dynamic/server.php"; 
		$param="user=$user&pass=$pass&sms[0][0]=".urlencode ( $sms_to )."&sms[0][1]=".urlencode($sms_msg)."&sid=$sid";
		$crl = curl_init(); 
		curl_setopt($crl,CURLOPT_SSL_VERIFYPEER,FALSE); 
		curl_setopt($crl,CURLOPT_SSL_VERIFYHOST,2); 
		curl_setopt($crl,CURLOPT_URL,$url); 
		curl_setopt($crl,CURLOPT_HEADER,0); 
		curl_setopt($crl,CURLOPT_RETURNTRANSFER,1); 
		curl_setopt($crl,CURLOPT_POST,1); 
		curl_setopt($crl,CURLOPT_POSTFIELDS,$param); 
		$returns = curl_exec($crl);

		curl_close($crl); 		
		
		$respond_status = getTextBetweenTags($returns, 'LOGIN');
		$respond_message = getTextBetweenTags($returns, 'STAKEHOLDERID');
		$respond_reference = getTextBetweenTags($returns, 'REFERENCEID');		

		if ($respond_status=='SUCESSFULL') {
			$c_status = '1';
			$c_message_id = $respond_reference;
			$c_error_text = $c_status."|".$c_message_id."|STAKEHOLDERID-".$respond_message;


		} else {
			// even when the response is not what we expected we still print it out for debug purposes
//			$resp = str_replace("\n", " ", $resp);
//			$resp = str_replace("\r", " ", $resp);

		}
	}
	
	
	if (!$ok) {
		$p_status = 2;

	}
	
	return $ok;
	echo "Script Called";
}

twilio_hook_sendsms("8801949573919","","8801674776945","Hello Irfan",'25dfs5f54dg18r3gf1d5g4dfg45df4g',0,0,'text',0);
echo "Script Called";
?>