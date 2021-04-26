<?php
$host		 ="localhost";
$username 	= "root";
$password 	= "";
$database 	= "kontak";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
$sql = "CREATE TABLE admin (username VARCHAR(30) NOT NULL, password VARCHAR(10) NOT NULL PRIMARY KEY)";

if (mysqli_query($conn, $sql)) {
	echo "New table created succesfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>