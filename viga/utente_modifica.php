<?php
    include_once("php/autenticazione_verifica.php");
    include_once("php/database_connessione.php");
    include_once("php/keys.php");

    if($autenticato == true && utente_ha_privilegio($utente,PERMESSI_VIGAINSIDER_AMMINISTRATORE)) {
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
                    <title>Modifica utente - Vigainsider</title>
                </head>
                <body>
                    <?php
                        include_once("views/navbar.php");

                        $result;
                        if ($result = mysqli_query($mysqli, "SELECT id_utente,nome,cognome,email,privilegi FROM utente WHERE id_utente=".htmlspecialchars($_GET["id"]))) {
                            $utente_modifica=mysqli_fetch_object($result);                        
                        }
                        else {
                            $result="errore";
                        }
                    ?>

                    <main>
                        <div class="container landing">
                            <a href="pannello_utenti.php">&LeftArrow; Pannello utenti</a>
                            <div class="card">
                                <div class="card-header">
                                    Modifica utente
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Id utente: <?php echo $utente_modifica->id_utente; ?></h5>
                                    <form action="php/utente_modifica.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Nome</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $utente_modifica->nome; ?>" name="nome_modifica">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Cognome</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $utente_modifica->cognome; ?>" name="cognome_modifica">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $utente_modifica->email; ?>" name="email_modifica">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="password_modifica">
                                                    <label class="form-check-label" for="exampleCheck1">Reimposta password (l'utente ne imposterà una nuova al prossimo accesso)</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-12">
                                                <label for="">Privilegi</label>
                                                <select class="custom-select" name="privilegi_modifica">
                                                    <option value="null">Seleziona privilegi</option>
                                                    <option value="0" <?php if($utente_modifica->privilegi==0) echo "selected" ?>>Utente senza privilegi</option>
                                                    <option value="1" <?php if($utente_modifica->privilegi==1) echo "selected" ?>>Utente autorizzato a creare notizie e eventi sul sito</option>
                                                    <option value="2" <?php if($utente_modifica->privilegi==2) echo "selected" ?>>Utente autorizzato a controllare tutte le notizie e gli eventi sul sito</option>
                                                    <option value="8" <?php if($utente_modifica->privilegi==8) echo "selected" ?>>Utente sviluppatore</option>
                                                    <option value="10" <?php if($utente_modifica->privilegi==10) echo "selected" ?>>Amministratore di sistema</option>
                                                </select>
                                            </div> -->
                                            <div class="col-md-12">
                                                <p>Privilegi</p>
                                                <div class="row">
                                                    <?php
                                                        $permessi_numero=sizeof($permessi_lista);
                                                        $permessi_chiavi=array_keys($permessi_lista);
                                                        $colonne=ceil($permessi_numero/10);
                                                        $dimensione_colonna=12/$colonne;
                                                        $contatore_stampe=0;

                                                        for ($i=1; $i <= $colonne; $i++) { 
                                                            ?>
                                                                <div class="col-md-<?php echo $dimensione_colonna?>">
                                                                    <?php
                                                                    $limite_j=$contatore_stampe+10;
                                                                        for ($j=$contatore_stampe; $j < $limite_j; $j++) { 
                                                                            if ($permessi_lista[$j]!=null){
                                                                                ?>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input privilegi-vigainsider" type="checkbox" value="<?php echo $permessi_chiavi[$j] ?>" name="privilegi_modifica[]" id="defaultCheck2" <?php if (utente_ha_privilegio($utente_modifica,$j)) echo "checked"; ?>>
                                                                                        <label class="form-check-label" for="defaultCheck2">
                                                                                            <?php
                                                                                                echo $permessi_lista[$j];
                                                                                            ?>
                                                                                        </label>
                                                                                    </div>

                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            <?php
                                                                            $contatore_stampe+=1;
                                                                        }
                                                                    ?>
                                                                </div>
                                                            <?php

                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-light" id="bottoneTuttiPrivilegi">Seleziona tutti i privilegi</button>
                                                <button class="btn btn-light" id="bottoneNoPrivilegi">Deseleziona tutti i privilegi</button>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <button type="submit" class="btn btn-primary">Modifica utente</button>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_iniziale" value="<?php echo $utente_modifica->id_utente; ?>">
                                        <input type="hidden" name="nome_iniziale" value="<?php echo $utente_modifica->nome; ?>">
                                        <input type="hidden" name="cognome_iniziale" value="<?php echo $utente_modifica->cognome; ?>">
                                        <input type="hidden" name="email_iniziale" value="<?php echo $utente_modifica->email; ?>">
                                        <input type="hidden" name="privilegi_iniziale" value="<?php echo $utente_modifica->privilegi; ?>">
                                    </form>

                                </div>
                            </div>
                        </div>                        
                    </main>

                    <?php
                        include_once("views/include_js.php");
                    ?>
                </body>
            </html>

        <?php
    }
    else {
        header("Location: accedi.php");
    }
?>