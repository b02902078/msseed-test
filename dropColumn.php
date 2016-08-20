<?php  
require_once "getitems.php";
$team = getOccupyTeam();
if(!empty($team)) { echo $team[0][0]; }
?>