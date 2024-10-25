<?php
require_once './vigaWeb/connectionDB.php';
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
    <title>Vigaweb - Vigainsider</title>
    <style>
        .card {
            cursor: pointer !important;
        }
    </style>
</head>

<body>
    <?php
    include_once("views/navbar.php");
    ?>
    <main>
        <div class="container landing">
            <div class="row justify-content-center mb-0">
                <img src="./vigaWeb/vigaweb.png" class="img-fluid">
            </div>
            <?php
            if (isset($_GET['news_id'])) {
                require_once './vigaWeb/source/' . $_GET['news_id'] . '.html';
            }
            ?>
            <div class="row m-0">
                <!-- <div class="col-md-6 mt-5">
                    <h4>Di cosa si tratta</h4>
                    <p>La giornata della terra è un insieme di insieme di iniziative fatte per riflettere sulle tematiche e problematiche ambientali attuali. Quest'anno, dopo due anni di stop, torneranno le attività proposte dalle classi in presenza.</p>
                    <p>Scarica <a href="pictures/Locandina A4.pdf" target="_blank">qui</a> la locandina dell'evento.</p>
                </div>
                <div class="col-md-6 mt-5">
                    <h4>Orario e percorso delle classi</h4>
                    <p>Abbiamo preparato un percorso di attività per ogni classe della scuola. <a href="gdt_schedule.php">Accedi a questo link</a> per scoprire il percorso della tua classe </p>
                    <p>Se sei l'organizzatore di un'attività, scopri <a href="gdt_schedule_act.php">qui</a> la tua programmazione </p>
                    <a type="button" href="gdt_schedule.php" class="btn btn-primary btn-lg mt-3">Percorsi delle classi &raquo;</a>
                </div> -->
                <div class="col-md-12 m-1">
                    <?php
                    // Check if logged
                    if (1 == 1) {
                    ?>
                        <hr class="m-5">
                        <div class="row justify-content-center">
                            <form action="./vigaWeb/insertNews.php" method="GET">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="news-title" class="form-label">Titolo</label>
                                            <input type="text" class="form-control" name="news-title" placeholder="Lorem Ipsum" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Descrizione</label>
                                            <textarea class="form-control" name="news-description" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="author" class="form-label">Autore</label>
                                            <input type="text" class="form-control" name="author" placeholder="admin">
                                        </div>
                                        <div class="mb-3">
                                            <label for="img-poster" class="form-label">Immagine di copertina</label>
                                            <input type="file" class="form-control" name="img-poster" placeholder="admin">
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        Inserisci
                                    </button>
                                </div>
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                    <hr class="m-5">
                    <div class="row justify-content-center">
                        <?php
                        if (!isset($_GET['news_id'])) {
                            $views = 0;
                            $result = $conn->query("SELECT * FROM notizie_vigaweb");
                            while ($row = $result -> fetch_assoc()) {
                                $viesRaw = $conn -> query("SELECT count(timestamp) as viewsNumber from viewsCounter where newsId = $");
                                $description = $row["descrizione"];
                                if (strlen($description) > 200) {
                                    $description = substr($description, 0, 200) . "...";
                                }
                        ?>
                                <div class="card mb-5 p-4 align-items-center shadow p-3 mb-5 bg-white border-0" onclick="location.href = './vigaweb.php?news_id=<?php echo $row["id"] ?>'">
                                    <div class="row" style="margin-bottom: 0px !important;">
                                        <div class="col-md-5">
                                            <img src="./vigaWeb/img/<?php echo $row["id"] ?>_poster" class="img-fluid rounded-start " alt="...">
                                        </div>
                                        <div class="col-md-7 d-flex align-items-center">
                                            <div class="card-body">
                                                <h2 class="card-title"><?php echo $row["titolo"] ?></h2>
                                                <p class="card-text"><?php echo $description ?></p>
                                                <blockquote class="blockquote mb-0">
                                                    <footer class="blockquote-footer">
                                                        <?php echo $row["id_autore"] ?>,
                                                        <cite title="Source Title">
                                                            <?php
                                                            echo date('D, d M Y', $row["data_creazione"]);
                                                            ?>
                                                        </cite>
                                                    </footer>
                                                </blockquote>
                                                <br>
                                                <br>
                                                <p class="card-text"><?php echo $views ?> views</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include_once 'views/footer.php';
    include_once 'views/include_js.php';
    ?>
</body>

</html>