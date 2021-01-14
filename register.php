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
			<div class="jumbotron bg-white my-5">
				<form method="POST" action="registerPost.php" class="h-100">

					<div class="row justify-content-md-center">
						<div class="col-6 center">
							<h1> Register </h1>
						</div>
					</div>

					<div class="row  justify-content-md-center form-group formRow mt-5" >
						<label for="Account" class="col-1 col-form-label right px-0">Account</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" id="Account" name="Account" type="text" placeholder="Account"/ autofocus>
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-0">
						<label for="Password" class="col-1 col-form-label right px-0">Password</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" name="Password" type="password" placeholder="Password"/>
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-0">
						<label for="Verify" class="col-1 col-form-label right px-0">Verify</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" name="Verify" type="password" placeholder="Verify Password"/>
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-0" >
						<label for="Name" class="col-1 col-form-label right px-0">Name</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" name="Name" type="text" placeholder="Name"/ >
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-0" >
						<label for="School" class="col-1 col-form-label right px-0">School</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" name="School" type="text" placeholder="School Name"/ >
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-0" >
						<label for="JobTitle" class="col-1 col-form-label right px-0">JobTitle</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" name="JobTitle" type="text" placeholder="Job Title"/ >
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-0" >
						<label for="Email" class="col-1 col-form-label right px-0">Email</label>
						<div class="col-11">
							<input class="form-control center loginInput w-75" name="Email" type="text" placeholder="Email"/ >
						</div>
					</div>

					<div class="row justify-content-md-center form-group formRow mt-5" >
						<div class="col-8">
							<button class="btn btn-primary w-100 shadow"  type="submit">Submit</button>
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
		padding-left: 20%;
		padding-right: 20%;
	}
	.loginInput{
		height:75%;
		font-size: 18px;
		text-align: left;
	}
	.formRow {
		height:8%;
	}
	.btn {
		font-size: 150%;
	}
</style>