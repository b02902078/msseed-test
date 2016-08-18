<?php

session_start();

include_once 'taskmodel.php';

// Get component name
////$component = $_POST['component'];
////$team = $_SESSION['s_team'];
$component = 'magic_stone';
$team = 'A';

$conn = connect();
	$conn->beginTransaction();
	try 
	{
		$compose_function = getComposeFunction($conn, $component);
		if(!empty($compose_function)) 
		{
			for ($i = 1; $compose_function[0][i] != '0'; $i++) 
			{
				$material = $compose_function[0][i];
				i++;
				$amount = $compose_function[0][i];
				$current_amount = getGroupOneResource($conn, $team, $material);
				if ($current_amount < $amount) 
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
		echo true;
	}
	catch (PDOException $e)
	{
		print "Query Failed!\n\n";
		print "DBA FAIL:" . $e->getMessage();
	};

// Try to update team resources
////$result = makeComponent($team, $component);

// Return TRUE or FALSE
//echo $result;
?>