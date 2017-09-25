<?php
/**
** @desc 封装 curl 的调用接口，post的请求方式
**/
function doCurlPostRequest($url,$requestString,$timeout = 5){
 if($url == '' || $requestString == '' || $timeout <=0){
 	return false;
 }
 $ch = curl_init((string)$url);
 curl_setopt($ch, CURLOPT_HEADER, false);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
 curl_setopt($ch, CURLOPT_POST,true);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch, CURLOPT_TIMEOUT,(int)$timeout);
 $data = curl_exec($ch); 
 curl_close($ch);
 return $data;
}
echo doCurlPostRequest('http://localhost/php/post_data.php',"{'hehe':'ooo'}");
?>
