<!DOCTYPE html>
<html>

<body>

<?php

class Car{
	function Car(){
		$this->model = "VW";
	}
}
// create the object
$herbie = new Car();

// show object properties
echo $herbie->model;

?>

</body>

</html>