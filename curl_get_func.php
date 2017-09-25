<?php
/**
 *@desc 封闭curl的调用接口，get的请求方式。
*/
function doCurlGetRequest($url,$data = [],$timeout = 5){
 if($url == "" || $timeout <= 0){
 	return false;
 }
 $url = $url.'?'.http_build_query($data);
 $ch = curl_init((string)$url);
 curl_setopt($ch, CURLOPT_HEADER, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch, CURLOPT_TIMEOUT, (int)$timeout);
 
 $data =  curl_exec($ch);
 curl_close($ch);
 return $data;
}
echo doCurlGetRequest('http://localhost/php/hello_world.php');
?>
