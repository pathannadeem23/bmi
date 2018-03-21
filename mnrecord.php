<?php
 require 'config.php';
 //session_start();
?>
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
.menu ul li a.active{color:#ffffff;}
.button0 {
    background-color: #ffa64d; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 12px;
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
   
  </div>

 <div class="clearing"></div>
 
 <div class="panel-wrapper">
 
<div class="left-colum">

   <img src="images/bg6.jpg">

   <br>
   <br>
   
<img src="images/bg5.jpg">
   
</div>

<div class="right-colum">

<h2>
Doctor Details
</h2>

<!--<input type="button" value="ADD" onclick="mndoctor.php" class="button0"> 
<br>
<input type="button" value="Delete" onclick="mndeletedoctor.php" class="button0">
<br>
<input type="button" value="Display" onclick="mndeletedoctor.php" class="button0">
<br>
-->
<button id="myButton" class="button0" >ADD</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "mndoctor.php";
    };
</script>
<br><br>
<button id="myButton1" class="button0" >DELETE</button>

<script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "mndeletedoctor.php";
    };
</script>


<button id="myButton2" class="button0" >DISPLAY</button>

<script type="text/javascript">
    document.getElementById("myButton2").onclick = function () {
        location.href = "mndeletedoctor.php";
    };
</script>



<!--

Details of Doctor are stored here
<br>
<a href="mndoctor.php"> Add New Record</a>
<br>
<a href="mndeletedoctor.php">Delete Record And Display Record</a>     -->                
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>
Patient Details
</h2>
<button id="myButton3" class="button0" >ADD</button>

<script type="text/javascript">
    document.getElementById("myButton3").onclick = function () {
        location.href = "eg3.php";
    };
</script>
<br><br>
<button id="myButton4" class="button0" >DELETE</button>

<script type="text/javascript">
    document.getElementById("myButton4").onclick = function () {
        location.href = "mndeletepatient.php";
    };
</script>


<button id="myButton5" class="button0" >DISPLAY</button>

<script type="text/javascript">
    document.getElementById("myButton5").onclick = function () {
        location.href = "mndeletepatient.php";
    };
</script>


 </div>
 
   </div>
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
