<?php
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$field='name';
	$sort='ASC';

	if(isset($_GET['sorting']))
	{
		if($_GET['sorting']=='ASC')
		{
		$sort='DESC';
		}
		else
		{
		$sort='ASC';
		}
	}

	if($_GET['field']=='name')
	{
	   $field = "name";
	}
	elseif($_GET['field']=='shame')
	{
	   $field = "shame";
	}
	elseif($_GET['field']=='location')
	{
	   $field="location";
	}

	$sql = "SELECT name,shame,location FROM shames ORDER BY $field $sort";
	$result = $conn->query($sql);
	echo'<thead><tr><th><a href="./shame.php?sorting='.$sort.'&field=name">Name</a></th>
     <th><a href="./shame.php?sorting='.$sort.'&field=shame">Shame</a></th>
<th><a href="./shame.php?sorting='.$sort.'&field=location">Location</a></th></tr><thead><tbody>';
  while($row = $result->fetch_assoc()) {
		echo "<tr>";
    	echo "<td>" . $row["name"] . "</td>";
    	echo "<td>" . $row["shame"] . "</td>";
    	echo "<td>" . $row["location"] . "</td>";
    	echo "</tr>";
	}
	// fetch the page numbers
	$limit = 10;
	$result = $conn->query("select count(1) FROM shames;");
	$row = mysql_fetch_array($result);
	var_dump($result);
	$total = $row[0];
	$numPages = floor($total/$limit);
	if ($total % $limit) {
		++$numPages;
	}
	echo $numPages . " pages";
	echo $limit . " limit";
	echo $total . " total";
	echo'</tbody>';
	$conn->close();
?>
