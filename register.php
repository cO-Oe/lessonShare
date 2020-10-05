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
				<form method="POST" action="registerPost.php" style="height: 100%">

					<div class="row justify-content-md-center">
						<div class="col-6 center">
							<h1> Register </h1>
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-10">
							<input class="roundRect center loginInput" name="Account" type="text" placeholder="Account"/ autofocus>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-10">
							<input class="roundRect center loginInput" name="Password" type="password" placeholder="Password"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow">
						<div class="col-10">
							<input class="roundRect center loginInput" name="Verify" type="password" placeholder="Verify Password"/>
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-10">
							<input class="roundRect center loginInput" name="Name" type="text" placeholder="Name"/ >
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-10">
							<input class="roundRect center loginInput" name="School" type="text" placeholder="School Name"/ >
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-10">
							<input class="roundRect center loginInput" name="JobTitle" type="text" placeholder="Job Title"/ >
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-10">
							<input class="roundRect center loginInput" name="Email" type="text" placeholder="Email"/ >
						</div>
					</div>

					<div class="row justify-content-md-center formRow" >
						<div class="col-8">
							<button class="btn btn-Success"  type="submit" placeholder="Email" style="width:100%; font-size: 150%;">Submit</button>
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
		height:8%;
		/*padding-top: 10%;*/
		margin-top:4%;
	}
</style>