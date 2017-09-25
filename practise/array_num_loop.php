<?php  
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}

echo "<br>";
$phones=array("iPhone","vivi","oppo","huawei","xiaomi");
for ($i=0; $i < count($phones); $i++) { 
	echo $phones[$i];
	echo "<br>";
}
?>