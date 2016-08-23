<?php  
require_once "getitems.php";
$team = getUserInfo('3141');
if(!empty($team)) { echo $team[0][0]; }
?>