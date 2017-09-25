<?php  
echo strlen("Hello world!");
echo "<br>";
echo strlen("hehehe");
echo "<br>";
echo strlen("和哈哈");	//9 , 中文占3个字符
echo "<br>";
echo mb_strlen("中文字符",'utf-8');// 4
?>