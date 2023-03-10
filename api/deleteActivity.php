<?php
include_once "../model/connect.php";
include_once "../model/controller.php";
include_once "../utils.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['codice'])) {
        $database = new Database();
        $db = $database->connect();

        $activity = new Medicina($db);
        $activity->deleteActivity($_POST['codice']);
        Redirect($baseURL . "?page=attivita");
    }
}
die();
?>