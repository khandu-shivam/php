<?php

$name="shivam";

echo strlen($name) ."<br>";

echo strtoupper($name) ."<br>";

$username="shivam@gmail.com";
$entered=strtolower("Shivam@gmail.com");

if($username==$entered){
	echo "correct" ."<br>";
}
else{
	echo "incorrect" ."<br>";
}

echo substr("pninfosys gwalior",2,8) ."<br>";

echo str_shuffle("abcdefghijkl");
?>