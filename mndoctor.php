<?php
 //require 'config.php';
 $con=mysqli_connect("localhost","root","") or die("unable to connect!");
 
mysqli_select_db($con,"demo");



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
	<!--background:url(images/textarea-bg.jpg) right no-repeat #efefef;-->
}



input:focus, textarea:focus {
    border:1px solid #97d6eb;
}

.menu ul li a.active{color:#ffffff;}

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
.button0 {
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
	border-radius: 12px;
	width:25%;
}


.addbtn
{
   font-size: 20px;
   background-color: #4CAF50; /* Green */
   height: 40px;
  
   border-radius: 8px;
   
}

.resetbtn
{
   font-size: 20px;
   background-color: #4CAF50; /* Green */
   height: 40px;
   border-radius: 8px;
}




	</style>
	

	<script>
	
function ClearForm(form){

	form.name.value =""
    form.hospital.value = "";
    form.contact.value = "";
    form.address.value = "";
    //form.my_comment.value = "";

}

	</script>
</head><!--/head-->

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
 


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        
   

			<table cellspacing="15" cellpadding="9">
                          
                                <tr>
                                    <td>
                                        <label> Name </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter doctor name" name="name" required/> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label> Hospital</label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter Hospital name" name="hospital" required/> </td>
                                </tr>
				
                                <tr>
                                    <td>
                                        <label> Contact No </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter Mobile Number" name="contact" required/> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label> Address </label>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Enter address of hospital" name="address" required/> </td>
                                </tr>
                                
						<tr>
						<td>
						<input type="submit" value="ADD" class="addbtn" name="submit_btn" id="submit_btn"><!--class="button0"-->
						</td>
						
						<td>
								<input type="reset" class="resetbtn" value="Reset" onClick="ClearForm(this.form)"><!--class="button0"-->
						</td>
								
						</tr>
        </table>

     
</form>


<?php


if(isset($_POST['submit_btn']))
{
		$nm = $_POST['name'];
		$hosp = $_POST['hospital'];
		$ct = $_POST['contact'];
		$ad = $_POST['address'];
	

		
       $nmContentPattern="[a-zA-Z]";
       $nmLengthPattern="^.{1,25}$";

       $hospContentPattern="[a-zA-Z]";
	   $hospLengthPattern="^.{1,25}$";

       $ctContentPattern="[0-9]";
       $ctLengthPattern="^.{10}$";

       $nmContent=@ereg($nmContentPattern,$nm);
       $nmLength=@ereg($nmLengthPattern,$nm);

       $ctContent=@ereg($ctContentPattern,$ct);
       $ctLength=@ereg($ctLengthPattern,$ct);

       $hospContent=@ereg($hospContentPattern,$hosp);
       $hospLength=@ereg($hospLengthPattern,$hosp);


    if( $nm && $ct && $hosp )
    {
     if(!($nmContent && $nmLength))
     {
	echo '<script type="text/javascript"> alert("Invalid Name!") </script>';
	
//echo "Invalid Name".$nm. "<br>";
     }

     if(!($ctContent && $ctLength))
     {
	   echo '<script type="text/javascript"> alert("Invalid Contact Number!") </script>';
	//echo "Invalid contact<br>";
     }

	 if(!($hospContent && $hospLength))
     {
	   echo '<script type="text/javascript"> alert("Invalid Hospital Name") </script>';
	//echo "Invalid contact<br>";
     }

	
else
{
	$sql="insert into doctor (name, hosp, cnt, addr) values('$nm','$hosp','$ct','$ad')";
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

