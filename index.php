<!-- sThe currentPage variable will tell the navbar which page is active-->
<?php $currentPage = "index"; ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php include("header.php");?>
		<div id="inner" class="container">
			<div class="text-center page-header">
				<h1>Alarm Shame</h1>
			</div>
			<div class="container">
				<?php include("carousel.php");?>
				<div class="body-paragraph index-paragraph">
					<p class="text-center">
						Ever wanted to make sure you will wake up? Well this is the app for you.
					</p>
				</div>
			</div>
		</div>
    	
		<?php include("footer.php");?>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
