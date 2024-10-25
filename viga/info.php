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
    <title>Chi siamo - Vigainsider</title>
</head>
<body>
    <?php
        include_once("views/navbar.php");
    ?>

    <main>
        <div class="container landing">
            <h1>Chi siamo</h1>
            <!-- <small class="text-muted">Accessibili a tutti gli studenti della scuola</small> -->
            <div class="row mt-3">
                <div class="col-md-12 mt-3">
                    <h4>Il gruppo di Vigainsider</h4>
                    <p class="text-muted">Siamo i creatori di questo sito. Con una collaborazione fra varie classi dell'istituto, ci siamo preposti di portare alla luce quello che è oggi Vigainsider: il sito dagli studenti per gli studenti.</p>
                    <p class="text-muted">Si è occupato dell'amministrazione del sito Matteo Brambilla</p>
                    <p class="text-muted">Hanno ideato il sito, contribuito alla scelta delle tecnologie da utilizzare e sviluppato i contenuti: Matteo Brambilla, Mattia De Capitani, Gabriele Ferron, Tommaso Fumagalli, Simone Mazza, Andrea Pacchiani, Antonio Randazzo, Alessio Solagna, Kevin Takov, Smilla Tomadon</p>
                    <p class="text-muted">Hanno contribuito con idee, opinioni, suggerimenti, righe di codice o rispondendo ai sondaggi proposti: Gabriele Colombo, Tommaso Cunegatti, Riccardo Galizioli, Daniele Missaglia, Federico Pino e molti altri studenti del triennio informatico</p>
                    <p class="text-muted">Ha coordinato il progetto Pietro Codara</p>
                    <p class="text-muted">Ringraziamo la dirigenza e il collegio docenti del Viganò per aver approvato e reso possibile questo progetto. Ringraziamo l'ufficio tecnico, e in particolare Giovanni Marra, per l'aiuto dato nella fase di registrazione di questo dominio. Un grazie ai docenti che, in qualsiasi forma, ci hanno aiutato.</p>
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col-md-12 mt-3">
                    <h4>Contattaci</h4>
                    <p class="text-muted">Se hai idee, suggerimenti, commenti o altro da comunicarci scrivici a <a href="mailto:redazione@vigainsider.it" class="text-muted">redazione@vigainsider.it</a></p>
                    
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