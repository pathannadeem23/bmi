<?php
session_start();

if(isset($_SESSION['login_status'])==false)
{
   header("Location:login1.php");
}



?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Health Care</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style>
.mySlides {display:none;}


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

	label {
    display:block;
    margin-top:20px;
    letter-spacing:3px;
	font-family:"Times New Roman";
}

textarea {
	height:213px;
	<!--background:url(images/textarea-bg.jpg) right no-repeat #efefef;-->
}

.cls1
{
	
	width:439px;
	height:27px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;

}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #ff751a;
    color: white;
}
.menu ul li a.active{color:#ffffff;}
	


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
     
    </ul>  </div>
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
   
   <div class="clearing"></div>
  <div class="banner-wrapper">
    <div class="banner"> 
	  
	<div>
	<img src="images/bg4.jpg" width="700px" height="300px"/>
	
	</div>
	
 
	
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   <ul>
	<label>Select Doctor's Name :
	</label>
	<?php
		$con=mysqli_connect("localhost","root","") or die("unable to connect!");
		mysqli_select_db($con,'demo');
		
		$sql = "SELECT name,id FROM doctor";
		$result = mysqli_query($con,$sql);

		echo "<select name='dname'>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<option value='" . $row['name'] ."'>" . $row['name'] ."</option>";
		}
		echo "</select>";
	

	
	
	
   ?>
   
   
   
   <br>
   <br>
   
   <input type = "submit" class="button0" name="submit1" id="submit1" value="Underweight">
   
   <input type = "submit" class="button0" name="submit2" id="submit2" value="Normal">
   
   <input type = "submit" class="button0" name="submit3"  id="submit3"  value="Overweight">
   
   <input type = "submit" class="button0" name="submit4" id="submit4" value="Obese">
  
   </ul>
   
  
   
   </form>
   
   
	
		<?php
			if(isset($_POST['submit1'])){
				//echo '<script type="text/javascript"> alert("Button Name") </script>';
				
				$con=mysqli_connect("localhost","root","") or die("unable to connect!");
				mysqli_select_db($con,'demo');
				$dname=$_POST['dname'];
				
				$sql ="select* from patient where (bmi<18) and  (name='$dname')";
				$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet){
						echo "Doctor Name is";
						echo "<h3>" .$dname. "</h3>";
						echo "<table border=\"1\">";
					 echo "<tr><th>Name</th><th>Gender</th><th>BMI Value</th></tr>";
			
								while($row=mysqli_fetch_array($recordSet, MYSQLI_ASSOC)){
								
									echo "<tr><td>".$row["nm"]."</td><td>".$row["gender"]."</td><td>".$row["bmi"]."</td></tr>";
								}
							echo "</table>";
					}else{
						echo mysqli_error($con);
					}
			}
			
			else if(isset($_POST['submit2'])){
					$con=mysqli_connect("localhost","root","") or die("unable to connect!");
					mysqli_select_db($con,'demo');
					
					$dname=$_POST['dname'];
					$sql ="select nm,gender,bmi from patient where (bmi between 18 and 25) and  (name='$dname')";
			
					 		$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet){
						echo "Doctor Name is";
						echo "<h3>" .$dname. "</h3>";
						echo "<table border=\"1\">";
					 echo "<tr><th>Name</th><th>Gender</th><th>BMI Value</th></tr>";
			
								while($row=mysqli_fetch_array($recordSet, MYSQLI_ASSOC)){
								
									echo "<tr><td>".$row["nm"]."</td><td>".$row["gender"]."</td><td>".$row["bmi"]."</td></tr>";
								}
							echo "</table>";
					}else{
						echo mysqli_error($con);
					}
					//mysql_close($conn);
			}
			else if(isset($_POST['submit3'])){
					$con=mysqli_connect("localhost","root","") or die("unable to connect!");
					mysqli_select_db($con,'demo');
					$dname=$_POST['dname'];
					
					
					$sql ="select nm,gender,bmi from patient where (bmi between 25 and 30) and (name='$dname')";
					$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet){
						echo "Doctor Name is";
						echo "<h3>" .$dname. "</h3>";
						echo "<table border=\"1\">";
					
			 echo "<tr><th>Name</th><th>Gender</th><th>BMI Value</th></tr>";
								while($row=mysqli_fetch_array($recordSet, MYSQLI_ASSOC)){
								
									echo "<tr><td>".$row["nm"]."</td><td>".$row["gender"]."</td><td>".$row["bmi"]."</td></tr>";
								}
							echo "</table>";
					}else{
						echo mysqli_error($con);
					}//mysql_close($conn);
			}
			else if(isset($_POST['submit4'])){
					$con=mysqli_connect("localhost","root","") or die("unable to connect!");
					mysqli_select_db($con,'demo');
					
					$dname=$_POST['dname'];
					
					$sql ="select nm,gender,bmi from patient where bmi > 30 and name='$dname'";
					$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet){
						echo "Doctor Name is";
						echo "<h3>" .$dname. "</h3>";
						echo "<table border=\"1\">";
					 echo "<tr><th>Name</th><th>Gender</th><th>BMI Value</th></tr>";
			
								while($row=mysqli_fetch_array($recordSet, MYSQLI_ASSOC)){
								
									echo "<tr><td>".$row["nm"]."</td><td>".$row["gender"]."</td><td>".$row["bmi"]."</td></tr>";
								}
							echo "</table>";
					}else{
						echo mysqli_error($con);
					}//mysql_close($conn);
			}
			//mysql_close($con);
		?>   
</div>
</div>
</div>
  <br>
  
  
   <div>
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
