<?php
include 'dbh.php';

$ssc = $_POST['ssc'];
$hsc = $_POST['hsc'];
$grad = $_POST['grad'];
$postgrad = $_POST['postgrad'];


$sql = "UPDATE academics SET ssc='$ssc' , hsc='$hsc' , postgrad='$postgrad'  WHERE grad='$grad'";

$result = $conn->query($sql);

if(!$result)
{
	echo "please enter valid details" ;
}

else
{

header("Location: home.php");}
?>