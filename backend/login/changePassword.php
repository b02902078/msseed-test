<?php
session_start();
require_once "../taskmodel.php";
$conn = connect();

$pwd = $_POST['pwd'];

$sql = "UPDATE account SET password ='".$pwd."' WHERE pid='".$_SESSION['ID']."'";
$stmt = $conn->prepare($sql);
if ($stmt->execute()) { echo "SUCCESS"; }
else { echo "FAIL"; }
?>