<!-- The currentPage variable will tell the navbar which page is active-->
<?php
	$currentPage = "shame";
	$servername = "localhost";
	$username = "root";
	$password = "potato";
	$dbname = "SHAMES";
	/* ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Name: " . $row["name"]. " - Shame: " . $row["shame"]. " " . $row["location"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();*/
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php include("header.php");?>


		<div id="inner" class="container">
			<div class="text-center page-header">
				<h1>This is the shame page</h1>
			</div>
			<div id="shame-table">
				<table class="table table-striped table-hover">
					<?php include("tablesort.php");?>
				</table>
			</div>
			<?php
				echo 'Page: ';
				if ($numPages <= 10) {
					for ($i = 1; $i <= $numPages ; $i++) {
					    echo '<a href="./shame.php?sorting='. $current_sort.'&field='.$field.'&page='.$i.'">'.$i.'</a>&nbsp;';
					}
				} else {
					for ($i = 1; $i <= 10 ; $i++) {
					    echo '<a href="./shame.php?sorting='. $current_sort.'&field='.$field.'&page='.$i.'">'.$i.'</a>&nbsp;';
					}
					echo '...&nbsp;<a href="./shame.php?sorting='. $current_sort.'&field='.$field.'&page='.$numPages.'">'.$numPages.'</a> ';
				}
			?>
		</div>


		<?php include("footer.php");?>


    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
