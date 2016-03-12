<?php
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// The default sorting
	$field='name';
	$current_sort='ASC';
	$alt_sort='DESC';
	$page = 1;

	if(isset($_GET['sorting'])) {
		$current_sort = $_GET['sorting'];
		if ($current_sort != 'ASC' && $current_sort != 'DESC') {
			$current_sort = 'ASC';
		}
	}
	$alt_sort = ($current_sort == 'ASC') ? 'DESC' : 'ASC';

	if(isset($_GET['name'])) {
		$field = $_GET['name'];
		if($field != 'name' && $field != 'shame' && $field != 'location') {
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
		} elseif ($page > $numPages) {
			$page = $numPages;
		}
	}
	$offset = $limit * ($page - 1);
	$sql = "SELECT name,shame,location FROM shames ORDER BY $field $current_sort LIMIT $limit OFFSET $offset";
	$result = $conn->query($sql);
	echo'<thead>
		<tr><th><a href="./shame.php?sorting='.$alt_sort.'&field=name">Name</a></th>
		<th><a href="./shame.php?sorting='.$alt_sort.'&field=shame">Shame</a></th>
		<th><a href="./shame.php?sorting='.$alt_sort.'&field=location">Location</a></th></tr>
	<thead><tbody>';
  while($row = $result->fetch_assoc()) {
		echo "<tr>";
    	echo "<td>" . $row["name"] . "</td>";
    	echo "<td>" . $row["shame"] . "</td>";
    	echo "<td>" . $row["location"] . "</td>";
    	echo "</tr>";
	}

	echo'</tbody>';
	$conn->close();
?>
