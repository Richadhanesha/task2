<?php
$student_detail=array("name"=>"richa","rollno"=>23,"divison"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot","ta"=>"keshod","hobby"=>"sports","day"=>"thrusday");
foreach($student_detail as $myval)
{
	echo $myval;
	echo "<br>";
}	
print_r($student_detail);
?>