<?php
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
$>