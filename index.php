<?php
require_once("utils.php");
session_start();
if (isset($_GET["page"]) == false)
    $page = "INDEX";
else
    $page = $_GET["page"];

if (IsLogged() == false && $page != "login") {
    Redirect('http://localhost/medicina?page=login');
}
?>

<!doctype html>
<html lang="en">

<?php require_once("head.php"); ?>

<body>
    <div class="" id="header">
        <!-- <h1>Header</h1> -->
        <?php
        if ($page != "login")
            require_once("header.php");
        ?>
    </div>
    <h1>
        <?php //echo strtoupper($page); ?>
    </h1>
    <div class="container-fluid" id="main">
        <!-- <h1>Main</h1> -->
        <?php require_once("main.php"); ?>
    </div>
    <div class="container-fluid" id="footer">
        <!-- <h1>Footer</h1> -->
        <?php
        if ($page != "login")
            require_once("footer.php");
        ?>
    </div>
    <?php require_once("foot.php"); ?>
</body>

</html>