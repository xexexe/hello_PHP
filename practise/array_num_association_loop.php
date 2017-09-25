<?php  
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo "<br>";
$sex=array("Peter"=>"boy","Lucy"=>"girl","Joe"=>"boy");
foreach ($sex as $name => $value) {
	echo "Name=" . $name . ", Value=" .$value;
	echo "<br>";
}
?>