<?php
	require_once("config.php");
	include_once("main.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		if (isset($_POST['account']) && !empty($_POST['account']) && isset($_POST['password']) && !empty($_POST['password'])) {
			$link = mysqli_connect(db_host, db_user, db_password, db_name);
			if (!$link) {
				header('Location: error.php?error_code=102');
				exit(0);
			}

			$account = mysqli_real_escape_string($link, trim($_POST['account']));
			$password = mysqli_real_escape_string($link, trim($_POST['password']));

			// echo $account;
			// echo "<br/>";
			// echo $password;

			$sql = "SELECT * from `Users` WHERE `Account` = '" . $account . "' AND `Password` = '" . $password . "'";

			// echo $sql;

			if($result = mysqli_query($link, $sql)) {
				if(mysqli_num_rows($result) != 1) {
					header('Location: login.php? status=1');
					exit(0);
				}
				else {
					$nowUser = mysqli_fetch_assoc($result);
					$_SESSION['userId'] = $nowUser["Id"];
					$_SESSION['account'] = $nowUser["Account"];
					$_SESSION["name"] = $nowUser["Name"];
					$_SESSION["userTimestamp"] = time();
					header('Location: index.php');
					exit(0);
				}
			}
		}
		else {
			header('Location: login.php? status=1');
			exit(0);
		}
	}
	else {
		echo "not post!";
	}
?>