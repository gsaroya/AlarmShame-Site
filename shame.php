<!-- The currentPage variable will tell the navbar which page is active-->
<?php $currentPage = "shame"; ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php include("header.php");?>
		<div id="inner" class="container">
			<div class="text-center page-header">
				<p class="text-center">This is the shame page</p>
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