<!DOCTYPE html>
<html>
<head>
	<title>Nauji duomenys</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	</form>
	<a href="index.php">Įvesti naujus duomenis</a>
</head>
</body>
</html>
<?php
$new_data = $_POST;
$required_fields = ["Date", "product_id", "inicial", "produced", "sold", "damaged", "closed"];
$validData = true;
//apsaugos tikrinanti ar visi duomenys yra
foreach ($required_fields as $value) {
	if (!isset($new_data[$value]) || empty($new_data[$value]))
	{
		$validData = false;
		echo "Nerastas parametras: $value <br>";
	}
}
if (!$validData)
	return;
@include_once('app/database.php');
$query = db_insertQuery('bakery_products_history',$new_data, true);
$result = db_query($query);