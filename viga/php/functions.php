<?php
// Funzione per la creazione di una sessione protetta
function sec_session_start() {
   $session_name = 'sec_session_id'; // Imposta un nome di sessione
   $secure = false; // Imposta il parametro a true se vuoi usare il protocollo 'https'.
   $httponly = true; // Questo impedirà ad un javascript di essere in grado di accedere all'id_utente di sessione.
   ini_set('session.use_only_cookies', 1); // Forza la sessione ad utilizzare solo i cookie.
   $cookieParams = session_get_cookie_params(); // Legge i parametri correnti relativi ai cookie.
   session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly); 
   session_name($session_name); // Imposta il nome di sessione con quello prescelto all'inizio della funzione.
   session_start(); // Avvia la sessione php.
   session_regenerate_id(); // Rigenera la sessione e cancella quella creata in precedenza.
}

function login($email, $password, $mysqli) {
   // Usando statement sql 'prepared' non sarà possibile attuare un attacco di tipo SQL injection.
   // ...ma noi non lo usiamo!
   $sql = "SELECT id_utente, email, password, salt FROM utente WHERE email = '$email' LIMIT 1";
   if ($result = mysqli_query($mysqli,$sql)) { 
      $row=mysqli_fetch_array($result);
      // recupera il risultato della query e lo memorizza nelle relative variabili.
      $id_utente=$row["id_utente"];
      $email=$row["email"];
      $db_password=$row["password"];
      $salt=$row["salt"]; 
      $password = hash('sha512', $password.$salt); // codifica la password usando una chiave univoca.
      echo "<script>console.log(\"".$password."\")</script>";
      if(mysqli_num_rows($result) == 1) { // se l'utente esiste
         // verifichiamo che non sia disabilitato in seguito all'esecuzione di troppi tentativi di accesso errati.
         if(checkbrute($id_utente, $mysqli) == true) { 
            echo "<script>console.log(\"Brute force\")</script>";
            // Account disabilitato
            // Invia un e-mail all'utente avvisandolo che il suo account è stato disabilitato.
            return false;
         } else {
         if($db_password == $password) { // Verifica che la password memorizzata nel database corrisponda alla password fornita dall'utente.
            // Password corretta!            
            $user_browser = $_SERVER['HTTP_USER_AGENT']; // Recupero il parametro 'user-agent' relativo all'utente corrente.

            $id_utente = preg_replace("/[^0-9]+/", "", $id_utente); // ci proteggiamo da un attacco XSS
            $_SESSION['id_utente'] = $id_utente; 
            $email = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $email); // ci proteggiamo da un attacco XSS
            $_SESSION['email'] = $email;
            $_SESSION['login_string'] = hash('sha512', $password.$user_browser);
            // Login eseguito con successo.
            return true;    
         } else {
            echo "<script>console.log(\"Pasword sbagliata\")</script>";
            // Password incorretta.
            // Registriamo il tentativo fallito nel database.
            $now = time();
            echo "INSERT INTO login_attempts (id_utente, time) VALUES ('$id_utente', '$now')"; // Da commentare quando "in produzione"
            echo "<br><br>";
            mysqli_query($mysqli,"INSERT INTO login_attempts (id_utente, time) VALUES ('$id_utente', '$now')");
            return false;
         }
      }
      } else {
         // L'utente inserito non esiste.
         return false;
      }
   }
}

function checkbrute($id_utente, $mysqli) {
   // Recupero il timestamp
   $now = time();
   // Vengono analizzati tutti i tentativi di login a partire dalle ultime due ore.
   $valid_attempts = $now - (2 * 60 * 60); 
   $sql="SELECT time FROM login_attempts WHERE id_utente = $id_utente AND time > '$valid_attempts'";
   if ($result = mysqli_query($mysqli,$sql)) { 
      // Verifico l'esistenza di più di 5 tentativi di login falliti.
      if(mysqli_num_rows($result) > 5) {
         return true;
      } else {
         return false;
      }
   }
}

function login_check($mysqli) {
   // Verifica che tutte le variabili di sessione siano impostate correttamente
   if(isset($_SESSION['id_utente'], $_SESSION['email'], $_SESSION['login_string'])) {
      $id_utente = $_SESSION['id_utente'];
      $login_string = $_SESSION['login_string'];
      $email = $_SESSION['email'];     
      $user_browser = $_SERVER['HTTP_USER_AGENT']; // reperisce la stringa 'user-agent' dell'utente.
      $sql = "SELECT password FROM utente WHERE id_utente = $id_utente LIMIT 1";
	 if ($result = mysqli_query($mysqli,$sql)) {  
        if(mysqli_num_rows($result) == 1) { // se l'utente esiste
           $row=mysqli_fetch_array($result);
		   $password=$row["password"]; // recupera le variabili dal risultato ottenuto.
		   $login_check = hash('sha512', $password.$user_browser);
           if($login_check == $login_string) {
              // Login eseguito!!!!
              return true;
           } else {
              //  Login non eseguito
              return false;
           }
        } else {
            // Login non eseguito
            return false;
        }
     } else {
        // Login non eseguito
        return false;
     }
   } else {
     // Login non eseguito
     return false;
   }
}

function execute_query($mysqli,$query){
   return mysqli_query($mysqli, $query);
}

?>