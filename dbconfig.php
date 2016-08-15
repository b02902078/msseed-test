<?php
function connect() 
{
$host = "msseed-server.database.windows.net";
$user = "msseed";
$pwd = "12345678ms!";
$db = "msseed";

try  
        {  
            $serverName = "tcp:msseed-server.database.windows.net,1433";  
            $connectionOptions = array("Database"=>$db,  
                "Uid"=>$user, "PWD"=>$pwd);  
            $conn = sqlsrv_connect($serverName, $connectionOptions);  
            if($conn == false)  
                die(FormatErrors(sqlsrv_errors()));  
        }  
        catch(Exception $e)  
        {  
            echo("Error!");  
        } 
        echo("connect success"); 
	return $conn;
?>