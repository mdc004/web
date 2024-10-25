<?php
    include_once("php/funzioni_accesso.php");
    include_once("php/keys.php");
    sec_session_start();
    $mysqli = mysqli_connect( $SERVERNAME, $SERVER_USERNAME, $SERVER_PASSWORD, $SERVER_DATABASE) or die('Could not connect to server.' );
    if(login_check($mysqli) == true) {
        $id_utente = $_SESSION['id_utente'];
        $query="SELECT nome,cognome,privilegi FROM utente WHERE id_utente = ".$id_utente;
        $result = mysqli_query($mysqli, $query);
        $utente=mysqli_fetch_object($result);
        if ($utente->privilegi==10){
            ?>
                <!DOCTYPE html>
                <html lang="it">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <?php
                        include_once("./views/include_css.php");
                    ?>
                    <title>Vigainsider</title>
                </head>
                <body>
                    <?php
                        include_once("./views/navbar.php");
                    ?>

                    <main>
                        <div class="container-fluid landing">
                            <a href="dashboard.php">&LeftArrow; Dashboard</a>
                            <h1>Pannello utenti</h1>
                            <div class="row">
                                <?php
                                    $id_utente_modifica=htmlspecialchars($_GET["edit_id"] ?? null;
                                    if ($id_utente_modifica!=null){
                                        ?>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalModifica" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modifica utente</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>ID utente: <span id="modalModificaId"></span></p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Nome</label>
                                                                    <input type="text" class="form-control" id="modalModificaNome" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Cognome</label>
                                                                    <input type="text" class="form-control" id="modalModificaCognome" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="exampleInputEmail1">Email</label>
                                                                    <input type="email" class="form-control" id="modalModificaPassword" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select class="custom-select" id="modalModificaPrivilegi">
                                                                        <option selected>Seleziona</option>
                                                                        <option value="0">Utente senza privilegi</option>
                                                                        <option value="1">Utente autorizzato a creare notizie e eventi sul sito</option>
                                                                        <option value="2">Utente autorizzato a controllare tutte le notizie e gli eventi sul sito</option>
                                                                        <option value="10">Amministratore di sistema</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php
                                    }
                                ?>

                                <?php
                                    if (isset(htmlspecialchars($_GET["status"])&&htmlspecialchars($_GET["status"]==1){
                                        ?>
                                            <div class="alert alert-success" role="alert">
                                            Operazione avvenuta con successo
                                            </div>
                                        <?php
                                    }
                                    elseif (isset(htmlspecialchars($_GET["status"])&&htmlspecialchars($_GET["status"]==2){
                                        ?>
                                            <div class="alert alert-danger" role="alert">
                                            Impossibile compeltare l'operazione
                                            </div>
                                        <?php
                                    }
                                ?>
                                <div class="col-md-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left nav-link-footer" type="button" data-toggle="collapse" data-target="#tuttiGliUtenti" aria-expanded="true" aria-controls="tuttiGliUtenti">
                                                Tutti gli utenti
                                            </button>
                                        </h2>
                                        </div>

                                        <div id="tuttiGliUtenti" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <table class="table table-striped table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Nome</th>
                                                        <th scope="col">Cognome</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Privilegi</th>
                                                        <th scope="col">Azioni</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $lista_utenti=execute_query($mysqli,"SELECT * FROM utente");
                                                    $riga=mysqli_fetch_row($lista_utenti);
                                                    while ($riga!=NULL){
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $riga[0] ?></td>
                                                                <td><?php echo $riga[1] ?></td>
                                                                <td><?php echo $riga[2] ?></td>
                                                                <td><?php echo $riga[3] ?></td>
                                                                <td><?php 
                                                                    if ($riga[6]==0) echo "Utente senza privilegi";
                                                                    if ($riga[6]==1) echo "Utente autorizzato a creare notizie e eventi sul sito";
                                                                    if ($riga[6]==2) echo "Utente autorizzato a controllare tutte le notizie e gli eventi sul sito";
                                                                    if ($riga[6]==10) echo "Amministratore di sistema";
                                                                ?></td>
                                                                <td>
                                                                    <a class="btn btn-primary" href="php/utente_cancella.php?id=<?php echo $riga[0] ?>">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                                        </svg>
                                                                    </a>
                                                                    <?php
                                                                        $stringa_parametri="\"".$utente->id."\",\"".$utente->nome."\",\"".$utente->cognome."\",\"".$utente->email."\",\"".$utente->privilegi."\"";
                                                                    ?>
                                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalModifica" onclick="preparaModal(<?php echo $stringa_parametri; ?>);mostaModal()">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                                        </svg>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        $riga=mysqli_fetch_row($lista_utenti);
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed nav-link-footer" type="button" data-toggle="collapse" data-target="#cercaUnUtente" aria-expanded="false" aria-controls="cercaUnUtente">
                                                Cerca un utente
                                            </button>
                                        </h2>
                                        </div>
                                        <div id="cercaUnUtente" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <script>
                        const preparaModal=(id,nome,cognome,email,privilegi)=>{
                            document.getElementById("modalModificaId").innerText=id
                            document.getElementById("modalModificaNome").value=nome
                            document.getElementById("modalModificaCognome").value=cognome
                            document.getElementById("modalModificaEmail").value=email
                            document.getElementById("modalModificaPrivilegi").value=privilegi
                        }

                        const mostraModal=()=>{
                            $('#modalModifica').modal('show')
                        }
                    </script>

                    <?php
                        include_once("views/include_js.php");
                    ?>
                </body>
                </html>
            <?php
        }
        else {
            include_once("views/non_autorizzato.php");
        }
} else {
    header("Location: accedi.php");
}
?>