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
    <title>Strumenti interattivi - Vigainsider</title>
</head>
<body>
    <?php
        include_once("views/navbar.php");
    ?>

    <main>
        <div class="container landing">
            <h1>Contenuti interattivi</h1>
            <small class="text-muted">Creati dagli studenti del Viganò</small>
            <div class="row landing">
                <div class="col-md-12">
                    <h4>Contenuti più popolari</h4>
                    <div class="row spazio">
                        <div class="col-md-6 text-center mt-3">
                            <img src="./pictures/mondialdoc.png" class="img-fluid" alt=""><br>
                            <a href="https://mondialdoc.com" target="_blank_">Mondialdoc (di Matteo Brambilla) &raquo;</a>
                        </div>
                        <!-- <div class="col-md-3 text-center">
                            <img src="./pictures/nero.jpg" class="img-fluid" alt=""><br>
                            <a href="vigaspotted/index.php">Vigaspotted &raquo;</a>
                        </div> -->
                        <div class="col-md-6 text-center mt-3">
                            <img src="./pictures/brickbreaker.png" class="img-fluid" alt=""><br>
                            <a href="assets/BrickBreaker/index.html" target="_blank_">Brick Breaker (di Simone Mazza) &raquo;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12">
                    <h4>Contenuti per categoria</h4>
                    <div class="row">
                        <div class="col-md-6 mt-3 text-center">
                            <div class="card card-notizia">
                                <div class="card-body">
                                <h5 class="card-title">Giochi</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="./pictures/brickbreaker.png" class="img-fluid" alt=""><br>
                                        <a href="assets/BrickBreaker/index.html" target="_blank_">Brick Breaker (di Simone Mazza) &raquo;</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 text-center">
                            <div class="card card-notizia">
                                <div class="card-body">
                                <h5 class="card-title">Scuola</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="./pictures/mondialdoc.png" class="img-fluid" alt=""><br>
                                        <a href="https://mondialdoc.com" target="_blank_">Mondialdoc (di Matteo Brambilla) &raquo;</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>