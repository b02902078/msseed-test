<?php
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/

echo "in create table file";	
include_once 'dbconfig.php';


// Assumes database already exists.
$conn = connect();
print_r($conn);
/*
$sql = "CREATE TABLE account(
			p_id INT NOT NULL AUTO_INCREMENT, 
			PRIMARY KEY(p_id),
			email VARCHAR(30),
			password VARCHAR(30)
			)";

try{
	$conn->query($sql);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";

$sql = "CREATE TABLE user(
			p_id INT NOT NULL, 
			PRIMARY KEY(p_id),
			name VARCHAR(30),
			nationality VARCHAR(30),
			room VARCHAR(30),
			team VARCHAR(30)
			)";

try{
	$conn->query($sql);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";*/
?>
