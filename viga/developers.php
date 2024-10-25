<?php
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");

    if(utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SVILUPPATORE) == true && $utente->privilegi>=8) {
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
                    <title>Sezione sviluppatori - Vigainsider</title>
                </head>
                <body>
                    <?php
                        include_once("views/navbar.php");

                    ?>

                    <main>
                        <div class="container-fluid landing">
                            <a href="dashboard.php">&LeftArrow; Dashboard</a>
                            <h1>Sezione sviluppatori di Vigainsider</h1>
                        </div>                        
                    </main>

                    <?php
                        include_once("views/include_js.php");
                    ?>
                </body>
            </html>

        <?php
    }
    else {
        header("Location: accedi.php");
    }
?>