<?php
session_start();

include_once 'taskmodel.php';

// Get code
$code = $_POST['code'];

// Get occupying team
$team = getOccupyTeam($code);

// Return Chinese team name
if ($team == 'A') { echo "美洲"; }
else if ($team == 'B') { echo "歐洲"; }
else if ($team == 'C') { echo "亞洲"; }
else if ($team == 'D') { echo "非洲"; }
else { echo "無" }
?>