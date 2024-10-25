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
            <h1>Non hai ancora verificato il tuo account</h1>
            <p>Prima di poter usare Vigainsider devi verificare il tuo account usando l'email che abbiamo inviato al tuo indirizzo.</p>
            <a href="accedi.php">Torna alla pagina di accesso &raquo;</a>
        </div>
    </main>

    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>