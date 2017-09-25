<?php
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
//echo greeting;   // 输出 "greeting"

echo '<br>';
// 不区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com", true);
echo greeting;  // 输出 "欢迎访问 Runoob.com"

echo "<br>";
//常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。
function myTest() {
    echo GREETING;
}
 
myTest();    // 输出 "欢迎访问 Runoob.com"


echo "<br>";
define("OPEN_NUM",22);
echo OPEN_NUM;

echo "<br>";
function myOtherTest() {
	echo OPEN_NUM;
}

myOtherTest();

?>