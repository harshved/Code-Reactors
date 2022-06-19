<?php
	$servername = "sql107.epizy.com";
	$username = "epiz_31983120";
	$password = "pKxlgNV751lq";
	$database = "epiz_31983120_codeReactors";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>