<?php
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");

    if ($autenticato){
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CREA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA)){
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
                        <title>Vigainsider</title>
                    </head>
                    <body>
                        <?php
                            include_once("views/navbar.php");
                        ?>

                        <main>
                            <div class="container landing">
                                <h2>Gestione delle notizie</h2>
                                <a href="notizia_crea.php" class="btn btn-primary btn-block">Aggiungi notizia</a>
                                <br>
                                
                                <a href="dashboard.php">&LeftArrow; Dashboard</a>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                            include("php/notizie_tabella_crea.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </main>

                        <?php
                            include_once("views/include_js.php");
                        ?>
                    </body>
                </html>
            <?php
        }
    }
?>