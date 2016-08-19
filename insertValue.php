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

$sql = "INSERT INTO component_function(component, material1, number1, material2, number2, material3, number3, material4, number4, material5, number5)
	VALUES('magic_stone', 'magic_powder', 30, 'light', 18, 'imagine', 36, '0', 0, '0', 0),
	('control_panel', 'metal', 24, 'light', 21, 'electron', 18, '0', 0, '0', 0),
	('seat', 'cloth', 12, 'plastic', 30, 'ergonomic', 24, '0', 0, '0', 0),
	('wheel', 'plastic', 15, 'screw', 24, 'shaft', 30, '0', 0, '0', 0),
	('rope', 'flax', 30, 'light', 21, 'water', 24, '0', 0, '0', 0),
	('cypress', 'water', 30, 'light', 18, 'seed', 10, 'air', 12, '0', 0),
	('propeller', 'plastic', 21, 'shaft', 21, 'metal', 12, 'screw', 18, '0', 0),
	('door', 'metal', 15, 'screw', 15, 'fire', 12, 'ergonomic', 21, '0', 0),
	('jet', 'metal', 9, 'screw', 21, 'fire', 15, 'electron', 24, '0', 0),
	('gun', 'metal', 12, 'air', 15, 'fire', 9, 'screw', 9, 'electron', 18)";

try{
	if ($conn->query($sql))
		echo "Success";
}
catch(Exception $e){
	print_r($e);
}

echo "<h3>Value Inserted.</h3>";
?>