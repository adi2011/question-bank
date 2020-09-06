<?php
$ref="ncert-solutions/".$_POST["class"]."/".$_POST["subject"]."/".$_POST["chapter"];
include('./includes/dbconfig.php');
$fetchdata = $database->getReference($ref)->getValue();
$ref=$ref.$fetchdata[0];
echo $ref;
?>