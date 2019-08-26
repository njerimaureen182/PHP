<!DOCTYPE html>
<html>
<body>

<?php
$t=date("H");

if ($t<"10") {
	echo "Today is Monday!";
} elseif ($t<"20") {
	# code...
	echo "Have a good day!";
} else {
	echo "Have a good night";
}
?>

</body>
</html>