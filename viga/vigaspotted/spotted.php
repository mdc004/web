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
                <title>Visualizza uno spotted - Vigaspotted</title>
            </head>
            <body>
                <?php
                    include_once("../views/vigaspotted_navbar.php");
                ?>

                <main>
                    <div class="container landing">
                        <?php
                            $spotted_id=htmlspecialchars($_GET["id"]);
                            $back=htmlspecialchars($_GET["back"]);

                            $query="SELECT * FROM vigaspotted_spotted WHERE id=$spotted_id LIMIT 1";
                            $risultato=mysqli_query($mysqli,$query);
                            $spotted=mysqli_fetch_row($risultato);

                            $query="SELECT * FROM vigaspotted_risposta WHERE id_spotted=$spotted_id";
                            $lista_risposte=mysqli_query($mysqli,$query);
                        ?>
                        <a href="<?php echo $back ?>">&larr; Torna indietro</a>
                        <h1>Spotted: <?php echo $spotted[2] ?></h1>
                        <?php
                            if ($spotted[7]==1) echo "<small class='text-muted'>Visibile a tutti</small>";
                            else echo "<small class='text-muted'>Bozza</small>";
                        ?>
                        <h3 class="mt-4">Descrizione</h3>
                        <p>
                            <?php echo $spotted[3] ?>
                        </p>
                        <hr>
                        <h5>Risposte  ·  <span class="text-muted"><?php echo $lista_risposte->num_rows ?></span></h5>
                        <?php
                            if ($spotted[1]!=$utente->email){
                                ?>
                                    <div class="form-group mt-4">
                                        <form action="../php/spotted_risposta_crea.php" method="POST">
                                            <label for="exampleInputEmail1">Scrivi la tua risposta</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <input type="submit" class="btn btn-primary mt-2" value="Rispondi">
                                            <input type="hidden" name="spotted_id" value="<?php echo $spotted_id ?>">
                                        </form>
                                    </div>
                                <?php
                            }

                            $riga=mysqli_fetch_row($lista_risposte);
                            while($riga!=null){
                                ?>
                                    
                                <?php
                                $riga=mysqli_fetch_row($lista_risposte);
                            }
                        ?>
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
