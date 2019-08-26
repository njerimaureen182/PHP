<!DOCTYPE html>
<html>

<body>

<?php
$host="localhost";
$user="root";
$password="";

// creating connection

$conn = mysqli_connect($host, $user, $password);

// check connection

if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}
 echo "connected successfully";
?>


</body>
</html>