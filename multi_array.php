<?php


$students = array ('0123'=>array('age'=>20, 'marks'=>40, 'result'=>'pass'),
	               'rahul'=>array('age'=>40, 'marks'=>50, 'class'=>'bca'));
echo "<pre>";
print_r($students);
echo $students['0123']['result'] ."<br>";
echo $students["rahul"]['marks'];

?>