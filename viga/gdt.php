<?php
    class Attivita{
        public $nome;
        public $descrizione;
        public $docente;
        public $classe;

        function __construct($nome, $descrizione, $docente, $classe){
            $this->nome=$nome;
            $this->descrizione=$descrizione;
            $this->docente=$docente;
            $this->classe=$classe;
        }
    };

    $attivita_lista=array();
    array_push($attivita_lista,new Attivita(
        "Microplastic’s world",
        "Attività sulle microplastiche",
        "Pistaceci",
        "1I"
    ));
    array_push($attivita_lista,new Attivita(
        "L’isola che c’è",
        "Esecuzione, con relativa spiegazione, della canzone 'L'isola che c'è' (rielaborazione del testo de 'L'isola che non c'è' di Bennato), in riferimento all''Isola di plastica' che, a causa dei detriti plastici, si è formata nell'oceano Pacifico.",
        "Catalano",
        "3B"
    ));
    array_push($attivita_lista,new Attivita(
        "Gioco dell’oca a tema ambientale",
        "Il tradizionale gioco rielaborato a tema ambientale, in cui le caselle contengono quesiti relativi ai comportamenti sostenibili e alla conoscenza di temi e contenuti a carattere ecologico.",
        "Catalano",
        "3B"
    ));
    array_push($attivita_lista,new Attivita(
        "La finanza green: investimenti realmente verdi o operazione di Green Washing?",
        "Il ruolo della finanza: multinazionali che investono sulle energie rinnovabili",
        "Catalano",
        "3B"
    ));
    array_push($attivita_lista,new Attivita(
        "Mangia e bevi di gusto, nel modo giusto!",
        "Gli alimenti che consumiamo",
        "Colombo Rossana",
        "2E"
    ));
    array_push($attivita_lista,new Attivita(
        "L'angolo dei libri e dei propositi: cosa sei disposto a fare per il pianeta terra?",
        "Esposizione di libri, mappe, oggetti, esempi di alternative slogan e raccolta di propositi dei visitatori",
        "Colombo Rossana",
        "2E (con contributo di 1E e 2I)"
    ));
    array_push($attivita_lista,new Attivita(
        "Vieni a conoscere Eric",
        "Pillole video sulla salute del pianeta",
        "Dessì",
        "4L"
    ));
    array_push($attivita_lista,new Attivita(
        "Una zuppa di sasso",
        "Gioco",
        "Colotta",
        "5L"
    ));
    array_push($attivita_lista,new Attivita(
        "Chiedi alla Terra",
        "Attività del gruppo teatro sulla salute del pianeta",
        "Contento-Ughi",
        "Gruppo laboratorio teatro"
    ));
    array_push($attivita_lista,new Attivita(
        "Il pomodoro democratico",
        "Attività sui prodotti della terra a cura della cooperativa Paso Lavoro",
        "Colotta-Cassamagnago",
        "Coop Paso Lavoro"
    ));
    array_push($attivita_lista,new Attivita(
        "Paint the world",
        "Murales e gioco sul pianeta",
        "Colotta",
        "3H"
    ));
    array_push($attivita_lista,new Attivita(
        "Camminare = + Salute - Inquinamento",
        "Percorso di nordic walking",
        "Mauri Sabrina",
        ""
    ));
    array_push($attivita_lista,new Attivita(
        "La natura dall’alto",
        "Foto dall'alto con un drone a forme sul tema della Giornata della Terra",
        "Carlini",
        ""
    ));
    array_push($attivita_lista,new Attivita(
        "Green words o Le parole ecologiche",
        "Lettura di brani e testi scritti per un concorso sul tema della sotenibilità",
        "Contento",
        "3D"
    ));
    array_push($attivita_lista,new Attivita(
        "La nostra Terra",
        "Presentazione dei progetti per i manifesti sulla Giornata della Terra",
        "Ratti",
        "3I"
    ));
    array_push($attivita_lista,new Attivita(
        "Green print",
        "Mostra lavori Xilografia",
        "Dessì-Coco-Papini",
        "3I, 3L"
    ));
    array_push($attivita_lista,new Attivita(
        "Environment click",
        "Mostra di fotografia",
        "Coco",
        "4L"
    ));
    array_push($attivita_lista,new Attivita(
        "Ecocircolo",
        "Presentazione ricerca sulla sostenibilità ambientale",
        "Cicoria",
        "5C, 5G, 5H"
    ));
    array_push($attivita_lista,new Attivita(
        "Debate 'Gestione ambiente'",
        "Video su debate tenuto dagli studenti nelle scorse settimane",
        "Coco",
        "5I, 5L"
    ));

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
    <title>Giornata della terra - Vigainsider</title>
</head>
<body>
    <?php
        include_once("views/navbar.php");
    ?>

    <main>
        <div class="container landing">
            <h1>Giornata della terra 2022</h1>
            <small class="text-muted">Venerdì 22 aprile 2022, dalle 8 alle 14</small>
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h4>Di cosa si tratta</h4>
                    <p>La giornata della terra è un insieme di insieme di iniziative fatte per riflettere sulle tematiche e problematiche ambientali attuali. Quest'anno, dopo due anni di stop, torneranno le attività proposte dalle classi in presenza.</p>
                    <p>Scarica <a href="pictures/Locandina A4.pdf" target="_blank">qui</a> la locandina dell'evento.</p>
                </div>
                <div class="col-md-6 mt-5">
                    <h4>Orario e percorso delle classi</h4>
                    <p>Abbiamo preparato un percorso di attività per ogni classe della scuola. <a href="gdt_schedule.php">Accedi a questo link</a> per scoprire il percorso della tua classe </p>
                    <p>Se sei l'organizzatore di un'attività, scopri <a href="gdt_schedule_act.php">qui</a> la tua programmazione </p>
                    <a type="button" href="gdt_schedule.php" class="btn btn-primary btn-lg mt-3">Percorsi delle classi &raquo;</a>
                </div>
                <div class="col-md-12 mt-5">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Lista e descrizione delle attività</h4>
                        </div>
                        <?php
                            for ($i=0; $i < sizeof($attivita_lista); $i++) { 
                                ?>
                                <div class="<?php 
                                        // if ($i%2==0) echo "col-md-3";
                                        // else echo "col-md-6"; 
                                        echo "col-md-4"
                                    ?> mt-3">
                                    <div class="card card-notizia" style='background-color: #d5ebf6;'>
                                        <div class="card-body">
                                        <h5 class="card-title"><?php echo $attivita_lista[$i]->nome; ?></h5>
                                        <small class="text-muted">A cura di: <?php echo $attivita_lista[$i]->classe.", prof. ".$attivita_lista[$i]->docente; ?></small>
                                        <p class="card-text"><?php echo $attivita_lista[$i]->descrizione; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
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
