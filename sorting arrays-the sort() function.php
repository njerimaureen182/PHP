<!DOCTYPE html>
<html>
<body>

<?php
$names = array('luca','paul','eric','vick','anzani','thusi');
sort($names);
$nlength=count($names);
for ($x=0; $x <$nlength ; $x++) { 
	# code...
	echo $names[$x]."<br>";
}

?>
																							
</body>
</html>