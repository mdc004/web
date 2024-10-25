<?php
    include_once("database_connessione.php");
    include_once("autenticazione_verifica.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    sec_session_start();

    if ($autenticato==true){
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA)){
            $email = $_SESSION["email"];
            $sondaggio_id = (int) htmlspecialchars($_GET["sondaggio_id"]);
            $sondaggio_risposte= isset($_POST["sondaggio_risposte"]) ? $_POST["sondaggio_risposte"] : array();
            foreach($sondaggio_risposte as $risposta){
                $sondaggio_domande_risposte = explode(";", $risposta);
                $id_domanda = $sondaggio_domande_risposte[0];
                $risposta_valore = $sondaggio_domande_risposte[1];
                $query = "INSERT INTO sondaggio_risposta (id_sondaggio, id_domanda, risposta, email, data_ora) VALUES ($sondaggio_id,$id_domanda, '$risposta_valore', '$email', current_timestamp())";
            mysqli_query($mysqli, $query);
            echo $query;
            }
        }
    }
   header("Location: ./../sondaggi.php");
?>