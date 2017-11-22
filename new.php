<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body style="text-align: center;">	
	<form method="POST" action="create.php">
		<div>Data</div>
			<input type="date" name="DATA">
		<div>Prekė</div>
			<select name="product">
<?php
		
	$product_name = json_decode(file_get_contents('data/product_name.json'), true );
	foreach ($product_name as $key => $value)
	{
		echo "<option value = \"$key\" >$value</option>";	
	}

?>
			</select>>
		<div>Vakarikštis likutis</div>
			<input type="number" name="VL">
		<div>Pagamintas kiekis</div>
			<input type="number" name="PG">
		<div>Parduotas kiekis</div>
			<input type="number" name="PR">
		<div>Sugadinta kiekis</div>
			<input type="number" name="SG">
		<div>Galutinis likutis</div>
			<input type="number" name="GL"><br>
		<input type="submit" value="Išsaugoti duomenis">
	</form>
	<a href="index.php">HOME</a>


	</br>

<!-- Atvaizduoja esamos dienos data tokiu formatu => "Trečiadienis 2017-11-22" -->
<script language="javascript" type="text/javascript">
var d = new Date();

var day=new Array("Sekmadienis","Pirmadienis","Antradienis","Trečiadienis","ketvirtadienis","Penktadienis","Šeštadienis");

var month=new Array("01","02","03","04","05","06","07","08","09","10","11","12");

document.write(day[d.getDay()] + " " + d.getFullYear() + "-" + month[d.getMonth()] + "-" + d.getDate());
</script>
<!--  -->

</body>
</html>