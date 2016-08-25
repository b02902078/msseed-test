<?php

require_once "/backend/taskmodel.php";
$conn = connect();

$team = $_POST['team'];
$resource = $_POST['resource'];
$value = isset($_POST['value']) ? $_POST['value'] : 0;

$sql = "UPDATE resource SET ".$resource."='".$value."' WHERE team='".$team."'";
$stmt = $conn->prepare($sql);

return $stmt->execute();

?>