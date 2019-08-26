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

// check connection
if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}

$sql="SELECT id, firstname, lastname FROM MyGuests";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	# code...
	while ( <= 10) {
		# code...
	}
}

?>
</body>
</html>