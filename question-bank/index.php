<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			include('includes/dbconfig.php');
			$ref="kohbee-library-1d47d/number systems and its operations";
			$fetchdata = $database->getReference($ref)->getValue();
			foreach($fetchdata as $key => $row){
				// echo $row['id'];
				echo ("HELLO YR KYA KARU MAAIN?");
			}
		?>

		
<h1>HELLO </h1>
</body>
</html>