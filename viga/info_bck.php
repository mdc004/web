<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vigansider</title>
    <?php
        include_once("views/include_css.php");
    ?>
    <style>
        .img2{
            float:left;
        }
        h3{
            text-align:center;
        }
        img{
            box-shadow: gray 10px 10px 10px;
        }
    </style>
</head>
<body>
    <?php
        include("views/navbar.php");
    ?>
    <br>
    <br>
    <br>
    <br>

<h1 class="display-1" style="text-align:center;">Chi siamo</h1><br>

    <div class="container">
    <div class="row">
        <div class="col-sm">
                <div class="col-sm"><img src="pictures/nero.jpg" class="rounded mx-auto d-block img-fluid"></div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="float:left;">Il gruppo di Vigainsider</h2>
                </div>
                <div class="col-md-12">
                    <p style="float:left;">Siamo i creatori di questo sito. Con una collaborazione fra varie classi dell'istituto, ci siamo preposti di portare alla luce quello che è oggi Vigainsider: il sito dagli studenti per gli studenti.</p>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
                <div class="col-sm"><img src="pictures/nero.jpg" class="rounded mx-auto d-block img-fluid"></div>
                <div class="col-sm"><img src="pictures/nero.jpg" class="rounded mx-auto d-block img-fluid"></div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h3>I componenti</h3>
                <p style="text-align:center;">Hanno partecipato sia professori sia studenti di varie classi, in particolare dell'informatico. Nella foto sopra, da sinistra: Brambilla Matteo, Tomadon Smilla, Fumagalli Tommaso, Ferron Gabriele, (ecc)</p>
            </div>
            <div class="col-sm">
                <h3>Il nostro lavoro</h3>
                <p style="text-align:center;">Abbiamo lavorato sia in backend sia in frontend, con strumenti come Node.js, PHP, Javascript, HTML e CSS.</p>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <h3>Come contattarci?</h3>
            </div>
        </div>

        <div class="row">
            <table class="table" style="border:1px solid #003366;">
                <thead style="background-color:#003366;color:white">
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Mail</th>
                    <th>Social</th>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <td>Matteo</td>
                        <td>Brambilla</td>
                        <td>brambilla.matteo@issvigano.org</td>
                        <td>
                            <ul class="list-group">
                                <li>Instagram: </li>
                                <li>Youtube: </li>
                                <li>Facebook: </li>
                                <li>Telegram: </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>Gabriele</td>
                        <td>Ferron</td>
                        <td>ferron.gabriele@issvigano.org</td>
                        <td>
                            <ul class="list-group">
                                <li>Instagram: </li>
                                <li>Youtube: </li>
                                <li>Facebook: </li>
                            </ul>
                        </td>
                    </tr>

                    <tr class="table-primary">
                        <td>Tommaso</td>
                        <td>Fumagalli</td>
                        <td>fumagalli.tommaso@issvigano.org</td>
                        <td>
                            <ul class="list-group">
                                <li>Instagram: </li>
                                <li>Youtube: </li>
                                <li>Facebook: </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>