<?php


define('CURRENCY', '$');

$servername = 'localhost';
$username = 'root';
$password = "";
$db = 'ecommerceapp';

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "product_images");


?>
