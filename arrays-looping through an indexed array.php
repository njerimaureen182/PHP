<!DOCTYPE html>
<html>
<body>

<?php
$cars= array("Volvo", "Merc", "Renault");
$arrlength= count($cars);
echo $arrlength;
echo '<br>';

for ($i=0; $i <$arrlength ; $i++) { 
	echo $cars[$i];
	echo '<br>';
}
?>
																							
</body>
</html>