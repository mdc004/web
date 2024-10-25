<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("autenticazione_verifica.php");
include_once("database_connessione.php");

if ($autenticato == true && utente_ha_privilegio($utente, PERMESSI_VIGAINSIDER_AMMINISTRATORE)) {
?>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">Email creatore</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Visibile?</th>
                <th scope="col">Evidenza?</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $lista_sondaggi = mysqli_query($mysqli, "SELECT * FROM sondaggio");
            $riga = mysqli_fetch_row($lista_sondaggi);
            while ($riga != NULL) {
            ?>
                <tr>
                    <td><?php echo $riga[1] ?></td>
                    <td><?php echo $riga[2] ?></td>
                    <td><?php echo $riga[3] ?></td>
                    <td><?php echo $riga[4] ?></td>
                    <td><?php echo $riga[5] ?></td>
                    <td><?php echo $riga[6] ?></td>
                    <td>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#sondaggio-<?php echo $riga[0] ?>-cancella">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                        <!-- Conferma elimina -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="sondaggio-<?php echo $riga[0] ?>-cancella" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Conferma eliminazione sondaggio <?php echo $riga[0] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare il sondaggio "<?php echo $riga[2] ?>"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Annulla</button>
                                        <button type="button" class="btn btn-danger" onclick="location.href = './php/sondaggio_cancella.php?sondaggio_id=<?php echo $riga[0] ?>'">
                                            Elimina
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <a type="button" class="btn btn-primary" href="sondaggio_modifica.php?id=<?php echo $riga[0]; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            <?php
                $riga = mysqli_fetch_row($lista_sondaggi);
            }
            ?>
        </tbody>
    </table>
<?php
}
?>