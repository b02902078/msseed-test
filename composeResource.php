<?php
session_start();

include_once 'taskmodel.php';

// Get component name
/*$component = $_POST['component'];
$team = $_SESSION['s_team'];
$trans_type = $_POST['transtype'];*/
$component = "transportation";
$team = 'A';
$trans_type = "aladdin_carpet";



// Try to update team resources
$result = makeComponent($team, $component, $trans_type);

// Return TRUE or FALSE
echo $result;
?>