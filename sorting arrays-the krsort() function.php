<!DOCTYPE html>
<html>
<body>

<?php
$fname = array('lara' =>'bassiri','ayana'=>'nahara','mworia'=>'shukri','faiza'=>'lonina'); 
krsort($fname);
foreach ($fname as $x => $x_value) {
	# code...
	echo "key= ".$x." while value= ".$x_value."<br>";
}
?>
																							
</body>
</html>