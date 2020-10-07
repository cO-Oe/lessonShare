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
	<script>
		function downloadPdf(lesson) {

			var errorLog = ""
			$.ajax({
				type:'POST',
				url: "/downloadPost.php",
				dataType: "json",
				data: {
					"lesson": lesson
				}
			}).done(function(data) {
				console.log(typeof(data),data);
				if("error" in data){
					alert("Error: " + data["error"]);
				}
				else {

					function download(dataurl, filename) {
					  var a = document.createElement("a");
					  a.href = dataurl;
					  a.setAttribute("download", filename);
					  a.click();
					}

					download(data["src"], data["name"]);

					alert("Success! Your last quota is " + data["quota"]);
				}
				// location.reload();
			}).fail(function(jqXHR, textStatus, errorThrown) {
				console.log("error!",textStatus,errorThrown);
				console.log("XHR: ",jqXHR);
			});	
		}
	</script>

	<body>
		<div class="container" style="min-height:60%;">
			<h1 style="text-align:center; margin: auto; margin-top:5%;">
				Lesson List
			</h1>
			<?php
				if($log_status != 0):
			?>
			<h2 style="text-align:center; margin: auto; margin-top:5%;">
				Your Quota:
				<?php
					$link = mysqli_connect(db_host, db_user, db_password, db_name);
					$sql = "SELECT * FROM `Users` WHERE `Id` = ".$userId;
					if($result = mysqli_query($link, $sql)) {
						if(mysqli_num_rows($result) != 1) {
							header("Location: error.php?status=106");
							exit(0);
						}
						$user = mysqli_fetch_assoc($result);
					}
					else {
						header("Location: error.php?status=102");
						exit(0);
					}
					echo " ".$user["Quota"];
				?>
			</h2>
			<?php
				endif;
			?>
			<table class="tabler table-striped" style="text-align:center; font-size:200%; margin: auto; margin-top:5%;">
				<thead>
					<th scope="col" style="width:10%;">ID</th>
					<th scope="col" style="width:25%;">Author</th>
					<th scope="col" style="width:25%">Lesson Name</th>
					<th scope="col" style="width:20%;">Download Time</th>
					<th scope="col" style="width:10%;"></th>

				</thead>
				<tbody>
					<?php
						

							$sql = "select * from `Lessons`";

							$data = array();

							if($result = mysqli_query($link, $sql)) {
								while($row = $result->fetch_assoc()) {
									// echo json_encode($row);
									array_push($data,$row);
								}
							}
							else {
								header("Location: error.php?status=102");
							}
							foreach($data as $row){
								echo "<tr>";
								echo "<th scope=\"row\">".$row["Id"]."</th>";
								echo "<td>".$row["UserName"]."</td>";
								echo "<td>".$row["Name"]."</td>";
								echo "<td>".$row["DownloadTime"]."</td>";
								echo "<td><button type=\"button\" onclick=\"downloadPdf(". $row["Id"] .")\">Download</button></td>"; 
								echo "</tr>";
							}
					?>

				</tbody>
			</table>
		</div>
	</body>

	<?php
		require_once("footer.php");
	?>

</html>

<style type="text/css">
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	}
</style>