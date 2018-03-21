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
.mySlides {display:none;}

label {
    display:block;
    margin-top:20px;
    letter-spacing:1px;
	font-family:"Times New Roman";
	font-size: "20";
	
}


h4{
    display:block;
    margin-top:30px;
    letter-spacing:1px;
	font-family:"Bookman Old Style";
	font-size: "11";
	
}
.menu ul li a.active{color:#ffffff;}



p { color: #919191; font-family: 'Helvetica Neue', sans-serif; font-size: 18px; line-height: 24px; margin: 0 0 24px; text-align: justify; text-justify: inter-word; }
h1 { color: #e5703d; font-family: 'Helvetica Neue', sans-serif; font-size: 25px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: auto; }
h5 { color: #111; font-family: 'Open Sans', sans-serif; font-size: 22px; font-weight: 300; line-height: 20px; margin: 0 0 72px; }



</style>
</head>
<body>
<center>
<img src="images/logo.png" width:50 height:20 />
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
  <div class="banner-wrapper">
    <div class="banner"> 
	
	<h2 class="w3-center">Images</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/bg1.jpg" style="width:100%">
  <img class="mySlides" src="images/bg2.jpg" style="width:100%">
  <img class="mySlides" src="images/bg3.jpeg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 8 seconds
}
</script>
</div>
    <div class="banner-content">
      <h1>Body Mass Index</h1>
      <h2 color="green">BMI =	Weight in Kilograms / Height in Meters<sup>2</sup></h2>
   <!--   <p>Etiam malesuada</p> -->
      <a href="#">Formula</a> </div>
    <div class="clearing"></div>
  </div>
  <div class="panel-wrapper">
   
    <label><h1>What is BMI?</h1>
   
   </label><br>
<p>
BMI is a person's weight in kilograms divided by the square of height in meters. BMI does not measure body fat directly, but research has shown that BMI is moderately correlated with more direct measures of body fat obtained from skinfold thickness measurements, bioelectrical impedance, densitometry (underwater weighing), dual energy x-ray absorptiometry (DXA) and other methods 1,2,3. Furthermore, BMI appears to be as strongly correlated with various metabolic and disease outcome as are these more direct measures of body fatness 4,5,6,7,8,9. In general, BMI is an inexpensive and easy-to-perform method of screening for weight category, for example underweight, normal or healthy weight, overweight, and obesity.
</p>

	<br>
	<br>
	<label><h1>	How is BMI used?
  </h1>
</i></b>
   </label><br>
<p>
A high BMI can be an indicator of high body fatness. BMI can be used as a screening tool but is not diagnostic of th/b/e body fatness or health of an individual.

To determine if a high BMI is a health risk, a healthcare provider would need to perform further assessments. These assessments might include skinfold thickness measurements, evaluations of diet, physical activity, family history, and other appropriate health screenings1
</p>	
	<br><br>
	<label><h1>Things to remember
  </h1>

	<br>
<p>
BMI is an approximate measure of your total body fat.
Being underweight or overweight can cause health problems, especially if you are also inactive.
Your waist circumference is a better predictor of health risk than BMI.
</p>
<br><br>
<label><h1>Some exceptions to the BMI rule
</h1>
	<br>
<p>
BMI does not differentiate between body fat and muscle mass. This means there are some exceptions to the BMI guidelines, including:<br><br>
<h5>Muscles</h5><p>body builders and people who have a lot of muscle bulk will have a high BMI, but are not overweight.</p><br><br>
<h5>Physical disabilities</h5><p>people who have a physical disability and are unable to walk may have muscle wasting. Their BMI may be slightly lower, but this does not necessarily mean they are underweight. In these instances, it is important to consult a dietitian who will provide helpful advice.</p><br><br>
<h5>Height</h5><p> BMI is not totally independent of height and it tends to overestimate obesity among shorter people and underestimate it among taller people. Therefore, BMI should not be used as a guide for adults who are very short (less than 150 cm) or very tall (more than 190 cm).</p><br><br>
<h5>People of different ethnic groups</h5><p> Asians and Indians, for example, have more body fat at any given BMI compared to people of European descent. Therefore, the cut-offs for overweight and obesity may need to be lower for these populations. This is because an increased risk of diabetes and cardiovascular disease begins at a BMI as low as 23 in Asian populations. Some populations have equivalent risks at a higher BMI, such as people of Torres Strait Islander and Maori origin.</p><br>
<br>
</p>
  <div class="page-wrapper">
  
	
	
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
		
 
  

<!--<div class="bottom">
  <div class="content">
    <p>Designed By :<a href="http://www.alltemplateneeds.com">www.alltemplateneeds.com</a></p>
    <p>Images  From :<a href="http://www.photorack.net"> photorack.net</a></p>
  </div>
</div>-->

</body>
</html>
