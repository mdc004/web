# Documentazione Vigainsider

###### Al 26/11/2022



## In generale

### Struttura generale del sito
- Le pagine da visualizzare (quelle che corrispondono ad un URL) sono tutte nella cartella principale  
- I file PHP secondari (che integrano sezioni o funzioni nelle pagine principali) sono nella cartella “PHP”
- Il sito è costruito per essere "modulare": ci sono alcuni file PHP fondamentali che permettono di estendere alcune funzioni comuni ad ogni pagina del sito in cui vengono importati (con il comando `include(...)`)
- La cartella `views` contiene dei file HTML che possono essere importati, come per i file PHP, dove necessario.
- La cartella `assets` contiene risorse utili, come i contenuti creati dagli studenti e visualizzabili nella sezione apposita.
- La parte grafica del sito è stata realizzata usando una versione leggermente personalizzata di Bootstrap 4.6 (tutte le proprità grafiche aggiuntive si trovano in `css/vigainsider.css`). Il tema `primary` è stato modificato direttamente nel CSS di Bootstrap

### File PHP importabili nelle altre pagine per estenderne le funzionalità
Ci sono due file fondamentali nella cartella PHP:
- `“database_connessione.php”` per connettersi al DB
- `“verifica_autenticazione.php”` per verificare se l’utente è loggato

**NOTA**: a loro volta, questi file utilizzano il file `keys.php`, che contiene i dati per la connessione al database di produzione e la dichiarazione di alcune variabili costanti utili in altre sezioni del sito.

Snippet di codice da usare nelle pagine in cui si vuole verificare l'accesso:

    <?php
        include_once("php/autenticazione_verifica.php");   
        include_once("php/database_connessione.php");

        if ($autenticato == true){
            //contenuto della pagina
        }
    ?>

Snippet di codice da usare per le pagine in cui è necessaria *solo* la connessione al DB:

    <?php
        include_once("php/database_connessione.php");

        //codice in PHP
    ?>


### Naming delle variabili
Ogni file PHP è chiamato seguendo la struttura: **elemento_funzione** (es: utente_cancella, utente_modifica, utente_tabella_crea).

In questo modo, nella cartella PHP, tutti i file sono già raggruppati per l'elemento che riguardano.


### Variabili importanti
*In `database_connessione.php`*:
- `$mysqli`: oggetto per la connessione al DB. **NOTA**: all'interno del sito è stata *sempre* usata la programmazione funzionale, quindi `$mysqli` viene usato come parametro passato alle funzioni che riguardano l'uso del DB

*In `verifica_autenticazione.php`*:
- `$utente`: oggetto dell'utente loggato con i seguenti attributi:
    - `$utente->id_utente`
    - `$utente->nome`
    - `$utente->cognome`
    - `$utente->email`
    - `$utente->password` (hashata con SHA512)
    - `$utente->salt`
    - `$utente->privilegi` (la spiegazione su come funzionano i privilegi è più in basso)
    - `$utente->tipo_utente` (0: studente, 1: docente, 2: altro)
- `$autenticato` variabile booleana che indica se l'utente è loggato o meno (necessario in tutte le pagine che richiedono l'accesso dell'utente)


## Sistema dei privilegi
### In generale
- Ogni utente, alla variabile $utente->privilegi, ha una stringa di 1 e 0, lunga tanti quanti sono i privilegi da controllare (il numero di privilegi potrebbe variare in futuro). Se un privilegio è a 0 **non** è assegnato, 1 altrimenti
- Ad ogni carattere, in base al suo indice nella stringa, corrisponde un privilegio preciso.
- Queste informazioni sono definite tutte in `$keys.php`, in cui sono dichiarate le costanti
- Attualmente, i privilegi si possono gestire (assegnare e revocare) in modo preciso dal pannello amministratori del sito


