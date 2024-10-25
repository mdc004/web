<?php
    // $servername = "localhost";
    // $username = "vigainsider";
    // $password_server = "oH])Q4s6Vyr/SL*h";
    // $database = "vigainsider";

    include("keys.php");

    $nome=htmlspecialchars($_POST["nome"]);
    $cognome=htmlspecialchars($_POST["cognome"]);
    $email=htmlspecialchars($_POST["email"]);
    $password=htmlspecialchars($_POST["password"]);
    $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
    $password = hash('sha512', $password.$random_salt);
    $email_verifica=explode("@",$email);

    if ($email_verifica[1]=="issvigano.org"){
        $conn = new mysqli($SERVERNAME, $SERVER_USERNAME, $SERVER_PASSWORD, $SERVER_DATABASE);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            $query_utente = "INSERT INTO utente (nome,cognome,email,password,salt,privilegi,tipo_utente,verificato)
            VALUES (\"".$nome."\",\"".$cognome."\",\"".$email."\",\"".$password."\",\"".$random_salt."\",000000000000000000,0,0)";
    
            if ($conn->query($query_utente) === TRUE) {
                $email_stringa=hash('sha512',$email.date("Y-m-d H:m:i"));
                $email_messaggio="Ciao $nome, benvenuto in Vigainsider. Per poter utilizzare l'account che hai appena creato devi verificare la tua email usando il seguente link: https://www.vigainsider.it/verifica.php?codice=$email_stringa";
                $email_headers="From: benvenuto@vigainsider.it"; 
                mail($email,"Benvenuto in Vigainsider",$email_messaggio,$email_headers);
                
                $query_verifica="INSERT INTO utente_verifica(email_utente,stringa) VALUES('$email','$email_stringa')";
                if ($conn->query($query_verifica)){
                    header("Location: ../accedi.php");
                }
    
            } else {
                header("Location: ../registrazione.php");
            }
    
            echo "non fatto";
        }
    }
    else header("Location: ../registrazione.php?status=1");

?>