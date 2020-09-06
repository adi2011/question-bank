<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
$ref="ncert-solutions/".$_POST["class"]."/".$_POST["subject"]."/".$_POST["chapter"];
include('./includes/dbconfig.php');
$fetchdata = $database->getReference($ref)->getValue();
foreach($fetchdata as $key => $row){
echo $row['exercise'];
}

?>