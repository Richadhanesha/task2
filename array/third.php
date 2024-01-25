<?php
$student_master=array(array("name"=>"richa","rollno"=>23,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"),
array("name"=>"hemanshi","rollno"=>30,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"),
array("name"=>"isha","rollno"=>31,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"),
array("name"=>"yatri","rollno"=>32,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"),
array("name"=>"prinsi","rollno"=>33,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"),
array("name"=>"yashvi","rollno"=>34,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"),
array("name"=>"shyam","rollno"=>35,"division"=>"b1","city"=>"rajkot","enroll"=>220801080,"email"=>"richadhanesha@gmail.com","dis"=>"rajkot"));

foreach($student_master as $val)
{
	print_r ($val);
	echo "<br>";
}
print_r($student_master);
echo $student_master[3]["name"];
echo $student_master[2]["city"];	
?>