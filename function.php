<?php


function mits(){
	echo "<h1>Hello Mits</h1>";
}

mits();
mits();

function itm(){
	return 4;
}

$a=itm();
echo $a+1 ."<br>";

function sum($x,$y,$z){
	$v=$x+$y+$z;
	return $v;
}
$m=sum(2,4,6);
echo $m;
?>