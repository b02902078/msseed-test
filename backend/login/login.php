<?php
    session_start(); 
    
    require_once("../backend/taskmodel.php");
    $conn = connect();
    
    $id = isset($_POST['email']) ? $_POST['email'] : null;
    $pw = isset($_POST['password']) ? $_POST['password'] : null;
    $sql = "SELECT * FROM account where email = '$id'";
    $stmt = $conn->query($sql);
	$row = $stmt->fetchAll(PDO::FETCH_NUM);
    
	echo "id: ".$id."<br>";
	echo "pw: ".$pw."<br>";
	echo "row[0][0]: ".$row[0][0]."<br>";
	echo "row[0][1]: ".$row[0][1]."<br>";
	echo "row[0][2]: ".$row[0][2]."<br>";
	echo "row[0][3]: ".$row[0][3]."<br>";
	
    if($id !== null && $pw !== null && $row[0][1] == $id && $row[0][2] == $pw)
    {
        $_SESSION['ID'] = $row[0][0];
        if($row[0][3] == '1')
        {
			echo "normal uesr<br>";
            $_SESSION['authority'] = 1;
        }
        elseif($row[0][3] == '2')
        {
            $_SESSION['authority'] = 2;
			echo "隨輔<br>";
        }
        elseif($row[0][3] == '3')
        {
            $_SESSION['authority'] = 3;
			echo "Admin<br>";
        }
        header('Location: ../../index.php');
    }
    else
    {
        echo "wrong password!!";
    }
?>
