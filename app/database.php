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

	$conn->set_charset('utf8mb4');
	return $conn;
}
function db_query(string $query)
{
	$conn = db_connect();
	$result = $conn->query($query);
	$conn->close();
	return $result;
}
// duomenu ikelimas 
function db_insertQuery(string $tableName, array $data, bool $uuid = false) : string
{
	if ($uuid)
		$data['id'] = uniqid(36);
	$keys = $values = '';
	foreach ($data as $key => $value) {
		$keys .="`$key`, ";
		$values .="'$value', ";
	}
	$keys = rtrim($keys, ", ");
	$values = rtrim($values, ", ");
	$query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";
	return($query);
}