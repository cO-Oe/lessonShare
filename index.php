<html>

	<head>
		<link rel="stylesheet" type="text/css" href="styles/style.css">

		<?php
			require_once("config.php");
			require_once("main.php");
		?>

	</head>

	<?php
		require_once("header.php");
	?>

	<body>

		<div class="container-fluid" style="min-height:50vh;">
			<div class="row justify-content-md-center" style="height:100%;">
				<div class="col-3 center" style="margin:auto;">
					<h1>
						Hello
						<?php
							if($log_status == 1){
								echo $_SESSION["name"];
							}
							else {
								echo " Guest";
							}
						?>
					</h1>

				</div>
			</div>
		</div>

	</body>

	<?php
		require_once("footer.php");
	?>
</html>