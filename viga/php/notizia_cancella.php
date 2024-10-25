<?php
    include_once("autenticazione_verifica.php");
    include_once("database_connessione.php");

    if($autenticato == true && utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA)) {
        $id_notizia=htmlspecialchars($_GET["id_notizia"]);
        $query="DELETE FROM notizia WHERE id='$id_notizia'";
        if (mysqli_query($mysqli,$query)){
            header("Location: ../notizie_gestione.php");
        }
        else{
            ?>
                <p>Impossibile cancellare</p>
            <?php
        }
    }
    else {
        header("Location: ../accedi.php");
    }
?>