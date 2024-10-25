<?php
    include_once("php/database_connessione.php");
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
            <div class="row landing">
                <!-- <div class="col-md-8">
                    <img src="pictures/vigaspotted.png" alt="" srcset="" class="rounded img-fluid">
                </div>
                <div class="col-md-4">
                    <h1>VIGASPOTTED è ora disponibile!</h1>
                    <h4>Finalmente potrai sapere l'insta di chi ti sta attorno</h4>

                    <div class="align-bottom">
                        <button class="btn btn-primary btn-bock">Provalo subito &raquo;</button>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <?php include_once("views/carousel.php") ?>
                </div>
            </div>

            
            <hr>
            <div class="">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h1>Ultime notizie</h1>
                        <small class="text-muted">Dalla più recente alla più vecchia</small>
                    </div>
                    <?php
                        $query="SELECT * FROM notizia WHERE id>=0 ORDER BY id DESC LIMIT 4";
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
                                        <a href="<?php echo "notizia.php?id_notizia=$riga[0]&back=index.php" ?>" class="btn btn-light">Notizia completa &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            $riga=mysqli_fetch_row($lista_notizie);
                        }
                    ?>
                </div> 
            </div>
        

            <!-- <div class="spazio">
                <h1 class="text-center">
                    Eventi locali
                </h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="pictures/evento.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Nome dell'evento</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-light">Maggiori informazioni &raquo;</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="pictures/evento.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Nome dell'evento</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-light">Maggiori informazioni &raquo;</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="pictures/evento.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Nome dell'evento</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-light">Maggiori informazioni &raquo;</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div> -->

            <!-- <hr>

            <div class="spazio">
                <h1 class="text-center">
                    Contenuti interattivi
                </h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 1</h5>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 2</h5>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 3</h5>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 4</h5>
                            </div>
                          </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 5</h5>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 6</h5>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 7</h5>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white">
                            <img src="pictures/strumento.png" class="card-img" alt="...">
                            <div class="card-img-overlay">
                              <h5 class="card-title fondo">Strumento 8</h5>
                            </div>
                          </div>
                    </div>
                </div>
            </div> -->
        </div>
    </main>

    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>