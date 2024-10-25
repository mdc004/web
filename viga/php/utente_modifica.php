<?php
    include_once("autenticazione_verifica.php");
    include_once("database_connessione.php");

    if($autenticato === true) {
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_AMMINISTRATORE)){
            $id_iniziale=htmlspecialchars($_POST["id_iniziale"]);
            $nome_modifica=htmlspecialchars($_POST["nome_modifica"]);
            $cognome_modifica=htmlspecialchars($_POST["cognome_modifica"]);
            $email_modifica=htmlspecialchars($_POST["email_modifica"]);
            $privilegi_modifica=$_POST["privilegi_modifica"];
            $privilegi_modifica_query="000000000000000";
            $password_modifica=htmlspecialchars($_POST["password_modifica"]) ?? false;

            foreach ($privilegi_modifica as $key => $value) {
                $privilegi_modifica_query[$value]='1';
            }

            $query="UPDATE utente SET nome='$nome_modifica',cognome='$cognome_modifica',email='$email_modifica',privilegi='$privilegi_modifica_query'";
            if ($password_modifica==true) $query .= ",password='default'";

            $query.="WHERE id_utente='$id_iniziale'";

            echo $query;

            if (mysqli_query($mysqli, $query)){
                header("Location: ../pannello_utenti.php");
            }
            else{
                echo "errore";
            }
        }
        else{
            include("../views/non_autorizzato.php");
        }
    }
    else {
        header("Location: ../accedi.php");
    }
?>