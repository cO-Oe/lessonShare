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

	<body>
		<div class="container">
			<div class="jumbotron loginBox my-5">
				<form method="POST" action="loginPost.php" class="h-50">

					<div class="row justify-content-md-center">
						<div class="col-6 center">
							<h1> Welcome </h1>
						</div>
					</div>

					<div class="row justify-content-md-center formRow mt-5" >
						<div class="col-8">
							<input class="center loginInput form-control" name="account" type="text" placeholder="Account"/ autofocus>
						</div>
					</div>

					<div class="row justify-content-md-center formRow mt-4">
						<div class="col-8">
							<input class="center loginInput form-control" name="password" type="password" placeholder="Password"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow mt-5">
						<div class="col-4">
							<button class="btn btn-primary w-100 shadow" type='submit'>
								Login
							</button>
						</div>
					</div>

					<div class="row justify-content-md-center formRow mt-2">
						<div class="col-4">
							<button class="transparentButton w-100" type='button'>	 <a href="/forgetPassword.php" style="color:black;text-decoration:underline;">
									Forgot Password
								</a>
							</button>
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
	.loginBox{
		background-color: white;
	}
	.loginInput{
		height:100%;
		width: 60%;
		font-size: 18px;
		text-align: left;
	}
	.formRow {
		height:12%;
	}
	.btn {
		color: white;
	}
</style>