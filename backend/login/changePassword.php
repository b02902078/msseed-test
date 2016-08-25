<?php
session_start();
require_once "../taskmodel.php";
$conn = connect();

if (!isset($_POST['pwd1']) || !isset($_POST['pwd2'])) { return "欄位空白"; }

$pwd = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
if ($pwd != $pwd2) { return "兩欄位不同" }

$sql = "UPDATE account SET password ='".$pwd."' WHERE pid='".$_SESSION['ID']."'";
$stmt = $conn->prepare($sql);
if ($stmt->execute()) { return "SUCCESS"; }
else { return "FAIL"; }
?>