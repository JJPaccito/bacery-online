<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body style="text-align: center;">	
	<form method="POST" action="create.php">
		<div>Data</div>
			<input type="date" name="Date">
		<div>Prekė</div>
			<select name="product_id">
<?php	
	@include_once('app/database.php');
	$query = "SELECT `id`, `name` FROM `bakery_products` WHERE `deleted_at` IS NULL ORDER BY `name` ASC";
	$result = db_query($query);
	foreach ($result as $value) 
	{
		echo '<option value=' . $value['id'] . '>' . $value['name'] . '</option>';	
	}
?>
		</select>>
		<div>Vakarikštis likutis</div>
			<input type="number" name="inicial">
		<div>Pagamintas kiekis</div>
			<input type="number" name="produced">
		<div>Parduotas kiekis</div>
			<input type="number" name="sold">
		<div>Sugadinta kiekis</div>
			<input type="number" name="damaged">
		<div>Galutinis likutis</div>
			<input type="number" name="closed"><br>
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