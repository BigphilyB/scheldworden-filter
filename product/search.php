<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/scheldworden.php';

// instantiate database and scheldworden object
$database = new Database();
$db = $database->getConnection();

// initialize object
$scheldworden = new scheldworden($db);

// read scheldwordens will be here
// query scheldwordens
$result = $scheldworden->update(
     $_POST["woord"],$_POST["goedgekeurd"],$_POST["gradatieScheldwoord"]

);
?>
