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
						<?php
						    // Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
								if ($conn->connect_error) {
							    	die("Connection failed: " . $conn->connect_error);
								} 
								$sql = "SELECT name,shame,location FROM shames";
								$result = $conn->query($sql);
						    while($row = $result->fetch_assoc()) {
					    		echo "<tr>";
	    				    	echo "<th>" . $row["name"] . "<th>";
	    				    	echo "<th>" . $row["shame"] . "<th>";
	    				    	echo "<th>" . $row["location"] . "<th>";
	    				    	echo "</tr>";
	    					}
	    					$conn->close();
						?>
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