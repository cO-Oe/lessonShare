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

			$.ajax({
				type:'POST',
				url: "/downloadPost.php",
				// dataType: "json",
				data: {
					"lesson": lesson
				}
			}).done(function(data) {
				if(data["error"] != null && data["error"] != "") {
					console.log("error:",data["error"]);
					alert("error:",data["error"]);
				}
				else {
					console.log("success",data);
				}
			}).fail(function(jqXHR, textStatus, errorThrown) {
				console.log("error!",textStatus,errorThrown);
				console.log("XHR: ",jqXHR);
			});
			
			

		}
	</script>

	<body>
		<div class="container" style="min-height:60%;">
			<table class="tabler table-striped" style="text-align:center; font-size:200%; margin: auto; margin-top:10%;">
				<thead>
					<th scope="col" style="width:10%;">ID</th>
					<th scope="col" style="width:25%;">Author</th>
					<th scope="col" style="width:25%">Lesson Name</th>
					<th scope="col" style="width:20%;">Download Time</th>
					<th scope="col" style="width:10%;"></th>

				</thead>
				<tbody>
					<?php
						$link = mysqli_connect(db_host, db_user, db_password, db_name);

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