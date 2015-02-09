<?php
defined('_SECURE_') or die('Forbidden');

function getTextBetweenTags($string, $tagname) {
    $pattern = "/<$tagname ?.*>(.*)<\/$tagname>/";	
    preg_match($pattern, $string, $matches);	
    return isset($matches[1])? $matches[1] : "" ;
}


# CREATE LOG FUNCTION
define("LOG_PATH" , "/var/www/aamrasms/plugin/gateway/twilio");
define("CLIENT_IP_ADD" , (isset($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR'] : "NO_IP") );

# CREATE LOGS
function SaveFile($filename, $contents) {
	try{
		$handle = fopen($filename, 'a');
		if($handle) {
			fputs($handle, $contents."\r\n");
			fclose($handle);
			return true;
		} else {
			return false;
		}
	}catch(exception $ex){
		return false;
	}		
}

function CreateLogs($initials, $log, $category="PLAYSMS", $filename="") {
	if($category=="") {
		$category = "unknown";
	}
	ini_set("date.timezone","Asia/Dhaka");
	$webroot=getcwd();
	$abs_path = LOG_PATH;

	try {
		$mdir = date("Ymd");
		$subdir = $initials;
		$structure = "$abs_path/$category/$mdir/$subdir/";
		if(is_dir($structure)) {
			$time = date("Y-m-d-H");
			if($filename=="" || $filename==null)
				$filename=$initials."_".$time.".txt";
			$Log_File = $structure.$filename;
			$now = date("Y-m-d H:i:s");
			return SaveFile($Log_File, $now." - ".$log);
		} else if (mkdir($structure, 0777, true)) {
			chmod("$abs_path/$category/$mdir/", 0777);
			chmod("$abs_path/$category/$mdir/$subdir/", 0777);
			$time = date("Y-m-d-H");
			if($filename=="" || $filename==null)
				$filename=$initials."_".$time.".txt";
			$Log_File = $structure.$filename;
			$now = date("Y-m-d H:i:s");
			return SaveFile($Log_File, $now." - ".$log);
		} else {
			return false;
		}
	}catch(exception $ex){
		return false;
	}
}

// hook_sendsms
// called by main sms sender
// return true for success delivery
// $sms_sender	: sender mobile number
// $sms_footer	: sender sms footer or sms sender ID
// $sms_to	: destination sms number
// $sms_msg	: sms message tobe delivered
// $gpid	: group phonebook id (optional)
// $uid		: sender User ID
// $smslog_id	: sms ID
function twilio_hook_sendsms($sms_sender,$sms_footer,$sms_to,$sms_msg,$uid='',$gpid=0,$smslog_id=0,$sms_type='text',$unicode=0) {
	global $core_config;
	$sms_sender = stripslashes($sms_sender);
	$sms_footer = stripslashes($sms_footer);
	$sms_msg = stripslashes($sms_msg);
	$ok = false;

	if ($sms_footer) {
		$sms_msg = $sms_msg.$sms_footer;
	}
	
	if ($sms_to = _test_mobile_no($sms_to)) 

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
		$url="http://sms.sslwireless.com/pushapi/aamra_networks/server.php"; 
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
		
		logger_print("url:".$url." callback:".$core_config['plugin']['twilio']['callback_url'], 3, "SSL Wireless - " . $returns);

		if ($respond_status=='SUCESSFULL') {
			$c_status = '1';
			$c_message_id = $respond_reference;
			$c_error_text = $c_status."|".$c_message_id."|STAKEHOLDERID-".$respond_message;
		
			
			logger_print("sent smslog_id:".$smslog_id." message_id:".$c_message_id." status:".$c_status." error:".$c_error_text, 2, "twilio outgoing");
			$db_query = "
				INSERT INTO "._DB_PREF_."_gatewayTwilio (local_smslog_id,remote_smslog_id,status,error_text)
				VALUES ('$smslog_id','$c_message_id','$c_status','$c_error_text')";
			$id = @dba_insert_id($db_query);
			if ($id && ($c_status == '1')) {
				$ok = true;
				$p_status = 3; # Delivery
			} else {
				$p_status = 2;
			}
			dlr($smslog_id,$uid,$p_status);
		} else {
			// even when the response is not what we expected we still print it out for debug purposes
			$resp = str_replace("\n", " ", $resp);
			$resp = str_replace("\r", " ", $resp);
			logger_print("failed smslog_id:".$smslog_id." resp:".$resp, 2, "twilio outgoing");
		}
	}
	
	
	if (!$ok) {
		$p_status = 2;
		dlr($smslog_id,$uid,$p_status);
	}
	
	return $ok;
}

twilio_hook_sendsms("8801711179483","Thank You","8801674776945","Hello Irfan",'25dfs5f54dg18r3gf1d5g4dfg45df4g',0,0,'text',0);
echo "Script Called";
?>