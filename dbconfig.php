<?php
function connect() 
{
$host = "msseed-server.database.windows.net";
$user = "msseed";
$pwd = "12345678ms!";
$db = "msseed";

try {\r\n
$conn = new PDO ( "sqlsrv:server = tcp:msseed-server.database.windows.net,1433; Database = msseed", "msseed", $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
catch ( PDOException $e ) {
  print( "Error connecting to SQL Server." );  die(print_r($e));}

return $conn;
}
?>