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
            <div class="row landing">
                <div class="offset-md-3"></div>
                <div class="col-md-6">
                    <img src="pictures/logo.png" class="rounded img-fluid" alt="" srcset="">
                    <div class="text-center">
                        <h1>Registrati</h1>
                    </div>
                </div>
                <div class="offset-md-3"></div>
                <div class="offset-md-3"></div>
                <div class="col-md-6">
                    <form action="php/signup.php" method="post">
                        <div class="row margin-bottom">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Nome</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                                    </div>                            
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Cognome</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cognome">                            
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Indirizzo email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="password" onchange="hashaPassword()">
                                    <input type="hidden" name="password" id="password_hash">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p>Sei uno/una:</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="studente">
                                    <label class="form-check-label" for="inlineRadio1">Studente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="docente">
                                    <label class="form-check-label" for="inlineRadio2">Docente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="altro">
                                    <label class="form-check-label" for="inlineRadio3">Altro</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php
                                    if (isset($_GET["status"])&&htmlspecialchars($_GET["status"]==1)){
                                        ?>
                                            <div class="alert alert-danger" role="alert">
                                                Puoi iscriverti solo con l'email scolastica
                                            </div>
                                        <?php
                                    }
                                ?>
                            </div>
                             
                        </div>


                        <button type="submit" class="btn btn-primary btn-block">Registrati</button>
                        <div class="text-center">
                            <p>Sei già registrato? <a href="accedi.php">Accedi qui!</a></p>
                        </div>                        
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