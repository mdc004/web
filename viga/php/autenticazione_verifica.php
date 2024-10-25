<?php
    include_once("funzioni_accesso.php");
    include_once("keys.php");

    sec_session_start();
    $mysqli = mysqli_connect( $SERVERNAME, $SERVER_USERNAME, $SERVER_PASSWORD, $SERVER_DATABASE) or die('Errore: impossibile connettersi al server.' );
    $autenticato;

    if(login_check($mysqli) == true) {
        $id_utente = $_SESSION['id_utente'];
        $query="SELECT nome,cognome,email,privilegi,verificato FROM utente WHERE id_utente = ".$id_utente;
        $result = mysqli_query($mysqli, $query);
        $utente=mysqli_fetch_object($result);
        if ($utente->verificato==1) $autenticato=true;
        else $autenticato=false;

        function utente_ha_privilegio($utente,$privilegio){
            if ($utente->privilegi[$privilegio]=='1') return true;
            else return false;
        }

        function utente_ha_privilegio_lista($utente,$lista_privilegi){
            for ($i=0; $i < sizeof($lista_privilegi); $i++) { 
                if ($utente->privilegi[$lista_privilegi[$i]]=='1') return true;
            }

            return false;
        }
    }
    else {
        $autenticato=false;
    }
?>