<!-- The currentPage variable will tell the navbar which page is active-->
<?php $currentPage = "about"; ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php include("header.php");?>

		<div id="inner" class="container">
			<div class="text-center page-header">
				<h1>About</h1>
			</div>

			<div class="biography container" id="tony">
				<img src="./img/tony.jpg" class="img-responsive img-circle">
				<p>Tony's information</p>
			</div>

			<div class="biography container" id="gagan">
				<img src="./img/gagan.jpg" class="img-responsive img-circle">
				<p>Gagan's information</p>
			</div>
		</div>

		<?php include("footer.php");?>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
