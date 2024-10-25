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
    <title>Vigainsider</title>
</head>
<body>
    <?php
        include_once("views/navbar.php");
    ?>

    <main>
        <div class="container">            
            <hr>
            <div class="spazio">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Notizie di Vigainsider</h1>
                        <small class="text-muted">Ordinate dalla più recente alla più vecchia</small>
                    </div>
                    <?php
                        //query che recupera tutte le notizie dal DB
                        $query="SELECT * FROM notizia WHERE id>=0 ORDER BY id DESC";
                        $lista_notizie=mysqli_query($mysqli,$query);
                        $riga=mysqli_fetch_row($lista_notizie);
                        while ($riga!=null){
                            ?>
                                <div class="<?php 
                                    if ($riga[0]%2==0) echo "col-md-8";
                                    else echo "col-md-4";
                                ?> mt-3">
                                    <div class="card card-notizia">
                                        <div class="card-body">
                                        <h5 class="card-title"><?php echo $riga[2]; ?></h5>
                                        <small class="text-muted">Pubblicata il <?php echo $riga[4]; ?></small>
                                        <p class="card-text"><?php echo substr($riga[3],0,64)."..."; ?></p>
                                        <a href="<?php echo "notizia.php?id_notizia=$riga[0]&back=notizie.php" ?>" class="btn btn-light">Notizia completa &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $riga=mysqli_fetch_row($lista_notizie);
                        }
                    ?>
                </div>
            </div>

            <?php
                //sezione accessibile agli utenti con i giusti privilegi
                if ($autenticato==true){
                    ?>
                            <?php
                            if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CREA)){
                                ?>
                                    <a href="notizie_gestione.php">Vai alla gestione delle notizie &raquo;</a>
                                <?php
                            }
                            ?>
                    <?php
                }
            ?>

        </div>
            
    </main>

    <?php
        include_once("views/include_js.php");
    ?>
</body>
</html>