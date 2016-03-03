<?php
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT * FROM MyTable";

	if ($_GET['sort'] == 'name')
	{
	    $sql .= " ORDER BY name";
	}
	elseif ($_GET['sort'] == 'shame')
	{
	    $sql .= " ORDER BY shame";
	}
	elseif ($_GET['sort'] == 'description')
	{
	    $sql .= " ORDER BY description";
	}
	$conn->close();
$>