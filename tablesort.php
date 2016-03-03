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
    	echo "<td>" . $row["name"] . "</td>";
    	echo "<td>" . $row["shame"] . "</td>";
    	echo "<td>" . $row["location"] . "</td>";
    	echo "</tr>";
	}
	$conn->close();
?>