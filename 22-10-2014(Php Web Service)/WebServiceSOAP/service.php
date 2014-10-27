<?php
	$client = new SoapClient("http://localhost:8080/WebServiceSOAP/server.php?wsdl");
	
	$result = $client->login('john', 'dgoe');
	
	$response_arr = objectToArray($result);
	
	echo "Full Name = " . str_replace(";", "", $response_arr["fullname"])."<br/>";
	echo "Message = " . str_replace(";", "", $response_arr["level"])."<br/>";
	
	function objectToArray($d) 
	{
		if (is_object($d)) 
		{
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) 
		{
			return array_map(__FUNCTION__, $d);
		}
		else 
		{
			return $d;
		}
	}
?>