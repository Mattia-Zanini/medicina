<?php
require_once(__DIR__ . "/utils.php");
session_start();
?>

<?php
//$_SESSION["favcolor"] = "yellow";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medicina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>PAGE2</h1>
    <div class="container-fluid" id="header">
        <!-- <h1>Header</h1> -->
        <?php require_once("header.php") ?>
    </div>
    <div class="container-fluid" id="main">
        <!-- <h1>Main</h1> -->
        <?php require_once("main.php") ?>
    </div>
    <div class="container-fluid" id="footer">
        <!-- <h1>Footer</h1> -->
        <?php require_once("footer.php") ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>