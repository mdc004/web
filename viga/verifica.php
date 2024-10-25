<?php
    include_once("php/database_connessione.php");
    $verifica_stringa=htmlspecialchars(htmlspecialchars($_GET["codice"]));

    $query="SELECT * FROM utente_verifica WHERE stringa='$verifica_stringa' LIMIT 1";
    $risultato=mysqli_query($mysqli,$query);
    $riga=mysqli_fetch_row($risultato);

    if ($riga){
        $verifica_email=$riga[1];
    
        $query="UPDATE utente SET verificato=1 WHERE email='$verifica_email'";
        $risultato_utente_aggiorna=mysqli_query($mysqli,$query);
    }
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
     <title>Verifica email - Vigainsider</title>
 </head>
 <body>
     <?php
        include_once("views/navbar.php");
     ?>

     <main>
         <div class="container landing">
             <?php
                 if ($risultato_utente_aggiorna){
                    
                     ?>
                         <h1>Tutto a posto!</h1>
                         <p>Hai verificato la tua email e ora puoi usare tutte le funzioni disponibili con il tuo account!</p>
                         <a href="accedi.php">Accedi &raquo;</a>
                     <?php
                 }
                 else{
                     ?>
                         <h1>Impossibile verificare!</h1>
                         <p>Sembra che non ci siano corrispondenze nel database</p>
                         <a href="accedi.php">Accedi &raquo;</a>
                     <?php
                 }
             ?>
         </div>
     </main>

     <?php
         include_once("views/footer.php");
         include_once("views/include_js.php");
     ?>
 </body>
 </html>