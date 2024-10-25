<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");
    
    if ($autenticato==true){
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
            <title>Dashboard - Vigainsider</title>
        </head>
        <body>
            <?php
                include_once("./views/navbar.php");
            ?>

            <main>
                <div class="container-fluid landing">
                    <h1>Dashboard</h1>
                    <?php
                        echo "<p class='text-muted'>Benvenuto, ".$utente->nome."</p>";
                    ?>

                    <hr>
                    <h3>Novità per te</h1>
                    <?php
                        //preparazione query
                        $mysqli_statement=mysqli_prepare($mysqli,"SELECT testo FROM vigaspotted_spotted WHERE email_creatore = ? LIMIT 1");
                        $email=$utente->email;
                        $lista_spotted;
                        if ($mysqli_statement!=false){
                            mysqli_stmt_bind_param($mysqli_statement,"s",$email);
                            mysqli_stmt_execute($mysqli_statement);
                            mysqli_stmt_bind_result($mysqli_statement, $lista_spotted);
                            mysqli_stmt_fetch($mysqli_statement);
                            mysqli_stmt_close($mysqli_statement);
                        }
                    ?>


                    <hr>
                    <h3>Strumenti utili</h1>
                    <div class="row">
                        <?php
                            if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_AMMINISTRATORE)){
                                $num_utenti=mysqli_fetch_array(execute_query($mysqli, "SELECT COUNT(id_utente) FROM utente AS num_utenti"))[0];

                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                Gestione utenti
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Sono presenti <?php echo $num_utenti; ?> utenti</h5>
                                                <p class="card-text">Puoi gestire autorizzazioni e altre informazioni degli account</p>
                                                <a href="pannello_utenti.php" class="btn btn-primary">Pannello utenti &raquo;</a>
                                            </div>                                            
                                        </div>                                            
                                    </div>
                                    <br>
                                <?php
                            }
                        ?>

                        <?php
                            if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SVILUPPATORE)){
                                $num_utenti=mysqli_fetch_array(execute_query($mysqli, "SELECT COUNT(id_utente) FROM utente AS num_utenti"))[0];

                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                Sezione sviluppatori
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Accedi alla sezione dedicata agli sviluppatori di Vigainsider</h5>
                                                <p class="card-text">Con documentazione, discussioni e ticket</p>
                                                <a href="developers.php" class="btn btn-primary">Sezione sviluppatori &raquo;</a>
                                            </div>                                            
                                        </div>                                            
                                    </div>
                                    <br>
                                <?php
                            }
                        ?>

                        <?php
                            if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CREA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA)){
                                $num_utenti=mysqli_fetch_array(execute_query($mysqli, "SELECT COUNT(id_utente) FROM utente AS num_utenti"))[0];

                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                Sezione notizie
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Accedi alla sezione delle notizie di Vigainsider</h5>
                                                <p class="card-text">In base ai tuoi privilegi potrai scrivere, modificare e eliminare notizie</p>
                                                <a href="notizie_gestione.php" class="btn btn-primary">Sezione notizie &raquo;</a>
                                            </div>                                            
                                        </div>                                            
                                    </div>
                                    <br>
                                <?php
                            }
                        ?>

                        <?php
                            if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CREA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CANCELLA)){
                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                Sezione sondaggi
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Gestisci i sondaggi di Vigainsider</h5>
                                                <p class="card-text">In base ai tuoi privilegi potrai scrivere, modificare e eliminare i sondaggi</p>
                                                <a href="sondaggi.php" class="btn btn-primary">Sezione sondaggi &raquo;</a>
                                            </div>                                            
                                        </div>                                            
                                    </div>
                                    <br>
                                <?php
                            }
                        ?>

                        <?php
                            if (utente_ha_privilegio_lista($utente, array(PERMESSI_VIGASPOTTED_RISPOSTA_CANCELLA,PERMESSI_VIGASPOTTED_RISPOSTA_MODIFICA,PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA,PERMESSI_VIGASPOTTED_SPOTTED_CANCELLA,PERMESSI_VIGASPOTTED_SPOTTED_MODIFICA,PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA))){
                                ?>
                                    <div class="col-md-4 mt-3">
                                        <div class="card">
                                            <div class="card-header">
                                                Sezione Vigaspotted
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Gestisci il forum di Vigaspotted</h5>
                                                <p class="card-text">In base ai tuoi privilegi potrai modificare, cancellare o approvare gli spotted e le risposte</p>
                                                <a href="vigaspotted/vigaspotted_admin.php" class="btn btn-primary">Sezione Vigaspotted &raquo;</a>
                                            </div>                                            
                                        </div>                                            
                                    </div>
                                    <br>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </main>

            <?php
                include_once("views/include_js.php");
            ?>
        </body>
        </html>
    <?php
} else {
    header("Location: accedi.php");
}
?>