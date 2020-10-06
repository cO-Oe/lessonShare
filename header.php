<header style="min-height:10%;">
	<div class="container-fluid topBar1">
	</div>

	<div class="container-fluid topBar2">
		<div class="row align-items-center" style="height:100%">
			<div class="col-2 centerCol center">
				<a class="headerA" href="/">
					Logo
				</a>
			</div>

			<div class="col-3 offset-1 centerCol center">
				<a class="headerA" href="lessonUpload.php">Upload
				</a>
			</div>

			<div class="col-3 centerCol center">
				Browse
			</div>

			<div class="col-3 centerCol center">
				<div class="row" style="width:100%;">

					<?php
						if($log_status == 0):
					?>
						<div class="col-6 centerCol center">
							<a class="headerA" href="login.php">
								Login
							</a>
						</div>
						<div class="col-6 centerCol center">
							<a class="headerA" href="register.php">
								Register
							</a>
						</div>
					<?php
						else:
					?>
						<div class="col-6 centerCol center">
							<p class="headerP">
								<?php
									echo $_SESSION["name"];
								?>
							</p>
						</div>
						<div class="col-6 centerCol center">
							<a class="headerA" href="logout.php">
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
	.topBar1 {
		width: 100%;
		height: 3vh;
		background-color: #6266D5
	}
	.topBar2 {
		width: 100%;
		height: 15vh;
		background-color: #888888;
		font-size: 150%;
		font-weight: 1000;
	}
	.centerCol {
		height: 100%;
		margin: auto;
		text-align: center;
	}
	.headerA {
		color: black;
		text-align: center;
		margin: auto;
	}
	.headerA:hover {
		color: white;
	}
	.headerP{
		color: black;
		text-align: center;
		margin: auto;
	}
</style>