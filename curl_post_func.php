<?php
/**
** @desc 封装 curl 的调用接口，post的请求方式
**/
function doCurlPostRequest($url,$requestString,$timeout = 5){
 if($url == '' || $requestString == '' || $timeout <=0){
 	return false;
 }
 $con = curl_init((string)$url);
 curl_setopt($con, CURLOPT_HEADER, false);
 curl_setopt($con, CURLOPT_POSTFIELDS, $requestString);
 curl_setopt($con, CURLOPT_POST,true);
 curl_setopt($con, CURLOPT_RETURNTRANSFER,true);
 curl_setopt($con, CURLOPT_TIMEOUT,(int)$timeout);
 return curl_exec($con); 
}
echo doCurlPostRequest('http://www.baidu.com',"{'hehe':'ooo'}");
?>
