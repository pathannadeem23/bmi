<?php
session_start();

if(isset($_SESSION['login_status'])==false)
{
   header("Location:login1.php");
}



?>



<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Health Care</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<style>
label {
    display:block;
    margin-top:20px;
    letter-spacing:1px;
	font-family:"Times New Roman";
	font-size: 20;
	color: #e62e00;
	
}


h4{
    display:block;
    margin-top:30px;
    letter-spacing:1px;
	font-family:"Bookman Old Style";
	font-size: 11;
	
}

p.cls1 
{
	color: #e62e00;
	font-size:22px;
	font-family: "Times New roman";
	
}
.menu ul li a.active{
color:#ffffff;
}

</style>

</head>
<body>

<center>
<img src="images/logo.png" />
</center>
<div class="menu-wrapper">
  <div class="menu">
    <ul>
     <li><a class="active" href="mnindex.php"><b>Home</b></a></li>
      <li><a href="mnrecord.php"><b>Records</b></a></li>
      <li><a href="mnsummary.php"><b>Summary</b></a></li>
      <li><a href="mnabout.php"><b>About</b></a></li>
      <li><a href="logout.php"><b>Logout</b></a></li>
     
     
    </ul>
  </div>
  <div class="clearing"></div>
</div>
<div class="wrapper">
  <div class="header-wrapper">
    <div class="logo">
      <h1>Healthy<span>Life</span></h1>
      <p>Stay Healthy Stay Happy</p>
    </div>
    <div class="right-panel">
  
<div>
<p class="cls1">
Welcome to the about us section of the website.<br>
It is a Platform where doctor and patient join hands.<br>
Its branches are located at-
</p>
<br><br><br>
<label>
Branch 1-
</label><br>
6th floor, Hiranandani,<br>
L.B.S Marg,<br>
Bandra.<br>
Email - health@gmail.com<br>
Contact No- 022- 6123467

<br><br><br>

<label>
Branch 2-
</label><br>
B/1oth floor, Real Estate,<br>
Tandon Road,<br>
Mumbai.<br>
Email - health@gmail.com<br>
Contact No- 022- 6123468

<br><br>
<p class="cls1">  Stay Fit.. Stay Healthy. </p><br><br>
  </div>
	
  </div>
  <div class="clearing"></div>
  
  
  </div>

 
<div class="footer-wrapper">
  <div class="footer">
        <div class="row">
        <div class="col-sm-6">
                   &copy; 2016 Copyrighted. All Rights Reserved.
       </div>
    </div>
	</div>
</div>

</body>
</html>
