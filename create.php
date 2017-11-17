<?php

$new_data = $_POST;

$existing_data = json_decode (file_get_contents('data/bakery-data.json')) ;

$existing_data = objectToArray($existing_data);

updateData($existing_data, $new_data);

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
	if(isset($existing_data [ $new_data [ 'data' ] ] ) )
	{
		echo "YES";
	}
	else
	{
		echo "NO";
	}
}

?>