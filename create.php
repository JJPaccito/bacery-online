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

$query = "INSERT INTO `bakery_products_history` (
		`Date`, 
		`product_id`,
		`inicial`, 
		`produced`, 
		`sold`, 
		`damaged`, 
		`closed`) 
		VALUES (
		".$new_data['Date'].",
		".$new_data['product_id'].",
		".$new_data['inicial'].",
		".$new_data['produced']. ",
		".$new_data['sold']. ",
		".$new_data['damaged'].",
		".$new_data['closed'].")";
die($query);

$result = db_query($query);

print_r($result);
;
/*//
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
*/
