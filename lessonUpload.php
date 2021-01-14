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
		<div class="container">
			<div class="jumbotron my-5 bg-white">
				<form method="POST" enctype="multipart/form-data" action="lessonUploadPost.php" class="h-50">

					<div class="row justify-content-md-center formRow">
						<div class="col-6 center">
							<h1>
								Upload Lesson
							</h1>
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-5">
						<div class="col-10">
							<input class="center loginInput w-75" name="Name" type="text" placeholder="Lesson Name"/>
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-4">
						<div class="col-10">
							<input class="center loginInput w-75" name="Note" type="text" placeholder="Note"/>
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-4 md-2">
						<div class="col-6 center">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="file" id="file" required>
								<label class="custom-file-label" for="file">Choose file</label>
							</div>
						</div>
						<script>
							$('input[type="file"]').change(function(e){
								var fileName = e.target.files[0].name;
								$('.custom-file-label').html(fileName);
							});
						</script>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-5">
						<div class="col-8 center">
							<button class="btn btn-Primary w-75 shadow" type="submit">Submit</button>
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
	.container {
		min-height: 30%;
	}
	.jumbotron {
		padding-left: 10%;
		padding-right: 10%;
	}
	.loginInput{
		height:100%;
		font-size: 18px;
		text-align: left;
		padding: 1%;
	}
	.formRow {
		height:12%;
	}
	.btn {
		font-size: 150%;
	}
</style>