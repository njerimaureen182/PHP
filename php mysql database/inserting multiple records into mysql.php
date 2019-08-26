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

$sql="INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $query)) {
	# code...
	echo "new records created successfully";
} else{
	echo "error: " . $sql ."<br>". mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>