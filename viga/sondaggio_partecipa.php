<?php
include_once("php/database_connessione.php");
include_once("php/autenticazione_verifica.php");

if ($autenticato) {
    $sondaggio_id = htmlspecialchars($_GET["id"]);
    $query = "SELECT * FROM sondaggio WHERE id=$sondaggio_id";
    $risultato = mysqli_query($mysqli, $query);
    $sondaggio = mysqli_fetch_row($risultato);
    $query = "SELECT * FROM sondaggio_domanda WHERE id_sondaggio=$sondaggio_id";
    $lista_domande = mysqli_query($mysqli, $query);
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
                <a href="sondaggi.php">&larr; Torna ai sondaggi</a>
                <h1>Sondaggio: <?php echo $sondaggio[2] ?></h1>
                <p class="text-muted">Descrizione: <?php echo $sondaggio[3] ?></p>
                <form action="./php/sondaggio_invia.php?sondaggio_id=<?php echo $sondaggio_id ?>" method="POST">
                <?php
                $riga = mysqli_fetch_row($lista_domande);
                while ($riga != null) {
                ?>
                    <div class="card card-notizia mt-3">
                        <div class="card-body">
                            <div class="card-title">
                                <?php echo $riga[3]; ?>
                            </div>
                            <?php
                            // se tipo è uguale a zero: radio input
                            if ($riga[4] == 0) {
                                // $riga[0] è l'id domanda
                                echo "<div id='div_domanda_$riga[0]'<br/></div>";
                                $lista_opzioni = explode(";", $riga[5]);
                                printOption("radio", $lista_opzioni, $riga[0]);
                            }
                            ?>
                        
                        </div>
                    </div>
                <?php
                    $riga = mysqli_fetch_row($lista_domande);
                }
                ?>
                <br>
            <button type="submit" class="btn btn-primary align-right">Invia</button>
            </form>
            </div>
        </main>

        <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
        ?>
    </body>

    </html>
<?php
}
else
    header("location: accedi.php");

function checkImage($opzione){
    $check_command = substr($opzione, 0, 10); //Salva i primi 10 caratteri presenti nella variabile $opzione
    $immagine = "/immagine("; //Inizio del comando per inserimento di immagini

    $url = "";
    $char = "";
    $j = 9;

    if ($check_command == $immagine) //Controllo se la stringa inserita inizia con "/immagine("
    {
        for ($i = 10; $i < strlen($opzione); $i++) {
            $char = substr($opzione, $i, $i - $j);
            if ($char == ')') {
                break;
            }
            $url = $url . $char;
            $j++;
        }
        echo '<img style="" src="' . $url . '">';
    }else return $opzione;
}

function printOption($type, $array, $id_domanda)
{
    for ($i = 0; $i < sizeof($array); $i++) {
        echo '<div class="form-check">
                <input class="form-check-input" type="' . $type . '" name="sondaggio_risposte[]" value="' . $id_domanda[0].';'.$array[$i].'">
                <label class="form-check-label">' . checkImage($array[$i]) . '</label></div>';
    }
}

?>