<?php

echo "<h>Hello</h>";
include_once 'taskmodel.php';

// Get component name
////$component = $_POST['component'];
////$team = $_SESSION['s_team'];
$component = 'magic_stone';
$team = 'A';

$conn = connect();
if (!$conn->beginTransaction()) { return "FAIL"; }
try 
{
	$compose_function = getComposeFunction($conn, $component);
	if(!empty($compose_function)) 
	{
		for ($i = 1; $compose_function[0][$i] !== '0'; $i++) 
		{
			$material = $compose_function[0][$i];
			$i++;
			$amount = $compose_function[0][$i];
			$current_amount = getGroupOneResource($conn, $team, $material);
			if(empty($current_amount)) { return "FAIL"; }

			// Check amount
			if ($current_amount[0][0] < $amount) 
			{ 
				$conn->rollBack();
				return "FAIL";
			}
			else 
			{
				$value = $current_amount[0][0] - $amount;
				if (!updateGroupResource($conn, $team, $value, $material)) { return "FAIL"; }
			}
		}
	}
	else { return "FAIL"; }

	// Update Component
	$current_component = getGroupOneResource($conn, $team, $component);
	if(empty($current_component)) { return "FAIL"; }
	$value = $current_component[0][0] + 1;
	if (!updateGroupResource($conn, $team, $value, $component)) { return "FAIL"; }
	$conn->commit();
	return "TRUE";
}
catch (PDOException $e)
{
	$conn->rollBack();
	echo "Query Failed!\n\n";
	echo "DBA FAIL:" . $e->getMessage();
	return "FAIL";
};

// Try to update team resources
////$result = makeComponent($team, $component);

// Return TRUE or FALSE
//echo $result;
?>