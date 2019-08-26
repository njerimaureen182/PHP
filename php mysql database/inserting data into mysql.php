<!DOCTYPE html>
<html>

<body>

<?php
$host="localhost";
$user="root";
$password="";
$dbname="myDB";

$conn = ($host, $user, $password, $dbname);

if (!$conn) {
	# code...
	die("connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO MyGuests(firstname, lastname, email)
VALUES('John', 'Doe', 'john@mail.com')";

if (mysqli_query($conn, $query)) {
	# code...
	echo "new record created successfully";
} else{
	echo "error: " . $sql ."<br>". mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>