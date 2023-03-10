<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../model/connect.php";
include_once "../model/controller.php";

$database = new Database();
$db = $database->connect();

$unity = new Medicina($db);
$unity->getArchieveActivity();
die();
?>