<?php 
$host		= "localhost";
$username	= "root";
$password	= "";
$database	= "kontak";

$conn = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
	echo "Connect to MySql Failed :" .mysqli_connect_error();
	exit();
}
?>