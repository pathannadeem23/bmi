
<?php

 //require 'config.php';
 $con=mysqli_connect("localhost","root","") or die("unable to connect!");
mysqli_select_db($con,'demo');

   session_start();
/*
if(isset($_POST['submit1']))
{
  $_SESSION['login_status']==false;
    session_destroy();
	setcookie(PHPSESSID,session_id(),time()-1);
    header("Location:login1.php");
} 
*/


$_SESSION['login_status']==false;
    session_destroy();
	setcookie(PHPSESSID,session_id(),time()-1);
    header("Location:login1.php");
?>






<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Health Care</title>
<style>
	label {
    display:block;
    margin-top:20px;
    letter-spacing:5px;
	font-family:"Lucida Calligraphy";
	font-style: oblique;
	font-size: 200%;
	
	
}

a.one:link {
	color:red;
	font-size:30px;
	font-family:"Collona MT";
	
	
}
</style>



</head>
<body style="background-image:url(images/a3.jpg)">
<br><br><br><br><br>
<br><br><br><br><br>
<center>
<label>
Thank You For Visting
 </label>

<form action="logout.php" method="post">
<!--<input type="submit" name="logout"  value="Log Out" onclick="login1.php" /><br>-->
<br><br><br><br><br>

<a class="one" href="login1.php"> LOGOUT</a>
</form>
</center>
<!--
/*
// 
//if(isset($_POST['logout']))
//session_destroy();
//header('location:login1.php')

?>
*/-->
</body>
</html>

