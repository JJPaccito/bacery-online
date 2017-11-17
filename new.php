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
				<option value="1">Varškės</option>
				<option value="2">Aguoninė</option>
				<option value="3">Duona balta</option>
				<option value="4">Duona juoda</option>
				<option value="5">Duona ruginė</option>
			</select>>
		<div>Vakarikštis likutis</div>
			<input type="number" name="VL">
		<div>Pagamintas kikis</div>
			<input type="number" name="PG">
		<div>Parduotas kiekis</div>
			<input type="number" name="PR">
		<div>Sugadinta kiekis</div>
			<input type="number" name="SG">
		<div>Galutinis likutis</div>
			<input type="number" name="GL"><br>
		<input type="submit" value="Išsaugoti duomenis">
		<!--
		<th>VL</th>
		<th>PG</th>
		<th>PR</th>
		<th>SG</th>
		<th>GL</th>
		-->
	</form>
	<a href="index.php">HOME</a>
</body>
</html>