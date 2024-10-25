<?php
    include_once("php/database_connessione.php");
    include_once("php/autenticazione_verifica.php");

    if ($autenticato){
        if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CREA)){
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
                    <title>Crea sondaggio</title>
                </head>
                <body>
                    <?php
                        include_once("views/navbar.php");
                    ?>

                    <main>
                        <div class="container landing">
                            <a href="sondaggi.php">&larr; Torna ai sondaggi</a>
                            <h1>Crea un sondaggio</h1>
                                <form action="php/sondaggio_crea.php" method="POST" class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" name="sondaggio_nome">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Descrizione</label>
                                            <textarea class="form-control" name="sondaggio_descrizione" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p>Domande</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button id="bottoneDomandaAggiungi" class="btn btn-light">Aggiungi domanda</button>
                                            </div>
                                            <div class="col-md-12">
                                                <div id="domande"></div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <input type="submit" value="Crea sondaggio" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </main>

                    <?php
                        include_once("views/footer.php");
                        include_once("views/include_js.php");
                    ?>
                </body>
                </html>
            <?php
        }
    }
?>
