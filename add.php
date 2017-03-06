<?php
	$servername = "sql11.freemysqlhosting.net";
	$username = "sql11162392";
	$password = "d7fav4R8em";
	$dbname = "sql11162392";
	$port = "3306";
	$title = $_POST['title'];
	$text = $_POST['text'];
	
	$conn = new mysqli($servername, $username, $password, $dbname, $port);
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$sql = "INSERT INTO texts (title, text) VALUES ('{$title}', '{$text}')";
	$conn->query($sql);
	
	include('index.php');
?>