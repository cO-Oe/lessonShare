<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<?php 
			include_once("config.php");
			include_once("main.php");
		?>
	</head>

	<?php
		require_once("header.php");
	?>

	<?php

		if($log_status == 0) {
			header("Location: login.php?error_code=110");
			exit(0);
		}
	?>

	<body>
		<div class="container" style="min-height:30%;">
			<div class="jumbotron loginBox">
				<form method="POST" enctype="multipart/form-data" action="lessonUploadPost.php" style="height: 50%">

					<div class="row justify-content-md-center formRow">
						<div class="col-6 center">
							<h1>
								Upload Lesson
							</h1>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-10">
							<input class="roundRect center loginInput" name="Name" type="text" placeholder="Lesson Name"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-10">
							<input class="roundRect center loginInput" name="Note" type="text" placeholder="Note"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-10 center">
							<input class="roundRect center loginInput" name="file" type="file"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-8 center">
							<button class="btn btn-Success" type="submit"  style="width:100%; font-size:150%;">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>

	<?php
		require_once("footer.php");
	?>

</html>

<style type="text/css">
	.loginBox{
		background-color: rgba(35, 90, 126, 0.7);
		margin-top: 5%;
	}
	.roundRect{
		height: 15%;
		width: 80%;
		margin: auto;
		/*border-radius: 10%;*/
		border-color: #FFFFFF;
		background-color: rgba(35,90,126,0.7);
		color: white;
	}
	.loginInput{
		height:100%;
		font-size: 24px;
	}
	.formRow {
		height:12%;
		/*padding-top: 10%;*/
		margin-top:4%;
	}
</style>