<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once("autenticazione_verifica.php");

    if ($autenticato){
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CANCELLA)){
            $sondaggio_id = htmlspecialchars($_GET["sondaggio_id"]);
            $query = "DELETE FROM sondaggio WHERE id =$sondaggio_id";
            mysqli_query($mysqli, $query);
            header("Location: ./../sondaggi.php");
        }
    } else {
    echo "Accesso Negato";
}
?>