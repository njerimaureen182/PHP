<!DOCTYPE html>
<html>
<body>

<?php
$favcolor="white";

switch ($favcolor) {
	case 'red':
		echo "Your fav color is red";
		break;
	case 'blue':
		echo "Your fav color is blue";
		break;
	case 'green':
		echo "Your fav color is green";
		break;
	
	default:
		echo "Your fav color is neither red, blue, nor green";
}
?>

</body>
</html>