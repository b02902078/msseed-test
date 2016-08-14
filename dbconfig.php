<?php
function connect() 
{
$host = "msseed-server.database.windows.net";
$user = "msseed";
$pwd = "msseed";
$db = "12345678ms!";
try{
	$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
	die(print_r($e));
}
return $conn;
}
?>