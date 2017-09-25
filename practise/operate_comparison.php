<?php  
$x=100; 
$y="100";
 
var_dump($x == $y);		//true
echo "<br>";
var_dump($x === $y);	//false
echo "<br>";
var_dump($x != $y);		//false
echo "<br>";
var_dump($x !== $y);	//true
echo "<br>";
 
$a=50;
$b=90;
 
var_dump($a > $b);		//false
echo "<br>";
var_dump($a < $b);		//true
?>