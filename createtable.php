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
	
include_once 'taskmodel.php';

// Assumes database already exists.
$conn = connect();

$sql = "CREATE TABLE component_function(
			component VARCHAR(20),
			PRIMARY KEY(component),
			material1 VARCHAR(20),
			number1 INT,
			material2 VARCHAR(20),
			number2 INT,
			material3 VARCHAR(20),
			number3 INT,
			material4 VARCHAR(20),
			number4 INT,
			material5 VARCHAR(20),
			number5 INT
			)";

try{
	$conn->query($sql);
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Table created.</h3>";
?>