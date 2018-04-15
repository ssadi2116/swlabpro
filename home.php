<!DOCTYPE html>
<html>
<body>
<title>home</title>
<style>

body{
	font-family:Tahoma, Geneva, sans-serif;
background-image: url(http://getmyuni.azureedge.net/college-image/big/visvesaraya-national-institute-of-technology-vnit-nagpur.jpg); 
-moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
	}
	
	
	
	#container{
	width:570px;
	background-color:rgba(250,250,252,.9);
	margin:auto;
	margin-top:10px;
	margin-bottom:10px;
	box-shadow:0 0 3px #999;
                   opacity: 0.8;
	}
#container_body{
	padding:20px;
	}
.form_title{
	font-size:35px;
	color:#141823;
	text-align:center;
	padding:10px;
	font-weight:normal;
	}
.head_para{
	font-size:19px;
	color:#99a2a7;
	text-align:center;
	font-weight:normal;
	}
	
	
#sign_user{
	font-size:14px;
	color:#FFF;
	text-align:center;
	background-color:#3B5998;
	width:262px;
	padding:10px;
	margin-top:10px;
	cursor: pointer;
	}
	
	
	#sign_user1{
	font-size:14px;
	color:#FFF;
	text-align:center;
	background-color:#3B5998;
	width:530px;
	padding:10px;
	margin-top:10px;
	cursor: pointer;
	}
	
		
#errorBox{
	color:#F00;
	}
	
	
</style>


<img src="Visvesvaraya-National-Institute-of-Technology.png" alt="Mountain View" style="float:left;width:150px;height:150px;">

<font size="7" color="#0000cc	" align="centre">&nbsp VISVESVARAYA &nbsp NATIONAL &nbsp   INSTITUTE  &nbsp  OF</font>


<img src="Sunny PP.jpg" alt="Mountain View" style="float:right;width:150px;height:175px;">

<br /> 


 <font size="7" color="#0000cc	" align="centre">   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp TECHNOLOGY</font>


<br>
<br>
<br>
<br>
<br>




<button onclick="location.href = 'home.php';" id="sign_user" class="float-left submit-button" >	PERSONAL DETAILS</button>

<button onclick="location.href = 'acad.php';" id="sign_user" class="float-left submit-button" >ACADEMIC QUALIFICATION</button>

<button onclick="location.href = 'inter.php';" id="sign_user" class="float-left submit-button" >INTERESTS</button>

<button onclick="location.href = 'ach.php';" id="sign_user" class="float-left submit-button" >ACHIEVEMENTS</button>

<button onclick="location.href = 'contact.php';" id="sign_user" class="float-left submit-button" >CONTACT DETAILS</button>





<?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        
      $selected = mysql_select_db("swlab2", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM personal ");
      ?>
	  <br>
	  <br>
	  <br>
	  <br>
	  

<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">PERSONAL DETAILS</h2>
	  
	  <font size="5" color="#3380FF">NAME: </font>
      
      
      
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
                 
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'>&nbsp&nbsp{$row['name']} </span>";
					echo "<br><br><span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#3380FF'>AGE:   </span>";
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'> &nbsp &nbsp{$row['age']} </span>";
					echo "<br><br><span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#3380FF'>DATE OF BIRTH:   </span>";
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'> &nbsp &nbsp{$row['dob']} </span>";
					echo "<br><br><span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#3380FF'>FATHER'S NAME:   </span>";
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'> &nbsp &nbsp{$row['fname']} </span>";
					echo "<br><br><span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#3380FF'>MOTHER'S NAME:   </span>";
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'> &nbsp &nbsp{$row['mname']} </span>";
					echo "<br><br><span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#3380FF'>GENDER:   </span>";
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'> &nbsp &nbsp{$row['gender']} </span>";
					echo "<br><br><span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#3380FF'>NATIONALITY:   </span>";
					echo "<span style = 'font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'> &nbsp &nbsp{$row['nationality']} </span>";
          }
        ?>
      
	<br>
	<br>
	
	
	<button onclick="location.href = 'updatehome.html';" id="sign_user1" class="float-left submit-button" >UPDATE INFO</button>
	
	
     <?php mysql_close($connector); ?>




</body>
</html>