<?php
		$conn = mysqli_connect("localhost", "neo", "admin123", "pharmacy");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
?>
