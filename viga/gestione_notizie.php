<?php
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");

    if($autenticato == true) {
        ?>
            <main>
                <div class="container landing">
                    <?php
                    if (utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA) || utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_NOTIZIA_CREA)){
                        ?>
                            <a href="notizia_crea.php" class="btn btn-primary btn-block">Aggiungi notizia</a>
                            <br>
                            
                            <a href="dashboard.php">&LeftArrow; Dashboard</a>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                        include("php/notizie_tabella_crea.php");
                                    ?>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </main>

            <?php
                include_once("views/include_js.php");
            ?>
        <?php
    }
    else{
        header("Location: accedi.php");
    }
?>