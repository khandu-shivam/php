<?php

$x="admin";
$y="12345";

if($x=="admin" && $y=="1234"){
	echo "welcome <br>";
}else{
	echo "check input <br>";
}
if($x=="admin" || $y=="1234"){
	echo "welcome <br>";
}else{
	echo "check input <br>";
}
if( $y!="12345"){
	echo "wrong <br>";
}else{
	echo "correct <br>";
}



?>