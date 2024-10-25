<?php
    include_once("autenticazione_verifica.php");
    include_once("database_connessione.php");

    if($autenticato == true) {
        $id_utente = $_SESSION['id_utente'];
        $query="SELECT nome,cognome,privilegi FROM utente WHERE id_utente = ".$id_utente;
        $result = mysqli_query($mysqli, $query);
        $utente=mysqli_fetch_object($result);

        $id_utente_elimina=htmlspecialchars($_GET["id"]);
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_AMMINISTRATORE)){
            $result=execute_query($mysqli,"DELETE FROM utente WHERE id_utente=".$id_utente_elimina);
            if ($result) header("Location: ../pannello_utenti.php?status=1");
        }
        else {
            ?>
                <!DOCTYPE html>
                <html lang="it">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <?php
                        include_once("./views/include_css.php");
                    ?>
                    <title>Vigainsider</title>
                </head>
                <body>
                    <div class="container">
                        <p>Non hai l'autorizzazione necessaria per accedere a questa pagina</p>
                        <a href="../dashboard.php">Torna alla dashboard</a>
                    </div>
                </body>
            <?php
        }
    } else {
        header("Location: accedi.php");
    }
?>