<html><head>
<title>...</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<script type="text/javascript">
/*<CDATA[[*/

function calcBMI(){
var weight, height, total;
document.form.height.value = weight * 703;
document.form.weight.value = (height * height);
var total = weight / height;
document.form.result.value = total;
}
/*]]>*/
</script>
</head>
<body>
<form name="form">
Weight: <input type="text" name="weight" /><br />
Height: <input type="text" name="height" /><br />
Result: <input type="text" name="result" /><br />
<input type="button" value="BMI Result!" onclick="calcBMI()" />
</form>