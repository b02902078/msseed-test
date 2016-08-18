<?php


include_once 'taskmodel.php';

// Get component name
////$component = $_POST['component'];
////$team = $_SESSION['s_team'];
$component = 'magic_stone';
$team = 'A';



// Try to update team resources
$result = makeComponent($team, $component);

// Return TRUE or FALSE
echo $result;
?>