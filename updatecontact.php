<?php
include 'dbh.php';

$mobile = $_POST['mobile'];
$residence = $_POST['residence'];
$aoc = $_POST['aoc'];
$email = $_POST['email'];


$sql = "UPDATE contact SET residence='$residence' , aoc='$aoc' , email='$email'
WHERE mobile='$mobile'";
$result = $conn->query($sql);

if(!$result)
{
	echo "please enter valid details" ;
}

else
{

header("Location: home.php");}
?>