<?php
    include_once("keys.php");
    include_once("funzioni_accesso.php");

    $mysqli = mysqli_connect( $SERVERNAME, $SERVER_USERNAME, $SERVER_PASSWORD, $SERVER_DATABASE) or die('Could not connect to server.' );

    sec_session_start();
    if(isset($_POST['email'], $_POST['password'])) { 
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']); // Recupero la password criptata.
        if(login($email, $password, $mysqli) == true) {
            $query="SELECT * FROM utente WHERE email='$email'";
            $risultato=mysqli_query($mysqli,$query);
            $riga=mysqli_fetch_row($risultato);
            if ($riga[8]=="1") {
                echo "ok, verificato";
                header('location: ../index.php');
            }
            else header('location: ../non_verificato.php');
        } else {
           // Login fallito
           header('Location: ../accedi.php?status=1');
        }
    }
    else { 
        // Le variabili corrette non sono state inviate a questa pagina dal metodo POST.
        echo 'Invalid Request';
    }

?>