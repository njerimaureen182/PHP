<!DOCTYPE html>
<html>

<body>

<?php
$host="localhost";
$user="root";
$password="";

// create connection

$conn=mysqli_connect($host, $user, $password);

// check connection

if (!$conn) {
	# code...
	die("connection failed: " .mysqli_connect_error());
}

// create database

$sql="CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	# code...
	echo "database created successfully";
} else {
	echo "error creating database: " .mysqli_error($conn);
}

// closing connection

mysqli_close($conn);


?>

</body>
</html>