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
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
    	echo "<td>" . $row["name"] . "</td>";
    	echo "<td>" . $row["shame"] . "</td>";
    	echo "<td>" . $row["location"] . "</td>";
    	echo "</tr>";
	}
	$conn->close();
?>