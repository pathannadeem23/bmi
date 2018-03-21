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
	<b> PATIENT'S RECORD </b>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   

   <ul>
	<label>Select Patients's Name :
	</label>
	  <br><br>
	<?php
		$con=mysqli_connect("localhost","root","") or die("unable to connect!");
		mysqli_select_db($con,'demo');
		
	//	$pt= "Select Patients";
		
		$sql = "SELECT nm FROM patient";
		$result = mysqli_query($con,$sql);

		echo "<select name='pname'>";
		while ($row = mysqli_fetch_array($result)) 
		{
			//echo "<option>".$pt."</option>";
			echo "<option value='" . $row['nm'] ."'>" . $row['nm'] ."</option>";
		}
		echo "</select>";
	
   ?>
   
   <br>   <br><br><br>
   <input type = "submit" class="button0" name="submit2" id="submit2" value=" DISPLAY PATIENT'S DETAIL"   >
     <input type = "submit" class="button0" name="submit1" id="submit1" value="DELETE" onclick="return confirm('Are you sure want to delete?')">
   
   
     <!--<input type = "submit" class="button0" name="submit3"  id="submit3"  value="Overweight">
   
     <input type = "submit" class="button0" name="submit4" id="submit4" value="Obese">-->
  
   </ul>
   
  
   
   </form>

   
   <?php

    function deletedp_record()
    {
     	$con=mysqli_connect("localhost","root","") or die("unable to connect!");
				mysqli_select_db($con,'demo');
			
				
				$sql ="select* from patient";
				$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet){
						
						echo "<h3><center>Patient's Detail</center></h3>";
						echo "<table border=\"1\">";
                              echo "<tr><th>ID</th><th>Patient Name</th><th>Date of birth</th><th>Doctor's name</th><th>Gender</th><th>Contact No.</th><th>Weight</th><th>Height</th><th>BMI</th></tr>";					 
			
								while($row=mysqli_fetch_array($recordSet, MYSQLI_ASSOC)){
								
									echo "<tr><td>".$row["id"]."</td><td>".$row["nm"]."</td><td>".$row["dob"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["contact"]."</td><td>".$row["weight"]."</td><td>".$row["height"]."</td><td>".$row["bmi"]."</td></tr>";
								}
							echo "</table>";
					}else{
						echo mysqli_error($con);
					}
	}

   ?>

   
   
	
		<?php
			if(isset($_POST['submit1'])){
				//echo '<script type="text/javascript"> alert("Button Name") </script>';
	         
				$con=mysqli_connect("localhost","root","") or die("unable to connect!");
				mysqli_select_db($con,'demo');
				$pname=$_POST['pname'];
				
				$sql ="delete from patient where nm='$pname'";
				$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet)
					{
						deletedp_record();
						echo '<script type="text/javascript"> alert("Record deleted successfully!") </script>';
	                    

	                    
	                
					}
					else{
						echo mysqli_error($con);
					}
             
            
  			}
			
			else if(isset($_POST['submit2']))
			{
				$con=mysqli_connect("localhost","root","") or die("unable to connect!");
				mysqli_select_db($con,'demo');
			
				
				$sql ="select* from patient";
				$recordSet = mysqli_query($con,$sql);
			
					
					if($recordSet){
						//echo "Doctor Name is";
						echo "<h3><center>Patient's Detail</center></h3>";
						echo "<table border=\"1\">";
                              echo "<tr><th>ID</th><th>Patient Name</th><th>Date of birth</th><th>Doctor's name</th><th>Gender</th><th>Contact No.</th><th>Weight</th><th>Height</th><th>BMI</th></tr>";					 
			
								while($row=mysqli_fetch_array($recordSet, MYSQLI_ASSOC)){
								
									echo "<tr><td>".$row["id"]."</td><td>".$row["nm"]."</td><td>".$row["dob"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["contact"]."</td><td>".$row["weight"]."</td><td>".$row["height"]."</td><td>".$row["bmi"]."</td></tr>";
								}
							echo "</table>";
					}else{
						echo mysqli_error($con);
					}
			}
	

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
