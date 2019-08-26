<!DOCTYPE html>
<html>
<head>
	<title>the equality array operator</title>
</head>
<body>

<?php

echo $status=(empty($user)) ? "anonymous": "logged in";
echo ("<br>");

$user="John Wick";
echo $status=(empty($user)) ? "anonymous": "logged in";
?>

</body>
</html>