<?php

$new_data = $_POST;

$required_fields = ["DATA", "product", "VL", "PG", "PR", "SG", "GL"];

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
//
$existing_data = json_decode (file_get_contents('data/bakery-data.json'));
$existing_data = objectToArray($existing_data);

updateData($existing_data, $new_data);

file_put_contents ('data/bakery-data.json', json_encode($existing_data));




function objectToArray(stdClass $obj) : array
{
	// rekursine funkcija:
	$obj = (array) $obj;
	foreach ($obj as $key => &$value) {
		if (gettype($value) == 'object')
		{
			$value = objectToArray($value);
		}
	}
	return $obj;
}


function updateData(&$existing_data, $new_data)
{
	if(isset($existing_data[$new_data["DATA"]]))
	{

		if(isset($existing_data[$new_data["DATA"]][$new_data['product']] ) )
		{
			echo "ERROR";
		}
		else
		{
			$existing_data = createNewProduct($existing_data, $new_data);
		}
	}
	else
	{
		$existing_data[$new_data["DATA"]] = [];

		$existing_data = createNewProduct($existing_data, $new_data);
	}

}

function createNewProduct($existing_data, $new_data)
{
	$existing_data[$new_data["DATA"]][$new_data['product']] = [
			(int) $new_data["VL"],
			(int) $new_data["PG"],
			(int) $new_data["PR"],
			(int) $new_data["SG"],
			(int) $new_data["GL"]
		];
	return$existing_data;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">Duomenys sekmingai įvesti, galite grįžti atgal</a>

	</br>

<script language="javascript" type="text/javascript">
var d = new Date();

var day=new Array("Sekmadienis","Pirmadienis","Antradienis","Trečiadienis","ketvirtadienis","Penktadienis","Šeštadienis");

var month=new Array("01","02","03","04","05","06","07","08","09","10","11","12");

document.write(day[d.getDay()] + " " + d.getFullYear() + "-" + month[d.getMonth()] + "-" + d.getDate());
</script>

</body>
</html>