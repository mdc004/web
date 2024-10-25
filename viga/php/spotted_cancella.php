<?php
    include_once("autenticazione_verifica.php");

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if ($autenticato==true){
        $spotted_id=htmlspecialchars($_GET["id"]);
        $back=htmlspecialchars($_GET["back"]);

        //Verifica che chi sta cercando di cancellare lo spotted sia effettivamente il suo creatore
        //recupero dell'email del creatore dello spotted
        $query="SELECT email_creatore FROM vigaspotted_spotted WHERE id=$spotted_id";
        $risultato=mysqli_query($mysqli,$query);
        $riga=mysqli_fetch_row($risultato);

        if ($riga[0]==$utente->email){
            //l'utente loggato è il proprietario dello spotted
            $query="DELETE FROM vigaspotted_spotted WHERE id=$spotted_id";
            $risultato=mysqli_query($mysqli,$query);
            if ($risultato) header("Location: $back?status=1");
            else header("Location: $back?status=2");
        }
    }
    else header("Location: ../accedi.php");
?>