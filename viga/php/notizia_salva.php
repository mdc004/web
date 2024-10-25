<?php
    include_once("autenticazione_verifica.php");
    include_once("database_connessione.php");

    if($autenticato == true) {
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CREA)){
            $email_creatore=htmlspecialchars($_POST["email_creatore"]);
            $titolo=htmlspecialchars($_POST["titolo"]);
            $testo=htmlspecialchars($_POST["testo"]);
            $data_pubblicazione=date("Y-m-d");

            $query="INSERT INTO notizia(email_creatore,titolo,testo,data_pubblicazione) VALUES ('$email_creatore','$titolo','$testo','$data_pubblicazione')";
            $result;
            if ($result=mysqli_query($mysqli,$query)){
                header("Location: ../notizie.php");
            }
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