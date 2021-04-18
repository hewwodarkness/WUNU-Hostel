<?php $servername = "localhost";
$username = "t81021_virgouser";
$password = "r3qe7bj319nmwrov7e";
$dbname = "t81021_projectj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>