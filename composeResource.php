<?php
session_start();

include_once 'taskmodel.php';

// Get component name
/*$component = $_POST['component'];
$team = $_SESSION['s_team'];
$trans_type = $_POST['transtype'];*/
$isTrans = false;
$team = 'A';
$component = "magic_stone";



// Try to update team resources
$result = makeComponent($team, $component, $isTrans);

// Return TRUE or FALSE
echo $result;
?>