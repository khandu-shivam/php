<?php

$a=array("iii","999",7,true);
echo "<pre>";
print_r($a) ;
echo "<br>";
//echo $a;  //not work 
echo $a[0] . "<br>";

$l=count($a);
echo "length is: $l ". "<br>";


for($i=0; $i<=count($a); $i++){
	echo $a[$i] ."<br/>";
}

foreach ($a as $b) {
	# code...
	echo $b;
}


?>