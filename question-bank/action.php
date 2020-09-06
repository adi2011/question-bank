<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
$input='Q. 9';
function inc($matches) {
    return ++$matches[1];
}
$input = preg_replace_callback("|(\d+)|", "inc", $input);
$input = preg_replace_callback("|(\d+)|", "inc", $input);
echo '<h1>';
echo $input;
echo '</h1>';
?>