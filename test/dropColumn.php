<?php  
require_once "../backend/taskmodel.php";
$team = getUserInfo('3141');
if(!empty($team)) { echo $team[0][0]; }
?>