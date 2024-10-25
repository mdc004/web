<?php 
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");

    if($autenticato) { ?>
        <!DOCTYPE html>
            <html lang="it">
                <head>
    
        <?php if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA)){
            $id = $_GET["id"] ?? "non esiste";

            if($id == "non esiste") header("Location: notizie.php");
            
            $query = "SELECT titolo, testo FROM notizia WHERE id=$id";
            $notizia = mysqli_fetch_row(mysqli_query($mysqli, $query));

            if(!$notizia) header("Location: notizie.php");

            $titolo = $notizia[0];
            $testo = $notizia[1];

            $titoloModificato = $_POST["titolo"] ?? "non modificato";
            $testoModificato = $_POST["testo"] ?? "non modificato";

            if(!($titoloModificato == "non modificato" && $testoModificato == "non modificato")) {
                $updateQuery = "UPDATE notizia SET titolo='$titoloModificato', testo='$testoModificato' WHERE id=$id";
                
                if(mysqli_query($mysqli, $updateQuery)) header("Location: notizie_gestione.php");
            }
        ?>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta name="description" content="Il sito degli studenti del Viganò">
                        <?php
                            include_once("views/include_css.php");
                        ?>
                        <title>Vigainsider</title>
                    </head>
                    <body>
                        <?php
                            include_once("views/navbar.php");
                        ?>

                        <main>
                            <div class="container landing">
                                <a href="notizie_gestione.php">&LeftArrow; Notizie</a>
                                <h1>Modifica una notizia</h1>
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Titolo</label>
                                                <input type="text" class="form-control" id="exampleInputPassword1" name="titolo" value="<?php echo $titolo?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                                <label for="exampleInputPassword1">Testo</label>
                                                <textarea class="form-control" id="exampleInputPassword1" name="testo" rows="10"><?php echo $testo?></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-primary btn-block" value="Salva notizia"/>
                                        </div>
                                    </div>
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
        echo "gay";
        //header("Location: accedi.php");
    }
?>