<?php
	session_start();
	$member = "";
	$log_status = 0;
	include_once('/tools/logout.php');
	// echo json_encode($_SESSION);
	if(isset($_SESSION['userId'])){
		$nowTimeDel = time() - $_SESSION['userTimestamp'];
		// echo time()." - ".$_SESSION['userTimestamp'];
		if($nowTimeDel > 9000000){
			logout();
		}
		else{
			$_SESSION['userTimeStamp'] = time();
		}

	}
	console.log("Hi");
	$link = mysqli_connect(db_host, db_user, db_password, db_name);
	if (!$link) {
		header('Location: error.php?error_code=102');
		exit(0);
	}
	if(isset($_SESSION['userId'])){
		$userId = $_SESSION['userId'];
		$account = $_SESSION['account'];
		$username = $_SESSION['name'];
		$log_status = 1;

		// **** unread message
	}
	// **** online user

?>
