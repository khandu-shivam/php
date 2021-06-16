<?php

$a=40;
$b=25;

if($a==$b){
	echo "res1 :a is equal to b <br>";
}else{
	echo "res2 :a not equal b <br>";
}

if($a>$b){
	echo "res1 :$a greater $b <br>";
}else{
	echo "res2 :a not greater b <br>";
}

if($a!=$b){
	echo "res1 : a not equal b <br>";
}else{
	echo "res2 : a equal b <br>";
}
if($a>=$b){
	echo "res1 : a either greater or equal b <br>";
}else{
	echo "res2: a neither greater nor equal b <br>";
}


///   triple Equal

$x=40;
$y="40";
if($x===$y){   //checks datatype also
	echo "res1 x equal y <br>";
}else{
	echo "res2 x not equal y <br>";
}
?>