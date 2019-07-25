<?php
	$conn = new mysqli('localhost', 'root', '', 'greentechstudios');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>