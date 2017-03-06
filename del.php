<?php
	$servername = "sql11.freemysqlhosting.net";
	$username = "sql11162392";
	$password = "d7fav4R8em";
	$dbname = "sql11162392";
	$port = "3306";
	$conn = new mysqli($servername, $username, $password, $dbname, $port);
	$sql = "TRUNCATE TABLE texts";
	$conn->query($sql);
?>