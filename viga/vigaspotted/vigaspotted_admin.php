<?php
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
                <title>I tuoi spotted - Vigaspotted</title>
            </head>
            <body>
                <?php
                    include_once("../views/vigaspotted_navbar.php");
                    include_once("../views/modal_spotted_cancella.php");
                ?>

                <main>
                    <div class="container-fluid landing">
                        <h1>Vigaspotted - Amministratore</h1>
                        <div class="row mt-4">
                            <?php
                                if (utente_ha_privilegio_lista($utente, array(PERMESSI_VIGASPOTTED_RISPOSTA_CANCELLA,PERMESSI_VIGASPOTTED_RISPOSTA_MODIFICA,PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA,PERMESSI_VIGASPOTTED_SPOTTED_CANCELLA,PERMESSI_VIGASPOTTED_SPOTTED_MODIFICA,PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA))){
                                    ?>
                                        <div class="col-md-6 mt-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    Gestione contenuti
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Accedi alla sezione di gestione di spotted e risposte</h5>
                                                    <p class="card-text">Puoi cancella, modificare e approvare gli spotted e le singole rispsote</p>
                                                    <a href="vigaspotted_admin_contenuti.php" class="btn btn-light">Gestione contenuti &raquo;</a>
                                                </div>                                            
                                            </div>                                            
                                        </div>
                                        <br>
                                    <?php
                                }
                            ?>

                            <?php
                                if (utente_ha_privilegio_lista($utente, array(PERMESSI_VIGASPOTTED_FILTRO_PAROLE_AGGIUNGI,PERMESSI_VIGASPOTTED_FILTRO_PAROLE_RIMUOVI))){
                                    ?>
                                        <div class="col-md-6 mt-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    Gestione filtro parole
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">Sezione di gestione del filtro sulle parole pubblicate</h5>
                                                    <p class="card-text">Puoi decidere quali espressioni sono vietate e quali richiedono una verifica</p>
                                                    <a href="vigaspotted_admin_parole.php" class="btn btn-light">Gestione parole &raquo;</a>
                                                </div>                                            
                                            </div>                                            
                                        </div>
                                        <br>
                                    <?php
                                }
                            ?>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <?php
                                if (utente_ha_privilegio_lista($utente,array(PERMESSI_VIGASPOTTED_SPOTTED_CANCELLA,PERMESSI_VIGASPOTTED_SPOTTED_MODIFICA))){
                                    ?>
                                        <div class="col-md-12 row">
                                            <div class="col-md-12">
                                                <h3>Ultimi spotted pubblicati</h3>
                                            </div>
                                            <?php
                                                $query="SELECT * FROM vigaspotted_spotted ORDER BY id DESC LIMIT 6";
                                                $lista_spotted=mysqli_query($mysqli,$query);
                                                $riga=mysqli_fetch_row($lista_spotted);
                                                while($riga!=null){
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
                                                                    <a href="spotted.php?id=<?php echo $riga[0] ?>&back=<?php echo $_SERVER["PHP_SELF"]; ?>" class="btn btn-light">Dettagli &raquo;</a>
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
                                    <?php


                                }
                            ?>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <h3>Nuovi spotted in attesa di approvazione
                            </div>
                        </div>
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
