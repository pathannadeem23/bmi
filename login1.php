<?php
 //require 'config.php';
 $con=mysqli_connect("localhost","root","") or die("unable to connect!");
mysqli_select_db($con,'demo');
 session_start();

?>
<html>
<head>

<style>
	label {
    display:block;
    margin-top:20px;
    letter-spacing:5px;
	font-family:"Lucida Calligraphy";
	font-style: oblique;
	font-size: 200%;
	
	
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
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 10px;
	width:50%;
}



.button4 {
    position: relative;
    background-color: #4CAF50;
    <!--border: none;-->
	border-radius: 10px;
    font-size: 28px;
    color: #FFFFFF;
  <!--  padding: 30px;-->
    
	padding-top: 50px;
    padding-right: 50px;
    padding-bottom: 50px;
    padding-left: 50px;
	border-radius: 25px;
	width: 200px;
	height:50px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

<!--.button4:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button4:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

-->

</style>



<title> 
LOGIN PAGE
</title>
<link rel="stylesheet href="css/style.css">
<link rel="stylesheet href="css/style1.css">
</head>
<body style="background-image:url(images/a3.jpg)">
<form action="login1.php" method="POST">
<div id="mainpage">
<center>

<img src = "images/i2.png" class="admin">
</center>
<br>

    <body>


			              
                                        <label> <b>User Name</b> </label>
										<br>
                                   
                                        <input type="text" placeholder="Enter User name" name="usernm" required/> </td>
                               
                                
                                        <label> <b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="pswd" required/> </td>
                                <br>
								<br>
		<input type="submit" value="Login" name="submit_btn" class="button4">
		</td>
	
	</div>
</form>

<?php
	if(isset($_POST['submit_btn'])){

	$username = $_POST['usernm'];
	$passwd = $_POST['pswd'];
	
	
	$query = "select * from admininfo where username='$username' AND  password='$passwd'";
	
	$query_run = mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	  {
	 //Valid
	    $_SESSION['login_status']=true;
	    header('location:mnindex.php');
	  //echo '<script type="text/javascript"> alert("mnindex.html") </script>';
	  }
	  else
	  {
	    echo '<script type="text/javascript"> alert("Invalid user!") </script>';
	  }




	

	}
?>


</body>
</html>