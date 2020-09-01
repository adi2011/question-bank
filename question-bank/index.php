<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			echo ("HELLO YR KYA KARU MAAIN?");
			include('includes\dbconfig.php');
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

<h1>HELLO </h1>
</body>
</html>