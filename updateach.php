<?php
include 'dbh.php';

$awards = $_POST['awards'];
$medals = $_POST['medals'];
$participation = $_POST['participation'];



$sql = "UPDATE achievements SET awards='$awards' , medals='$medals' , participation='$participation'";
$result = $conn->query($sql);

if(!$result)
{
	echo "please enter valid details" ;
}

else
{

header("Location: home.php");}
?>