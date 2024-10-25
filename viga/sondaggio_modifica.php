<?php
    include_once("php/database_connessione.php");
    include_once("php/autenticazione_verifica.php");

    if ($autenticato){
        if (utente_ha_privilegio($utente, PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA)){
            $sondaggio_id=htmlspecialchars($_GET["id"]);
            $query="SELECT * FROM sondaggio WHERE id=$sondaggio_id";
            $sondaggio=mysqli_fetch_row(mysqli_query($mysqli,$query));
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
                        <title>Modifica sondaggio - Vigainsider</title>
                    </head>
                    <body>
                        <?php
                            include_once("views/navbar.php");
                        ?>

                        <main>
                            <div class="container landing">
                                <h1>Modifica sondaggio</h1>
                                <form action="php/sondaggio_modifica.php" method="POST">
                                    <input type="hidden" name="sondaggio_id" value="<?php echo $sondaggio[0] ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Titolo</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $sondaggio[2] ?>" name="sondaggio_titolo">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Descrizione</label>
                                        <textarea type="text" rows="3" class="form-control" name="sondaggio_descrizione"><?php echo $sondaggio[3] ?></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" <?php if ($sondaggio[4]==1) echo "checked" ?> name="sondaggio_visibile">
                                                <label class="form-check-label" for="inlineCheckbox1">Visibile</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" <?php if ($sondaggio[5]==1) echo "checked" ?> name="sondaggio_evidenza">
                                                <label class="form-check-label" for="inlineCheckbox1">In evidenza</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Modifica sondaggio">
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