<?php
    include_once("php/autenticazione_verifica.php");
    include_once("php/keys.php");

    $mysqli = mysqli_connect( $SERVERNAME, $SERVER_USERNAME, $SERVER_PASSWORD, $SERVER_DATABASE) or die('Could not connect to server.' );

    if($autenticato == true) {
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CREA)){
        ?>
            <!DOCTYPE html>
            <html lang="it">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="description" content="Il sito degli studenti del Viganò">
                    <?php
                        include_once("views/include_css.php");
                    ?>
                    <title>Sezione sviluppatori - Vigainsider</title>
                </head>
                <body>
                    <?php
                        include_once("views/navbar.php");

                    ?>

                    <main>
                        <div class="container landing">
                            <a href="notizie_gestione.php">&LeftArrow; Notizie</a>
                            <h1>Aggiungi una notizia</h1>
                            <form action="php/notizia_salva.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Titolo</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="titolo">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Testo</label>
                                            <textarea class="form-control" id="exampleInputPassword1" name="testo" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">Salva notizia</button>
                                    </div>
                                </div>
                                <input type="hidden" name="email_creatore" value="<?php echo $utente->email; ?>">
                            </form>
                        </div>                        
                    </main>

                    <?php
                        include_once("views/include_js.php");
                    ?>
                </body>
            </html>

        <?php
        }
        else{
            ?>
                <p>Non sei autorizzato</p>
            <?php

        }
    }
    else {
        header("Location: accedi.php");
    }
?>