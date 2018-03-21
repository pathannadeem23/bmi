
<html>
<head>
<style>

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
}



<script language="JavaScript">

function calculateBmi() 
{
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){	
var finalBmi = weight/(height/100*height/100)
document.bmiForm.eg.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That you are too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That you are healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That you have overweight."
}
}
else{
alert("Please Fill in everything correctly")
}
}

</script>
</style>
</head>
<body>

<form name="bmiForm">
Your Weight(kg): <input type="text" name="weight" size="10"><br />
Your Height(cm): <input type="text" name="height" size="10"><br />
<input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
Your BMI: <input type="text" name="bmi" size="10"><br />
This Means: <input type="text" name="meaning" size="25"><br />
<input type="reset" value="Reset" />


<input type="submit" class="button1" value="OK">
</form>
</body>
</html>