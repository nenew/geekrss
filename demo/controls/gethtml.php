<?php
$url=$_GET['url'];
gethtml($url);
function gethtml($url){
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_FAILONERROR, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($curl);
		$info = curl_getinfo($curl);
		echo $result;
		echo $url;
		curl_close($curl);}
?>