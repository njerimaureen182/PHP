<!DOCTYPE html>
<html>
<body>

<?php
$hood = array('mara' =>'glasgow','lily'=>'kenya','anna'=>'hongkong','zeff'=>'singapore'); 
ksort($hood);
foreach ($hood as $x => $x_value) {
	# code...
	echo "key= ".$x." while value= ".$x_value."<br>";
}
?>
																							
</body>
</html>