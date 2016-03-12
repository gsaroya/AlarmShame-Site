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
			<ul class='pagination'>
				<?php
					$first = 1;
					$last = 5;
					if ($numPages < 5) {
						$last = $numPages;
					}	elseif ($page > 3 && $page < $numPages - 1) {
						$first = $page - 2;
						$last = $page + 2;
					} elseif ($page >= $numPages - 1) {
						$first = $numPages - 4;
						$last = $numPages;
					}
					$link_pre = '<a href="./shame.php?sorting='. $current_sort.'&field='.$field.'&page=';
					echo '<li class="">'. $link_pre . '1>&laquo;</a></li>';
					for ($i = $first; $i <= $last ; $i++) {
					    echo '<li class="">'. $link_pre . $i . '>' . $i . '</a></li>';
					}
					echo '<li class="">'. $link_pre . $numPages . '>&raquo;</a></li>';
				?>
			</ul>
		</div>


		<?php include("footer.php");?>


    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
