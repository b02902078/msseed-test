<?php
function connect() 
{
$host = "msseed-server.database.windows.net";
$user = "msseed";
$pwd = "12345678ms!";
$db = "msseed";

// DB connection info

	try{
		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	echo ("successfully connect");
	return $conn;
?>