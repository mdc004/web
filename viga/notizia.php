<?php
    include_once("php/database_connessione.php");
    
    //query che recupera la notizia
    $id_notizia=htmlspecialchars($_GET["id_notizia"]);
    $back=htmlspecialchars($_GET["back"]);

    //QUERY titolo notizia
    $mysqli_statement=mysqli_prepare($mysqli,"SELECT titolo FROM notizia WHERE id = ? LIMIT 1");
    $notizia_titolo;
    if ($mysqli_statement!=false){
        mysqli_stmt_bind_param($mysqli_statement,"i",$id_notizia);
        mysqli_stmt_execute($mysqli_statement);
        mysqli_stmt_bind_result($mysqli_statement, $notizia_titolo);
        mysqli_stmt_fetch($mysqli_statement);
        mysqli_stmt_close($mysqli_statement);
    }

    //QUERY testo notizia
    $mysqli_statement=mysqli_prepare($mysqli,"SELECT testo FROM notizia WHERE id = ? LIMIT 1");
    $notizia_testo;
    if ($mysqli_statement!=false){
        mysqli_stmt_bind_param($mysqli_statement,"i",$id_notizia);
        mysqli_stmt_execute($mysqli_statement);
        mysqli_stmt_bind_result($mysqli_statement, $notizia_testo);
        mysqli_stmt_fetch($mysqli_statement);
        mysqli_stmt_close($mysqli_statement);
    }

    //QUERY data notizia
    $mysqli_statement=mysqli_prepare($mysqli,"SELECT data_pubblicazione FROM notizia WHERE id = ? LIMIT 1");
    $notizia_data;
    if ($mysqli_statement!=false){
        mysqli_stmt_bind_param($mysqli_statement,"i",$id_notizia);
        mysqli_stmt_execute($mysqli_statement);
        mysqli_stmt_bind_result($mysqli_statement, $notizia_data);
        mysqli_stmt_fetch($mysqli_statement);
        mysqli_stmt_close($mysqli_statement);
    }

    // $query="SELECT * FROM notizia WHERE id=".$id_notizia;
    // $lista_notizie=mysqli_query($mysqli,$query);
    // $riga=mysqli_fetch_row($lista_notizie);
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
        <div class="container landing">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo $back ?>">&larr; Torna indietro</a>
                    <h1>Notizia: <?php echo $notizia_titolo ?></h1>
                    <small class="text-muted">Pubblicata il: <?php echo $notizia_data ?></small>
                    <hr>
                    <p style="white-space: pre-line"><?php echo $notizia_testo ?></p>
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