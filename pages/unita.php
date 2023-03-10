<?php
$url = 'http://localhost/medicina/api/getDividedUnity.php';
$array = json_decode(file_get_contents($url));
?>

<div class="row">
    <div class="col-3 offset-5">
        <h1>Unità Didattica</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codice Attività</th>
                    <th scope="col">Nome Attività</th>
                    <th scope="col">Codice Unità</th>
                    <th scope="col">Nome Unità</th>
                    <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($array); $i++): ?>
                    <tr>
                        <?php if ($i == 0 || $array[$i]->a_codice != $array[$i - 1]->a_codice): ?>
                            <td>
                                <?php echo $array[$i]->a_codice; ?>
                            </td>
                            <td>
                                <?php echo $array[$i]->a_nome; ?>
                            </td>
                        <?php else: ?>
                            <td></td>
                            <td></td>
                        <?php endif; ?>
                        <td>
                            <?php echo $array[$i]->u_codice; ?>
                        </td>
                        <td>
                            <?php echo $array[$i]->u_nome; ?>
                        </td>
                        <td>
                            <form action="http://localhost/medicina/api/deleteUnity.php" method="post">
                                <button class="btn btn-outline-dark btn-delete" name="codice"
                                    value="<?php echo $array[$i]->u_codice; ?>">
                                    <img src="http://localhost/medicina/assets/img/trash.png" alt="trash" width="20"
                                        height="20" class="">
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
            <tfooter>
                <tr>
                    <th scope="col">Codice Attività</th>
                    <th scope="col">Nome Attività</th>
                    <th scope="col">Codice Unità</th>
                    <th scope="col">Nome Unità</th>
                    <th scope="col">Elimina</th>
                </tr>
            </tfooter>
        </table>
    </div>
</div>