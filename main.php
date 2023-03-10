<?php
switch ($page) {
    case "home":
        require_once("pages/home.php");
        break;
    case "login":
        require_once("pages/login.php");
        break;
    case "attivita":
        require_once("pages/attivita.php");
        break;
    case "unita":
        require_once("pages/unita.php");
        break;
    case "gestatt":
        require_once("pages/gestione-attivita.php");
        break;
    case "gestuni":
        require_once("pages/gestione-unita.php");
        break;
    default:
        require_once("pages/404.php");
        break;
}
?>