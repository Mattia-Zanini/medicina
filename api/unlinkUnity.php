<?php
include_once "../model/connect.php";
include_once "../model/controller.php";
include_once "../utils.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['codice_u'])) {
        $database = new Database();
        $db = $database->connect();

        $unity = new Medicina($db);
        $unity->UnLinkUnity($_POST['codice_u']);
        Redirect($baseURL . "?page=unita");
    }
}
die();
?>