<!DOCTYPE html>
<html>
<head>
  <title>DB Testing</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  
</head>

<body>
	<p>Testing my php</p>

<?php
/*fServer: msseed-server.database.windows.net,1433
SQL Database: msseed
User Name: msseed

PHP Data Objects(PDO) Sample Code:*/

/*try {
   $conn = new PDO ( "sqlsrv:server = tcp:msseed-server.database.windows.net,1433; Database = msseed", "msseed", "12345678ms!");
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
       print("successfully connect")
   }
   catch ( PDOException $e ) {
      print( "Error connecting to SQL Server." );
         die(print_r($e));
     }*/

    $host = "msseed-server.database.windows.net";
	$user = "msseed";
	$pwd = "12345678ms!";
	$db = "msseed";
	try{
		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		print_r("successfully connect")
	}
	catch(Exception $e){
		die(print_r($e));
	}
?>

</body>

</html>