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
		<div class="container" style="min-height:30%;">
			<div class="jumbotron loginBox">
				<form method="POST" action="loginPost.php" style="height: 50%">

					<div class="row justify-content-md-center">
						<div class="col-6 center">
							<h1> Login </h1>
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-10">
							<input class="roundRect center loginInput" name="account" type="text" placeholder="Account"/ autofocus>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-10">
							<input class="roundRect center loginInput" name="password" type="password" placeholder="Password"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-4">
							<button class="transparentButton" type='button' style="width: 100%;">	 <a href="/forgetPassword.php" style="color:white;text-decoration:underline;">
									Forgot Password
								</a>
							</button>
						</div>
						<div class="col-4">
							<button class="transparentButton" type='submit' style="width: 100%; color:white;text-decoration:underline;">
								Send
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
		margin-top:5%;
	}
</style>