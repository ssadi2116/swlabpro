<?php
include 'dbh.php';

$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];

$sql = "UPDATE personal SET age='$age' , dob='$dob' , fname='$fname' , mname='$mname' , gender='$gender'  , nationality='$nationality'  
WHERE name='$name'";
$result = $conn->query($sql);

if(!$result)
{
	echo "please enter valid details" ;
}

else
{

header("Location: home.php");}
?>