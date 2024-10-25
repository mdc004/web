<?php
    include_once("../php/database_connessione.php");
    include_once("../php/autenticazione_verifica.php");

    if ($autenticato==true){
        ?>
            <!DOCTYPE html>
            <html lang="it">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Il sito degli studenti del Viganò">
                <?php
                    include_once("../views/vigaspotted_css.php");
                ?>
                <title>Spotta qualcuno - Vigainsider</title>
            </head>
            <body>
                <?php
                    include_once("../views/vigaspotted_navbar.php");
                ?>

                <main>
                    <div class="container landing">
                        <h1>Spotta qualcuno</h1>
                        <small class="text-muted">Sarà visibile a tutti</small>
                        <form action="../php/spotted_crea.php" method="POST">
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <h3>Informazioni generali</h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titolo dello spotted</label>
                                        <input type="text" class="form-control" name="spotted_titolo">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Descrizione di chi stai cercando</label>
                                        <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="3" name="spotted_descrizione"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h3>Altre informazioni</h3>
                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <p>Sesso della persona che stai cercando</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="spottedSessoM" value="maschio" checked name="spotted_sesso">
                                                <label class="form-check-label" for="spottedSessoM">
                                                    Maschio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="spottedSessoF" value="femmina" name="spotted_sesso">
                                                <label class="form-check-label" for="spottedSessoF">
                                                    Femmina
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h3>Pubblicazione</h3>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="true" id="spotted_anonimo" name="spotted_anonimo" checked>
                                        <label class="form-check-label" for="spotted_anonimo">
                                            Desidero restare ANONIMO
                                        </label>
                                    </div>
                                    <input type="submit" class="btn btn-primary mt-3" value="Pubblica" name="spotted_pubblicazione">
                                    <input type="submit" class="btn btn-light mt-3" value="Salva come bozza" name="spotted_pubblicazione">
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

                <?php
                    include_once("../views/vigaspotted_js.php");
                ?>
            </body>
            </html>
        <?php
    }
    else header("Location: ../accedi.php");
?>
