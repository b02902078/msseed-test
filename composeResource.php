<?php

echo "<h>Hello</h>";
include_once 'taskmodel.php';

// Get component name
////$component = $_POST['component'];
////$team = $_SESSION['s_team'];
$component = 'magic_stone';
$team = 'A';

$conn = connect();
if ($conn->beginTransaction())
	echo "success start\n\n";
else
	echo "fail start\n\n";
try 
	{
		$compose_function = getComposeFunction($conn, $component);
		echo $compose_function[0][1];
		if(!empty($compose_function)) 
		{
			for ($i = 1; $compose_function[0][$i] !== '0'; $i++) 
			{
				$material = $compose_function[0][$i];
				echo "<p>".$material."</p>";
				$i++;
				$amount = $compose_function[0][$i];
				echo "<p>".$amount."</p>";
				$current_amount = getGroupOneResource($conn, $team, $material);
				echo "<p>".$current_amount[0][0]."</p>";}}
				/*if ($current_amount < $amount) 
				{ 
					$conn->rollBack();
					echo false;
				}
				else {
					$value = $current_amount - $amount;
					updateGroupResource($conn, $team, $value, $material);
				}
			}
		}
		$current_component = getGroupOneResource($conn, $team, $component);
		$value = $current_component + 1;
		updateGroupResource($conn, $team, $value, $component);
		$conn->commit();
		echo true;*/
	}
	catch (PDOException $e)
	{
		$conn->rollBack();
		echo "Query Failed!\n\n";
		echo "DBA FAIL:" . $e->getMessage();
	};

// Try to update team resources
////$result = makeComponent($team, $component);

// Return TRUE or FALSE
//echo $result;
?>