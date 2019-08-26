<!DOCTYPE html>
<html>
<body>
	<!-- define variables and set to empty values -->
<?php
$name = $email = $website = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$website = test_input($_POST["website"]);
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["gender"]);

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
	<h2> PHP Form Validation Example</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		Name: <input type="text" name="name"><br><br>
		Email: <input type="text" name="email"><br><br>
		Website: <input type="text" name="website"><br><br>
		Comment: <textarea name="comment" rows="5" cols="25"></textarea><br><br>
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
	</form>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>