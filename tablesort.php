<?php
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// The default sorting
	$field='name';
	$sort='ASC';
	$page = 1;

	if(isset($_GET['sorting'])) {
		$sort = mysql_real_escape_string($_GET['sorting']) == 'DESC' ? 'DESC' : 'ASC';
	}

	if(isset($_GET['name'])) {
		$field = mysql_real_escape_string($_GET['sorting']);
		if($field != 'name' || $field != 'shame' || $field != 'location') {
			$field = 'name';
		}
	}

	// fetch the page count
	$limit = 10;
	$result_count = $conn->query("select count(1) FROM shames;");
	$total = 0;
	while($row = $result_count->fetch_assoc()) {
		$total = $row["count(1)"];
	}
	$numPages = floor($total/$limit);
	if (($total <= $limit) || ($total % $limit)) {
		++$numPages;
	}

	if(isset($_GET['page'])) {
		$page = ($_GET['page']);
		if($page < 1 ) {
			$page = 1;
		} ($page > $numPages) {
			$page = $numPages;
		}
	}

	$sql = "SELECT name,shame,location FROM shames ORDER BY $field $sort";
	$result = $conn->query($sql);
	echo'<thead>
		<tr><th><a href="./shame.php?sorting='.$sort.'&field=name">Name</a></th>
		<th><a href="./shame.php?sorting='.$sort.'&field=shame">Shame</a></th>
		<th><a href="./shame.php?sorting='.$sort.'&field=location">Location</a></th></tr>
	<thead><tbody>';
  while($row = $result->fetch_assoc()) {
		echo "<tr>";
    	echo "<td>" . $row["name"] . "</td>";
    	echo "<td>" . $row["shame"] . "</td>";
    	echo "<td>" . $row["location"] . "</td>";
    	echo "</tr>";
	}

	echo $numPages . " pages";

	echo'</tbody>';
	$conn->close();
?>
