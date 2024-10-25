<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once("php/keys.php");
    include_once("php/autenticazione_verifica.php");

    if ($autenticato==true){
        header("Location: index.php");
    }
    else{
        ?>
            <!DOCTYPE html>
            <html lang="it">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <?php
                    include_once("./views/include_css.php");
                ?>
                <title>Vigainsider</title>
            </head>
            <body>
                <?php
                    include_once("./views/navbar.php");
                ?>

                <main>
                    <div class="container">
                        <form action="php/signin.php" method="post">
                            <div class="row landing">
                                <div class="offset-md-4"></div>
                                <div class="col-md-4">
                                    <img src="pictures/logo.png" class="rounded img-fluid" alt="" srcset="">
                                    <div class="text-center">
                                        <h1>Accedi</h1>
                                        <?php
                                            if (isset($_GET["status"])&&htmlspecialchars($_GET["status"]==1)){
                                                ?>
                                                    <div class="jumbotron jumbotron-fluid">
                                                        <div class="container">
                                                            <h1 class="display-4">Errore</h1>
                                                            <p class="lead">Impossibile fare il login</p>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="offset-md-4"></div>
                                <div class="offset-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Indirizzo email</label>
                                        <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="password" oninput="hashaPassword()">
                                        <input type="hidden" name="password" id="password_hash">
                                    </div>
                                   <button type="submit" class="btn btn-primary btn-block">Accedi</button>
                                    <div class="text-center">
                                        <p>Non sei registrato? <a href="registrazione.php">Registrati qui!</a></p>
                                    </div>
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
?>