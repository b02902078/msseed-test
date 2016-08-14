<?php
session_start();
require_once 'dbconfig.php';
$conn = connect();

if (isset($_POST['email']) && isset($_POST['password'])) {

    // Receive POST params
	$email = $_POST['email'];
	$password = $_POST['password'];

    // Verify user by email and password
	$user = $this->getUserByEmailAndPassword($email, $password);

	// user is found
	if ($user != false) {

		$stmt = $this->conn->prepare("SELECT * FROM user WHERE p_id = ?");
		$stmt->bind_param("i", $user["p_id"]);
		if ($stmt->execute())
			$stmt->bind_result($_SESSION["p_id"], $_SESSION["name"], $_SESSION["nationality"], $_SESSION["room"], $_SESSION["team"]);
		$_SESSION['login'] = true;
		echo $_SESSION;
		$stmt->close();
	} else {
        // user is not found with the credentials
		echo "Login credentials are wrong. Please try again!";
	}
} else {
    // required post params is missing
	echo "Required parameters email or password is missing!";



	/******** FUNCTIONS ***********/

	/** Verify user by email and password **/
	public function getUserByEmailAndPassword($email, $password) { 
		$stmt = $this->conn->prepare("SELECT * FROM account WHERE email = ?"); 
		$stmt->bind_param("s", $email);

		$user = array();
		if ($stmt->execute()) {
			$stmt->bind_result($user["p_id"], $user["email"], $user["password"]);

			while($stmt->fetch()) {

                // check for password equality
				if ($user["password"] == $password) {
					return $user;
				}
			}
			if ($stmt->fetch == NULL) {  return NULL;  }
			$stmt->close();
		} else {
			return NULL;
		}
	}

	


}


?>
