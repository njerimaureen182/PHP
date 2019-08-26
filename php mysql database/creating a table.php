<!DOCTYPE html>
<html>

<body>

<?php
$host="localhost";
$user="root";
$password="";
$dbname="myDB";

// create connection

$conn=mysqli_connect($host, $user, $password, $dbname);

// checking connection

if (!$conn) {
	die("connection failed: " .mysqli_connect_error());
}

// sql error

$sql="CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)"

if (mysqli_query($conn, $sql)) {
	# code...
	echo "table MyGuests created successfully";
} else{
	echo "error creating table: " .mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>