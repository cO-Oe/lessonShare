<?php
	require_once("config.php");
	require_once("main.php");
	if($_SERVER["REQUEST_METHOD"] === "POST") {

		if($log_status == 0) {
			header("Location: login.php?error_code=110");
			exit(0);
		}

		echo json_encode($_POST);
		if ($_FILES['file']['error'] === UPLOAD_ERR_OK){
			echo '檔案名稱: ' . $_FILES['file']['name'] . '<br/>';
		  	echo '檔案類型: ' . $_FILES['file']['type'] . '<br/>';
		  	echo '檔案大小: ' . ($_FILES['file']['size'] / 1024) . ' KB<br/>';
		  	echo '暫存名稱: ' . $_FILES['file']['tmp_name'] . '<br/>';

		  	if($_FILES['file']['type'] != "application/pdf") {
		  		header("Location: lessonUpload.php?status=105");
		  		exit();
		  	}

		  	$link = mysqli_connect(db_host, db_user, db_password, db_name);
		  	

		  	$sql = "SHOW TABLE STATUS LIKE 'Lessons'";
		  	echo $sql."<br/>";

		  	$nextId = 1;

		  	if($result = mysqli_query($link, $sql)) {
		  		$row = $result->fetch_assoc();
		  		echo json_encode($row);
		  		$nextId = $row['Auto_increment'];
		  	}
		  	else {
		  		header("Location: error.php?stauts=102");
		  	} // sometime got bug when auto_increment crash

		  	// $sql = "select count(*) from `Lessons`";

		  	// $nextId = 1;
		  	// if($result = mysqli_query($link, $sql)) {
		  	// 	$row = $result->fetch_assoc();
		  	// 	// echo json_encode($row);
		  	// 	$nextId = $row["count(*)"]+1;
		  	// }
		  	// else {
		  	// 	header("Location: error.php?status=102");
		  	// }

		  	$file = $_FILES['file']['tmp_name'];
		  	$dest = "pdf/".$nextId.".pdf";


		  	if( move_uploaded_file($file, $dest) ) {
		  		echo "done! ".$file." -> ".$dest."<br />";
		  	}
		  	else {
		  		echo "oh no";
		  	}

		  	$sql = "INSERT INTO `Lessons` (`UserId`, `UserName`, `Name`, `Status`, `Src`, `Note`) VALUES (" . $userId . ", '".$username."' , '".$_POST["Name"]."', 1, '".$dest."', '".$_POST["Note"]."')";
		  	echo $sql;

		  	if($result = mysqli_query($link, $sql)) {
		  		header("Location: index.php?status=111");
		  	}
		  	else {
		  		// header("Location: error.php?status=102");
		  	}


		}
		else {
			header("Location: lessonUpload.php?status=101");
		}
	}
	else {
		echo "Not Post!";
	}
?>

<!-- SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_name = 'Users' AND table_schema = DATABASE( ) ; -->