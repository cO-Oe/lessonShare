<?php
	require_once("config.php");
	include_once("main.php");
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

		$cols = array("Account", "Password", "Verify", "Name", "School", "JobTitle", "Email");
		$data = array();



		$link = mysqli_connect(db_host, db_user, db_password, db_name);


		foreach ($cols as $c) {
			if( !(isset($_POST[$c]) && !empty($_POST[$c]))) {
				header("Location: register.php?error_code=101");
				exit(0);
			}

			if($c == "Account" || $c == "Email") {
				$sql = "SELECT `Id` FROM `Users` WHERE `".$c."` = '".$_POST[$c]."'";
				// echo $sql."<br/>";

				if($result = mysqli_query($link, $sql)) {
					if(mysqli_num_rows($result) != 0) {
						header("Location: register.php? error_code=103");
						exit(0);
					}
				}
				else {
					header("Location: register.php?error_code=104");
					exit(0);
				}
			}
			$data[$c] = mysqli_real_escape_string($link, trim($_POST[$c]));
		}

		// echo json_encode($data)."<br/>";

		if($data["Password"] != $data["Verify"])  {
			header("Location: register.php?error_code=102");
			exit(0);
		}


		$sql = "INSERT INTO `Users` (`Account`, `Password`, `Name`, `School`, `JobTitle`, `Email`) VALUES ('" . $data["Account"] . "', '" . $data["Password"] . "', '" . $data["Name"] . "', '" . $data["School"] . "', '" . $data["JobTitle"] . "', '" . $data["Email"] . "')";
		// echo $sql;

		if(mysqli_query($link, $sql)) {
			header('Location: index.php');
			exit(0);
		}
		else {
			header("Location: register.php?error_code=105");
			exit(0);
		}
	}
	else{
		echo "not post!";
	}

?>