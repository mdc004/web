<?php
    include_once("php/database_connessione.php");
    include_once("php/autenticazione_verifica.php");
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
    <title>Sondaggi - Vigainsider</title>
</head>
<body>
    <?php
        include_once("views/navbar.php");
    ?>

    <main>
        <div class="container landing">
            <h1>Sondaggi di Vigainsider</h1>
            <small class="text-muted">Accessibili a tutti gli studenti della scuola</small>
            <div class="row mt-3">
                <?php
                    $query="SELECT id,titolo,descrizione FROM sondaggio WHERE visibile=1";
                    $lista_sondaggi=mysqli_query($mysqli, $query);
                    $sondaggi_numero=mysqli_num_rows($lista_sondaggi);
                    $riga=mysqli_fetch_row($lista_sondaggi);
                    while ($riga != NULL){
                        ?>
                            <div class="col-md-4 mt-3">
                                <div class="card card-notizia">
                                    <div class="card-body">
                                    <h5 class="card-title"><?php echo $riga[1]; ?></h5>
                                    <p class="card-text"><?php echo $riga[2]; ?></p>
                                    <a href="sondaggio_partecipa.php?id=<?php echo $riga[0] ?>" class="btn btn-light">Partecipa al sondaggio &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        $riga=mysqli_fetch_row($lista_sondaggi);
                    }
                    if ($sondaggi_numero==0){
                        ?>
                            <div class="col-md-12 mt-3">
                                <h4>Non ci sono Sondaggi</h4>
                                <p class="text-muted">Torna a trovarci tra un po' di tempo e potresti trovare qualcosa di interessante</p>
                            </div>
                        <?php
                    }
                ?>
            </div>
            <hr>
            <?php
                if ($autenticato==true){
                    if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CREA)){
                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="sondaggio_crea.php" class="btn btn-primary btn-block">Crea sondaggio</a>
                                </div>
                            </div>
                        <?php
                    }
                    if ((utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_SONDAGGI_CANCELLA))){
                        ?>
                            <div class="row">
                                <div class="col md-12">
                                    <h4>Gestione sondaggi</h4>
                                </div>
                                <div class="col-md-12">
                                    <?php include_once("php/sondaggio_tabella_crea.php") ?>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </main>

    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>