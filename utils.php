<?php
$baseURL = "http://localhost/medicina";
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}

function IsLogged()
{
    if (isset($_SESSION['logged_in']) == false || $_SESSION['logged_in'] == false)
        return false;
    return true;
}
?>