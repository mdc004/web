<?php 
    include_once("autenticazione_verifica.php");
    include_once("database_connessione.php");

    if($autenticato == true) {
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA)){
            $titolo=htmlspecialchars($_POST["titolo"]);
            $testo=htmlspecialchars($_POST["testo"]);
            /*$query="INSERT INTO notizia(email_creatore,titolo,testo,data_pubblicazione) VALUES ('$email_creatore','$titolo','$testo','$data_pubblicazione')";
            $result;
            if ($result=mysqli_query($mysqli,$query)){
                header("Location: ../notizie.php");
            }*/
        ?>
            <!DOCTYPE html>
                <html lang="it">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta name="description" content="Il sito degli studenti del Viganò">
                        <?php
                            include_once("../views/include_css.php");
                        ?>
                        <title>Vigainsider</title>
                    </head>
                    <body>
                        <?php
                            include_once("../views/navbar.php");
                        ?>

                        <main>
                            <p>ciao</p>
                        </main>

                        <?php
                            include_once("../views/include_js.php");
                        ?>
                    </body>
                </html>
        <?php
        }
        else{
            ?>
                <p>Non sei autorizzato</p>
            <?php

        }
    }
    else {
        header("Location: ../accedi.php");
    }
?>