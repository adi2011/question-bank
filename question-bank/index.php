<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			ini_set('display_errors', 1); 
			ini_set('display_startup_errors', 1); 
			error_reporting(E_ALL);
			echo ("HELLO YR KYA KARU MAAIN?");
			include('./includes/dbconfig.php');
			$ref="question-bank/number systems and its operations";
			$fetchdata = $database->getReference($ref)->getValue();
			// $reference = $database->getReference("question-bank/number systems and its operations/0");
			// $snapshot = $reference->getSnapshot();
			// $value = $snapshot->getValue();
			// echo ($value.exists());

			foreach($fetchdata as $key => $row){
				echo $row['id'];
			}
			echo("HOGYA");

		?>

<h1>HELLO 3</h1>
</body>
</html>