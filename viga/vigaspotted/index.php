<?php
    include_once("../php/autenticazione_verifica.php");
    include_once("../php/database_connessione.php");

    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include_once("../views/vigaspotted_css.php");
    ?>
    <title>Vigaspotted - Vigainsider</title>
</head>
<body>
    <?php
        include_once("../views/vigaspotted_navbar.php");
        include_once("../views/modal_spotted_cancella.php");
    ?>
    <div class="container-fluid landing">
        <div class="row">
            <div class="col-md-12">
                <h1>Vigaspotted</h1>
            </div>
            <?php
                if ($autenticato==true){
                    ?>
                        <div class="col-md-12 mt-4">
                            <a class="btn btn-primary" href="spotted_crea.php">Spotta qualcuno &raquo;</a>
                            <?php
                                if (utente_ha_privilegio_lista($utente, array(PERMESSI_VIGASPOTTED_RISPOSTA_CANCELLA,PERMESSI_VIGASPOTTED_RISPOSTA_MODIFICA,PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA,PERMESSI_VIGASPOTTED_SPOTTED_CANCELLA,PERMESSI_VIGASPOTTED_SPOTTED_MODIFICA,PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA))){
                                    ?>
                                        <a href="vigaspotted_admin.php" class="btn btn-light">Strumenti per gli amministratori di Vigaspotted &raquo;</a>
                                    <?php
                                }
                            ?>
                        </div>
                    <?php
                }
            ?>
            
            <?php
                if ($autenticato==true){
                    $query="SELECT * FROM vigaspotted_spotted WHERE email_creatore='$utente->email' LIMIT 4";
                    $lista_spotted=mysqli_query($mysqli,$query);
                    ?>
                        <div class="col-md-12 mt-3">
                            <h4>I tuoi spotted</h4>
                            <small class="text-muted">Gli ultimi 4</small>
                            <div class="row mt-3">
                                <?php
                                    $riga=mysqli_fetch_row($lista_spotted);
                                    while ($riga!=null){
                                        ?>
                                            <div class="col-md-3 mt-3">
                                                <div class="card card-notizia">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $riga[2] ?></h5>
                                                        <?php
                                                            if ($riga[7]==1) echo "<small class='text-muted'>Visibile a tutti</small>";
                                                            else "<small class='text-muted'>Bozza</small>";
                                                        ?>
                                                        <p class="card-text"><?php echo $riga[3] ?></p>
                                                        <p class="text-muted"><?php echo $riga[4]. " voti · 0 risposte" ?></p>
                                                        <a href="spotted.php?id=<?php echo $riga[0] ?>&back=index.php" class="btn btn-light">Dettagli &raquo;</a>
                                                        <button onclick="preparaModalSpottedCancella(<?php echo $riga[0].',\''.$_SERVER['PHP_SELF'].'\',\''.$riga[2].'\''; ?>)" data-toggle="modal" data-target="#modalSpottedCancella"  class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                            </svg>
                                                        </button>
                                                    </div>                                            
                                                </div>                                            
                                            </div>
                                        <?php
                                        $riga=mysqli_fetch_row($lista_spotted);
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <a href="spotted_miei.php">Tutti i tuoi spotted &raquo;</a>
                        </div>
                    <?php
                }
            ?>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-12 mt-3">
                <h4>Spotted in tendenza</h4>
                <div class="row">
                    <?php
                        for ($i=0; $i < 4; $i++) { 
                            ?>
                            <div class="col-md-3 mt-3">
                                <div class="card card-notizia">
                                    <div class="card-body">
                                        <h5 class="card-title">Spotted <?php echo $i+1 ?></h5>
                                        <p class="card-text">Breve descrizione</p>
                                        <div class="btn-toolbar mt-3" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                                                </svg></button>
                                                <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                                </svg></button>
                                            </div>
                                            <p class="mt-2">x voti</p>
                                        </div>
                                        <a href="pannello_utenti.php" class="btn btn-light mt-3">Dettagli &raquo;</a>
                                    </div>                                            
                                </div>                                            
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="col-md-12 mt-3">
                <h4>Spotted più recenti</h4>
                <div class="row">
                    <?php
                        for ($i=0; $i < 4; $i++) { 
                            ?>
                            <div class="col-md-3 mt-3">
                                <div class="card card-notizia">
                                    <div class="card-body">
                                        <h5 class="card-title">Spotted <?php echo $i+1 ?></h5>
                                        <p class="card-text">Breve descrizione</p>
                                        <div class="btn-toolbar mt-3" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                                                </svg></button>
                                                <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                                </svg></button>
                                            </div>
                                            <p class="mt-2">x voti</p>
                                        </div>
                                        <a href="pannello_utenti.php" class="btn btn-light mt-3">Dettagli &raquo;</a>
                                    </div>                                            
                                </div>                                            
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once("../views/vigaspotted_js.php");
    ?>
</body>
</html>