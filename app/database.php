<?php



function db_connect ()
{
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'jo_bakery';


	$conn = mysqli_connect($servername, $username, $password, $dbname, 3307);
	if (!$conn) 
	{
		die("Could not connect");
	}
	return $conn;
}

function db_query(string $query)
{
	$conn = db_connect();
	$result = $conn->query($query);
	$conn->close();
	return $result;
}


$query = "SELECT * FROM `bakery_products`";

$result = db_query($query);
foreach ($result as $key => $value) 
{
	print_r($value);
}

/*if (!$conn) 
{
	die("Could not connect");
}

$result = $conn->query ('SHOW TABLES');

print_r($result);

foreach ($result as $key => $value) {
	print_r($value);
}

$conn->close();*/

