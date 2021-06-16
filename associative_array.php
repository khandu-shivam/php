<?php


$students=array("id"=>"1","name"=>"sk","age"=>"20","college"=>"mits");

print_r($students) ;
echo "<br>";

echo $students["name"] ."<br>";

foreach($students as $s=>$value){
	echo $s. ":-" .$value . "<br>";
}
?>