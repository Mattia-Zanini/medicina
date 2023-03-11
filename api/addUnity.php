<?php
include_once "../model/connect.php";
include_once "../model/controller.php";
include_once "../utils.php";

$database = new Database();
$db = $database->connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['codice_a']) && isset($_POST['codice_u'])) {
        $activity = new Medicina($db);
        $activity->LinkUnity($_POST['codice_a'], $_POST['codice_u']);
    }
}
Redirect($baseURL . "?page=unita");
die();
?>