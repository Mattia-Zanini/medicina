<?php
include_once "../model/connect.php";
include_once "../model/controller.php";
include_once "../utils.php";

$database = new Database();
$db = $database->connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['codice']) && isset($_POST['nome']) && isset($_POST['cfu'])) {
        $activity = new Medicina($db);
        $activity->AddActivity($_POST['codice'], $_POST['nome'], $_POST['cfu']);
    }
}
Redirect($baseURL . "?page=attivita");
die();
?>