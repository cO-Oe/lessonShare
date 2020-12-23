<html>
	<head>
		<?php 
			include_once("../config.php");
			include_once("../main.php");
		?>
	</head>
	<div class="container">

		<div class="row">
			<div class="col-4">
				<a href="count.php?vote=1"> A </a>
			</div>

			<div class="col-4">
				<a href="count.php?vote=2"> B </a>
			</div>

			<div class="col-4">
				<a href="count.php?vote=3"> C </a>
			</div>
		</div>

		<?php
			$link = mysqli_connect(db_host, db_user, db_password, db_name);

			$a = 0;
			$b = 0;
			$c = 0;

			$sql = "select count(*) from `Votes` WHERE `vote` = 1";

			if($result = mysqli_query($link, $sql)) {
				$a = $result -> fetch_assoc()["count(*)"];
			}
			$sql = "select count(*) from `Votes` WHERE `vote` = 2";

			if($result = mysqli_query($link, $sql)) {
				$b = $result -> fetch_assoc()["count(*)"];
			}

			$sql = "select count(*) from `Votes` WHERE `vote` = 3";

			if($result = mysqli_query($link, $sql)) {
				$c = $result -> fetch_assoc()["count(*)"];
			}
		?>

		<div class="row">
			<div class="col-4">
				<?php
					echo $a;
				?>
			</div>
			<div class="col-4">
				<?php
					echo $b;
				?>
			</div>
			<div class="col-4">
				<?php
					echo $c;
				?>
			</div>
		</div>
		
	</div>
</html>

<script>
</script>