### Lista dei privilegi attualmente presenti
<table>
    <thead>
        <tr>
            <td>Indirizzo</td>
            <td>Privilegio</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>PERMESSI_VIGAINSIDER_AMMINISTRATORE</td>
        </tr>
        <tr>
            <td>1</td>
            <td>PERMESSI_VIGAINSIDER_NOTIZIA_CREA</td>
        </tr>
        <tr>
            <td>2</td>
            <td>PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA</td>
        </tr>
        <tr>
            <td>3</td>
            <td>PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA</td>
        </tr>
        <tr>
            <td>4</td>
            <td>PERMESSI_VIGAINSIDER_EVENTO_CREA</td>
        </tr>
        <tr>
            <td>5</td>
            <td>PERMESSI_VIGAINSIDER_EVENTO_MODIFICA</td>
        </tr>
        <tr>
            <td>6</td>
            <td>PERMESSI_VIGAINSIDER_EVENTO_CANCELLA</td>
        </tr>
        <tr>
            <td>7</td>
            <td>PERMESSI_VIGAINSIDER_SVILUPPATORE</td>
        </tr>
        <tr>
            <td>8</td>
            <td>PERMESSI_VIGAINSIDER_CONTENUTO_CREA</td>
        </tr>
        <tr>
            <td>9</td>
            <td>PERMESSI_VIGAINSIDER_CONTENUTO_MODIFICA</td>
        </tr>
        <tr>
            <td>10</td>
            <td>PERMESSI_VIGAINSIDER_CONTENUTO_CANCELLA</td>
        </tr>
        <tr>
            <td>11</td>
            <td>PERMESSI_VIGAINSIDER_SONDAGGI_CREA</td>
        </tr>
        <tr>
            <td>12</td>
            <td>PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA</td>
        </tr>
        <tr>
            <td>13</td>
            <td>PERMESSI_VIGAINSIDER_SONDAGGI_CANCELLA</td>
        </tr>
        <tr>
            <td>14</td>
            <td>PERMESSI_VIGASPOTTED_SPOTTED_MODIFICA</td>
        </tr>
        <tr>
            <td>15</td>
            <td>PERMESSI_VIGASPOTTED_SPOTTED_CANCELLA</td>
        </tr>
        <tr>
            <td>16</td>
            <td>PERMESSI_VIGASPOTTED_SPOTTED_APPROVA</td>
        </tr>
        <tr>
            <td>17</td>
            <td>PERMESSI_VIGASPOTTED_RISPOSTA_MODIFICA</td>
        </tr>
        <tr>
            <td>18</td>
            <td>PERMESSI_VIGASPOTTED_RISPOSTA_CANCELLA</td>
        </tr>
        <tr>
            <td>19</td>
            <td>PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA</td>
        </tr>
        <tr>
            <td>20</td>
            <td>PERMESSI_VIGASPOTTED_FILTRO_PAROLE_AGGIUNGI</td>
        </tr>
        <tr>
            <td>21</td>
            <td>PERMESSI_VIGASPOTTED_FILTRO_PAROLE_RIMUOVI</td>
        </tr>
    </tbody>
</table>

Notate che la gestione dei permessi può essere molto capillare

### Verificare un privilegio
- La verifica dei privilegi avviene usando la funzione `utente_ha_privilegio($utente,privilegio)`, dove
    - `$utente` è la variabile che contiene tutte le informazioni sull'utente attualmente loggato, dichiarata e inizializzata automaticamente al momento del login
    - `privilegio` è una delle costanti riportate nella tabella sopra. **NOTA**: in PHP, le costanti si richiamano con il loro nome, *senza* il dollaro davanti.

Snippet da usare per la verifica di un privilegio:

    <?php
        include_once("php/autenticazione_verifica.php");   
        include_once("php/database_connessione.php");

        if ($autenticato == true){
            if (utente_ha_privilegio($utente,COSTANTE)){
                //codice delle cose da fare quando si verifica che l'utente gode dei privilegi necessari
            }
            else{
                //cose da fare quando si verifica che l'utente non gode dei privilegi
            }
        }
    ?>



## Struttura HTML e PHP base di una pagina
Per comodità, è consigliabile usare la seguente struttura di base:
<?php
    include_once("php/database_connessione.php");
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
            <title>TITOLO PAGINA - Vigainsider</title>
        </head>
        <body>
            <?php
                include_once("views/navbar.php");
            ?>

            <main>
                <div class="container">
                    
                </div>
            </main>

            <?php
                include_once("views/footer.php");
                include_once("views/include_js.php");
            ?>
        </body>
    </html>

**NOTA**: il div nel main deve avere necessariamente le classi `container` e `landing`, altrimenti il contenuto sarà disallineato e schiacciato contro la navbar


## Stato attuale del sito
Attualmente, il sito ha una struttura di base funzionante. Praticamente tutte le sezioni aggiuntive sono ancora in via di sviluppo. Di seguito una tabella che riporta sinteticamente lo stato delle cose:

<table>
    <thead>
        <tr>
            <td>Sezione</td>
            <td>Stato</td>
            <td>Eventuali cose mancanti</td>
            <td>Note</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Registrazione</td>
            <td>Completa</td>
            <td></td>
            <td>Creata seguendo l'esempio inviato dal prof. Codara sulla Classroom dell'anno scorso</td>
        </tr>
        <tr>
            <td>Login</td>
            <td>Completa </td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Notizie</td>
            <td>Parziale</td>
            <td>Modiica notizie già create</td>
            <td>La Cancellazione causa qualche problema</td>
        </tr>
        <tr>
            <td>Sondaggi</td>
            <td>Abbozzata</td>
            <td>Parte di compilazione degli utenti (la parte di creazione dovrebbe essere completa)</td>
            <td></td>
        </tr>
        <tr>
            <td>Vigaspotted</td>
            <td>Abbozzata</td>
            <td>Spotted in tendenza, spotted più recenti, visualizzazione spotted, risposta agli spotted altru, gestione dei contenuti (riservata agli amministratori, in cui si possono impostare delle regole sui post caricati dagli utenti)</td>
            <td></td>
        </tr>
    </tbody>
</table>
