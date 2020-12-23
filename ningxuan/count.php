<?php
	if(isset($_GET['vote']) && !empty($_GET['vote'])) {
		include_once ('../config.php');
		include_once ('../isLogin.php');

		if($_GET['vote'] != 1 && $_GET['vote'] != 2 && $_GET['vote'] != 3) {
			// ban
			header("Location: front1.php?error=1");
			exit(0);
		}

		

		$link = mysqli_connect(db_host, db_user, db_password, db_name);

		$sql = "INSERT INTO `Votes` (`Vote`) VALUES (" . $_GET['vote'] . ")";


		echo "$sql";

		if($result = mysqli_query($link, $sql)) {
			header("Location: front1.php?");
			exit(0);
		}
		else {
			// fail
			header("Location: front1.php?error=$sql");
			exit(0);
		}

	}
?>