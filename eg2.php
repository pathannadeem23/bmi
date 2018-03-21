<?php
// require 'config.php';
 $con=mysqli_connect("localhost","root","") or die("unable to connect!");
mysqli_select_db($con,"demo");
// session_start();

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

<link href="css/style1.css" rel="stylesheet" type="text/css" />


	<style>
	label {
    display:block;
    margin-top:20px;
    letter-spacing:3px;
	font-family:"Times New Roman";
}

/* Centre the page */
.body {
    display:block;
    margin:0 auto;
    width:576px;
}

/* Centre the form within the page */
form {
    margin:0 auto;
    width:459px;
}

/* Style the text boxes */
input, textarea {
	width:439px;
	height:27px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
}

textarea {
	height:213px;
	}



input:focus, textarea:focus {
    border:1px solid #97d6eb;
}

#submit {
    width:127px;
    height:38px;
   <!-- background:url(images/submit.jpg);-->
    text-indent:-9999px;
    border:none;
    margin-top:20px;
    cursor:pointer;
}

	#submit:hover {
	    opacity:.9;
	}
	
	
.button1 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 8px;
	width:10px;
}
	-->
	
.button5 {
    background-color: #4CAF50; /* Peacock Green */
	
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
	width :25%;
	
}	
.menu ul li a.active{color:#ffffff;}

</style>



<SCRIPT LANGUAGE="JAVASCRIPT">
<!-- hide this script tag's contents from old browsers

//Body Mass calculator- by John Scott (johnscott03@yahoo.com)
//Visit JavaScript Kit (http://javascriptkit.com) for script
//Credit must stay intact for use

function ClearForm(form){

    form.weight.value = "";
    form.height.value = "";
    form.bmi.value = "";
    form.my_comment.value = "";

}

function bmi(weight, height) {

          bmindx=weight/eval(height*height);
          return bmindx;
}

function checkform(form) {

       if (form.weight.value==null||form.weight.value.length==0 || form.height.value==null||form.height.value.length==0){
            alert("\nPlease complete the form first");
            return false;
       }

       else if (parseFloat(form.height.value) <= 0||
                parseFloat(form.height.value) >=500||
                parseFloat(form.weight.value) <= 0||
                parseFloat(form.weight.value) >=500){
                alert("\nReally know what you're doing? \nPlease enter values again. \nWeight in kilos and \nheight in cm");
                ClearForm(form);
                return false;
       }
       return true;

}

function computeform(form) {

       if (checkform(form)) {

       yourbmi=Math.round(bmi(form.weight.value, form.height.value/100));
       form.bmi.value=yourbmi;
	   
	
       }
       return;
}
 // -- done hiding from old browsers -->
</SCRIPT>

</head><!--/head-->

<body>
<center>
<img src="images/logo.png" />
</center>

<div class="menu-wrapper">
  <div class="menu">
    <ul>
      <li><a href="mnindex.php">Home</a></li>
      <li><a href="mnabout.php">About</a></li>
      <li><a class="active" href="mnrecord.php">Records</a></li>
      <li><a href="mnsummary.php">Summary</a></li>
      <li><a href="logout.php">Logout</a></li>
     
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
 


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        
   <div class="">
<center>
			<table cellspacing="10" cellpadding="7">
                          
                                <tr>
                                    <td>
                                        <label> Name </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter patient name" name="name"required> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label> Date Of Birth</label>
                                    </td>
                                    <td>
                                       <input type="date" name="dob" min="1940-01-01"> 
									</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label> Doctor's Name </label>
                                    </td>
                                    <td>
                                       <!-- <input type="text" placeholder="Enter doctor's name" name="dm" required> </td>-->
									   
									   <?php
									   $con=mysqli_connect("localhost","root","") or die("unable to connect!");
										mysqli_select_db($con,'demo');
										
									   $sql = "SELECT name FROM doctor";
										$result = mysqli_query($con,$sql);

										echo "<select name='dname'>";
										while ($row = mysqli_fetch_array($result)) {
											echo "<option value='" . $row['name'] ."'>" . $row['name'] ."</option>";
										}
										echo "</select>";
									   ?>
									</td>
                                </tr>
								<tr>
                                    <td>
                                        <label> Gender </label>
                                    </td>
                                    <td>
                                        <select name="sex">
                                            <option> Select One </option>
                                            <option> Male </option>
                                            <option> Female </option>
                                          
                                        </select>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label> Contact No </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter Mobile Number" name="cnt" required>
									</td>
                                </tr>
								
								
								<tr>
                                    <td>
                                        <label> Weight </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter weight in KG" name="weight" onFocus="this.form.weight.value=''" required>
									</td>
                                </tr>
								
								<tr>
                                    <td>
                                        <label> Height </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter height in CMS" name="height" onFocus="this.form.height.value=''" required> 
									</td>
                                </tr>
								
								<tr>
								<td></td>
								<td>
								<input type="button" class="button5" value="Calculate" onClick="computeform(this.form)">
								</td>
								
								
								</tr>
								
								
								<tr>
                                    <td>
                                        <label> Bmi Result </label>
                                    </td>
                                    <td>
                                        <input type="text" name="bmi" readonly>
									</td>
                                </tr>
								
								<tr>
								<td>
								<input type="submit" value="ADD" name="submit" class="button1">
								</td>
								<td>
								<input type="reset" class="button5"  value="Reset" onClick="ClearForm(this.form)">
								
								</td>
								
								</tr>
</table>
		</center>
</form>
</div>


 <?php




 if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$doc = $_POST['dname'];
		$gender = $_POST['sex'];
		$cont= $_POST['cnt'];
		$weight= $_POST['weight'];
		$height = $_POST['height'];
		$bmi = $_POST['bmi'];
		
		
		
		$nameContentPattern="[a-zA-Z]";
       $nameLengthPattern="^.{1,25}$";

       $contContentPattern="[0-9]";
       $contLengthPattern="^.{10}$";
	   
	   $weightContentPattern="[0-9]";
	   $weightLengthPattern="^.{2,3}$";

	   $heightContentPattern="[0-9]";
	   $heightLengthPattern="^.{3}$";
	   
       $nameContent=@ereg($nameContentPattern,$name);
       $nameLength=@ereg($nameLengthPattern,$name);

       $contContent=@ereg($contContentPattern,$cont);
       $contLength=@ereg($contLengthPattern,$cont);

       $weightContent=@ereg($weightContentPattern,$weight);
       $weightLength=@ereg($weightLengthPattern,$weight);

		$heightContent=@ereg($heightContentPattern,$height);
       $heightLength=@ereg($heightLengthPattern,$height);

    if( $name && $cont && $weight && $height )
    {
     if(!($nameContent && $nameLength))
     {
	echo '<script type="text/javascript"> alert("Invalid Name!") </script>';
	
//echo "Invalid Name".$nm. "<br>";
     }

     if(!($contContent && $contLength))
     {
	   echo '<script type="text/javascript"> alert("Invalid Contact Number!") </script>';
	//echo "Invalid contact<br>";
     }

	 if(!($weightContent && $weightLength))
     {
	   echo '<script type="text/javascript"> alert("Invalid Weight") </script>';
	//echo "Invalid contact<br>";
     }

	  if(!($heightContent && $heightLength))
     {
	   echo '<script type="text/javascript"> alert("Invalid Height") </script>';
	//echo "Invalid contact<br>";
     }

	
	else{
		
		$sql="insert into patient(nm,dob,name ,gender,contact,weight ,height,bmi ) values('$name','$dob','$doc','$gender','$cont','$weight','$height','$bmi')";
	
		if(!mysqli_query($con,$sql))
		{
			echo '<script type="text/javascript"> alert("Records not inserted") </script>';
		}

		else
		{
			echo '<script type="text/javascript"> alert("Records inserted successfully") </script>';
		}
	}
	}
	}
	
?>


 
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

