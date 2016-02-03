<?php
	$currentPage = "shame";
?>
<!DOCTYPE html>
<html>
	<head>
		<!--<link rel="import" href="import.html"> if we have time-->
		<meta lang="en">
		<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
		<title>AlarmShame</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<?php include("header.php");?>
		<div id="inner" class="container">
			<div class="text-center page-header">
				<p class="text-center">THis is the shame page</p>
			</div>
			<div id="shame-table">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Shame</th>
							<th>Location</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tony</td>
							<td>Slept for ever</td>
							<td>Not here</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>




		<div id="footer">
			<p class="text-center">Alarm Shame, where 1 alarm will scare you to death</p>
		</div>

    	


    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>