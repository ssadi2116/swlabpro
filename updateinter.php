<?php
include 'dbh.php';

$sports = $_POST['sports'];
$art = $_POST['art'];
$literature = $_POST['literature'];
$music = $_POST['music'];
$others = $_POST['others'];




$sql = "UPDATE interests SET sports='$sports' , art='$art' , literature='$literature' , music='$music' , others='$others'";
$result = $conn->query($sql);

if(!$result)
{
	echo "please enter valid details" ;
}

else
{

header("Location: home.php");}
?>