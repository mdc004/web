# vigainsider

## Il sito degli studenti del Viganò

***

**INFORMAZIONI IMPORTANTI PER GLI SVILUPPATORI**

Di seguito la struttura HTML base di ogni file:

`
    <?php
        //Solo se necessari
        include_once("php/database_connessione.php");
        include_one("php/autenticazione_verifica.php")
    ?>

    <!DOCTYPE html>
    <html lang="en">
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

            </div>
        </main>

        <?php
            include_once("views/footer.php");
            include_once("views/include_js.php");
        ?>
    </body>
    </html>
`
Notare che nel main ci vuole *necessariamente* un div con le classi *container* e *landing*, altrimenti tutto il contenuto sarà disallineato e schiacciato contro la navbar.

***


La **DOCUMENTAZIONE** è disponibile a [questo link](https://www.mondialdoc.com/utenti/teob/documenti/6238f2efd17b3481f7555fd3), dove è sempre aggiornata, in alternativa in formato PDF sulla classroom del progetto
