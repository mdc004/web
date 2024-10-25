<?php
    include_once("autenticazione_verifica.php");
    include_once("database_connessione.php");

    if($autenticato == true && (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA) )) {
        ?>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Email pubblicatore</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Data</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
        <?php
        $query="SELECT id,email_creatore,titolo,data_pubblicazione, testo FROM notizia WHERE id>=0 ORDER BY data_pubblicazione DESC";
        $lista_utenti;
        if ($lista_utenti=mysqli_query($mysqli,$query)){
            $riga=mysqli_fetch_row($lista_utenti);
            while ($riga!=NULL){
                echo "<script>console.log(".$riga[0].")</script>"
                ?>
                    <div class="modal fade" id="modalNotizia<?php echo $riga[0];?>" tabindex="-1" aria-labelledby="modalNotizia<?php echo $riga[0];?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalNotizia<?php echo $riga[0];?>Label">Vuoi eliminare questa notizia?</h1>
                                <button class="btn" data-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo "<h1>" . $riga[2] . "</h1>"; ?> 
                                <?php echo $riga[4]; ?> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                <a type="button" class="btn btn-danger" href="php/notizia_cancella.php?id_notizia=<?php echo $riga[0]; ?>">Elimina notizia</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <tr>
                        <td><?php echo $riga[1] ?></td>
                        <td><?php echo $riga[2] ?></td>
                        <td><?php echo $riga[3] ?></td>
                        <td>
                            <?php if ($utente->privilegi>=2){
                                ?>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalNotizia<?php echo $riga[0];?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                <?php
                            }
                            if ($utente->privilegi>=2 || $riga[1]==$utente->email){
                                ?>
                                    <a type="button" class="btn btn-primary" href="notizia_modifica.php?id=<?php echo $riga[0]; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </a>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                $riga=mysqli_fetch_row($lista_utenti);
            }            
        }
        else{
            ?>
                <h4>Non ci sono notizie</h4>
            <?php
        }
    }
    else {
        header("Location: accedi.php");
    }
?>