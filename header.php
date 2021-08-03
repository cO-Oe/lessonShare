<header>
	<div class="container-fluid topBarA w-100 bg-white">
		<div class="row align-items-center h-100">
			<div class="col-2 offset-2 left">
				<a href="/">
					<img src="./assets/logo.png">
				</a>
			</div>
			<div class="col-8 left">
				<p class="banner"> Lessonshare Platform </p>
			</div>
		</div>
	</div>

	<div class="container-fluid topBarB w-100">
		<div class="row align-items-center h-100">
			<div class="col-1 offset-4 center">
				<a class="headerA" href="/">
					Home
				</a>
			</div>

			<div class="col-1 center">
				<a class="headerA" href="lessonUpload.php">
					Upload
				</a>
			</div>

			<div class="col-1 center">
				<a class="headerA" href="browse.php">
					Browse
				</a>
			</div>

			<div class="col-4 center">
				<div class="row w-100">

					<?php
						if($log_status == 0):
					?>
						<div class="col-2 offset-8 center">
							<a class="headerP" href="login.php">
								Login
							</a>
						</div>
						<div class="col-2 center">
							<a class="headerP" href="register.php">
								Register
							</a>
						</div>
					<?php
						else:
					?>
						<div class="col-2 offset-8 center">
							<p class="headerP">
								<?php
									echo $_SESSION["name"];
								?>
							</p>
						</div>
						<div class="col-2 center">
							<a class="headerP" href="logout.php">
								Logout
							</a>
						</div>
					<?php
						endif;
					?>

				</div>
			</div>
		</div>
	</div>
</header>

<style type="text/css">
	header {
		min-height: 10%;
	}
	.topBarA {
		height: 20vh;
	}
	.topBarB {
		background-color: black;
		font-size: 150%;
		font-weight: 400;
		height: 8vh;
	}
	.banner {
		font-size: 300%;
		font-weight: 500;
	}
	.headerA {
		color: white;
		text-align: center;
		margin: auto;
	}
	.headerP{
		color: white;
		text-align: center;
		margin: auto;
		font-size: 80%;
		font-weight: 200;
	}
	.headerA:hover, .headerP:hover {
		color: #0d6efd;
	}
</style>