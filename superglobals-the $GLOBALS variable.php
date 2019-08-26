<!DOCTYPE html>
<html>
<body>

<?php
$x=45;
$y=90;

function addition(){
	# code...
	$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
	addition();
	echo $z;
?>
																							
</body>
</html>