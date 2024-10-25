<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once("autenticazione_verifica.php");

    if ($autenticato){
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CREA)){
            $sondaggio_nome=$_POST["sondaggio_nome"];
            $sondaggio_descrizione=$_POST["sondaggio_descrizione"];
            $domande_nomi=$_POST["domanda_nome"];
            $domande_tipi=$_POST["tipo"];
            $domande_opzioni=$_POST["opzioni_stringa"];

            $oggi=date("dmY");
            $ora=time();
            $query="INSERT INTO sondaggio(email_creatore,titolo,descrizione,visibile,evidenza,data_stringa) VALUES('$utente->email','$sondaggio_nome','$sondaggio_descrizione',0,0,$oggi.$ora)";
            mysqli_query($mysqli,$query);
            
            $query="SELECT id FROM sondaggio WHERE data_stringa=$oggi.$ora";
            $sondaggio_creato=mysqli_query($mysqli,$query);
            $sondaggio_creato_id=mysqli_fetch_row($sondaggio_creato)[0];

            for ($i=0; $i < sizeof($domande_nomi); $i++) { 
                preg_replace('/\'/',"/'",$domande_nomi[$i]);
                echo $domande_nomi[$i];
                $query="INSERT INTO sondaggio_domanda(id_sondaggio, email_creatore, testo, tipo, opzioni) VALUES($sondaggio_creato_id, '$utente->email', '$domande_nomi[$i]', $domande_tipi[$i], '$domande_opzioni[$i]')";
                mysqli_query($mysqli,$query);
            }

            header("Location: ../sondaggi.php");
        }
    }
?>