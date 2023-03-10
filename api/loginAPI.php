<?php
require_once("../utils.php");
session_start();

print_r($baseURL);

if (isset($_POST["mail"]) == true && isset($_POST["password"]) == true) {
    if ($_POST["mail"] == "ad@gmail.com" && $_POST["password"] == "1234") {
        $_SESSION['logged_in'] = true;
        Redirect($baseURL);
    }
}
Redirect($baseURL . "?page=login");
?>