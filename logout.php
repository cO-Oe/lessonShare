<?php
	include_once('main.php');
	include_once('isLogin.php');
	include_once('tools/logout.php');

	if ($log_status !== 0) {
		logout();
	} else {
		header('Location: error.php?error_code=104');
		exit(0);
	}
?>