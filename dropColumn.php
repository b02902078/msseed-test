<?php  
require_once "getitems.php";
$team = getOccupyTeam('y997V');
if(!empty($team)) { echo $team; }
?>