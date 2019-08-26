<!DOCTYPE html>
<html>
<body>

<?php
$cars = array('toyota','volvo','delica','outlander','rvr','renault','fortuner');
rsort($cars);
$clength=count($cars);
for ($x=0; $x <$clength ; $x++) { 
	# code...
	echo $cars[$x]."<br>";
}
?>
																							
</body>
</html>