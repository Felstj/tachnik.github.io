<?php
	#echo "Hello World ";
	echo '
		<head>
			<script src="jquery-3.1.1.min.js"></script>
		</head>
	';
	$servername = "sql11.freemysqlhosting.net";
	$username = "sql11162392";
	$password = "d7fav4R8em";
	$dbname = "sql11162392";
	$port = "3306";
	$conn = new mysqli($servername, $username, $password, $dbname, $port);
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT id, title, text FROM texts";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	 // output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["title"]. "<br>" . $row["text"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	
	echo '<p></p>';
	echo '
	<form name="form" action="add.php" method="post" id="form">
		<input type="text" name="title" id="subject" value="title">
		<br>
		<textarea rows="4" cols="50" name="text">Enter text here...</textarea></br>
		<input type="submit" value="Submit">
	</form>';
	#echo '<button href="#" onclick="add();">Add</button>';
	echo '<button href="#" onclick="del();">Remove All</button>';
	echo '<script src="javascript.js"></script>';
?>