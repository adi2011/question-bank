<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			echo ("HELLO YR KYA KARU MAAIN?");
			include('includes\dbconfig.php');
			$ref="kohbee-library-1d47d/number systems and its operations/0";
			$fetchdata = $database->getReference($ref)->getValue();
			foreach($fetchdata as $key => $row){
				echo $row['id'];
				echo ("Hogya");
				
			}
		?>

<h1>HELLO </h1>
</body>
</html>