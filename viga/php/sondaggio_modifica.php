<?php
    include_once("database_connessione.php");
    include_once("autenticazione_verifica.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if ($autenticato==true){
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA)){
            $sondaggio_id=(int)htmlspecialchars($_POST["sondaggio_id"]);
            $sondaggio_titolo=htmlspecialchars($_POST["sondaggio_titolo"]);
            $sondaggio_descrizione=htmlspecialchars($_POST["sondaggio_descrizione"]);
            $sondaggio_visibile=(int)htmlspecialchars($_POST["sondaggio_visibile"]) ?? 0;
            $sondaggio_evidenza=(int)htmlspecialchars($_POST["sondaggio_evidenza"]) ?? 0;

            $query="UPDATE sondaggio SET titolo='$sondaggio_titolo', descrizione='$sondaggio_descrizione', visibile=$sondaggio_visibile, evidenza=$sondaggio_evidenza WHERE id=$sondaggio_id";
            $modifica=mysqli_query($mysqli,$query);

            if ($modifica){
                header("Location: ../sondaggi.php");
            }
        }
    }
?>