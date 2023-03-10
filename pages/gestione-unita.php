<?php
$url = 'http://localhost/medicina/api/getArchiveActivity.php';
$array = json_decode(file_get_contents($url));
//print_r($array);
?>

<link rel="stylesheet" href="css/gestione-att.css">

<div class="row mt-3">
    <div class="col-3 offset-5">
        <h1>Gestione Unità</h1>
    </div>
</div>
<!-- <div class="row mt-5">
    <div class="col-3 text-center add-form">
        <h1>Aggiungi</h1>
        <div class="row">
            <form class="mt-5" action="api/setActivity.php" method="POST">
                <div class="mb-3 col-11 ms-3">
                    <label for="inputCodice" class="form-label login-text">
                        <h5>Codice</h5>
                    </label>
                    <div class="input-group">
                        <input type="number" class="form-control test-input" id="inputCodice" name="codice">
                    </div>
                </div>
                <div class="mb-3 col-11 ms-3">
                    <label for="inputNome" class="form-label login-text">
                        <h5>Nome</h5>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control test-input" id="inputNome" name="nome">
                    </div>
                </div>
                <div class="mb-3 col-11 ms-3">
                    <label for="inputCFU" class="form-label login-text">
                        <h5>CFU</h5>
                    </label>
                    <div class="input-group">
                        <input type="number" class="form-control test-input" id="inputCFU" name="cfu">
                    </div>
                </div>
                <button class="btn btn-primary col-3 mt-2" type="submit">Aggiungi</button>
            </form>
        </div>
    </div>
    <div class="col-3 offset-1 text-center modify-form">
        <h1>Modifica</h1>
        <div class="row">
            <form class="mt-5" action="api/updateActivity.php" method="POST">
                <select class="form-select mb-3" name="codice" style="width: 20vw; margin-left: 1vw;">
                    <?php foreach ($array as $row): ?>
                        <option value="<?php echo $row->codice; ?>">
                            <?php echo 'Codice: ' . $row->codice; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="mb-3 col-11 ms-3">
                    <label for="inputNome" class="form-label login-text">
                        <h5>Nome</h5>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control test-input" id="inputNome" name="nome">
                    </div>
                </div>
                <button class="btn btn-primary col-3 mt-2" type="submit">Modifica</button>
            </form>
        </div>
    </div>
</div> -->