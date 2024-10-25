<?php
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");

    if ($autenticato==true){
        ?>
            <!DOCTYPE html>
            <html lang="it">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Il sito degli studenti del Viganò">
                <?php
                    include_once("views/include_css.php");
                ?>
                <title>Pannello utenti - Vigainsider</title>
            </head>
            <body>
                <?php
                    include_once("views/navbar.php");
                ?>
                <div class="modal fade" id="modalCancellaUtente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cancellazione utente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="id_cancella" name="id">
                            Vuoi cancellare <span id="emailCancella"></span>?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Annulla</button>
                            <a id="link_utente_cancella" href="php/utente_cancella.php?id=<?php echo $riga[0] ?>" type="button" class="btn btn-danger">Conferma</a>
                        </div>
                        </div>
                    </div>
                </div>

                <main>
                    <?php
                        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_AMMINISTRATORE)){
                            ?>
                                <div class="container-fluid landing">
                                    <a href="dashboard.php">&LeftArrow; Dashboard</a>
                                    <h1>Pannello utenti</h1>
                                    <div class="row">
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
                                                            <h4>Tutti gli utenti</h4>
                                                            <?php include_once("php/utenti_tabella_crea.php"); ?>
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
                            <?php
                        }
                        else {
                            include_once("views/non_autorizzato.php");
                        }
                    ?>
                </main>
                <script>
                    const preparaModalCancellaUtente=(email,id)=>{
                        document.getElementById("emailCancella").innerText=email
                        document.getElementById("link_utente_cancella").href="php/utente_cancella.php?id="+id
                    }
                </script>

                <?php
                    include_once("views/include_js.php");
                ?>
            </body>
            </html>
        <?php
    }
    else{
        header("Location: accedi.php");
    }
?>