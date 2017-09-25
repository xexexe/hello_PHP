<?php  
/*
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列
*/
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
sort($cars);
var_dump($cars);
echo "<br>";
$phones=array("iPhone","vivi","oppo","huawei","xiaomi");
var_dump($phones);
echo "<br>";
sort($phones);
var_dump($phones);

echo "<br>";
$numbers=array(4,6,2,22,11);
var_dump($numbers);
echo "<br>";
sort($numbers);
var_dump($numbers);
?>