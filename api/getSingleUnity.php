<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once "../model/connect.php";
include_once "../model/controller.php";

$database = new Database();
$db = $database->connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['codice_u'])) {
        $unity = new Medicina($db);
        $unity->getSingleUnity($_POST['codice_u']);
    }
}
die();
?>