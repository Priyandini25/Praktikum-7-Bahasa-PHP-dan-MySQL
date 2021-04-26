<?php 
$host 		= "localhost";
$username	= "root";
$password	= "";
$database	= "kontak";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
$sql = "CREATE TABLE kontak (id INT(4) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY, nama VARCHAR(30) NOT NULL, jkel VARCHAR(10), email VARCHAR(40), alamat VARCHAR(50), kota VARCHAR(20), pesan TEXT)";

if (mysqli_query($conn, $sql)) {
	echo "New table created succesfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>