<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include_once("autenticazione_verifica.php");

    if ($autenticato==true){
        $spotted_titolo=htmlspecialchars($_POST["spotted_titolo"]);
        $spotted_descrizione=htmlspecialchars($_POST["spotted_descrizione"]);
        $spotted_sesso;
        if (htmlspecialchars($_POST["spotted_sesso"]=="maschio")) $spotted_sesso=1;
        else $spotted_sesso=2;
        $spotted_anonimo=htmlspecialchars($_POST["spotted_anonimo"]);
        $spotted_pubblicazione=htmlspecialchars($_POST["spotted_pubblicazione"]);

        $rimpiazza="_";
        echo $rimpiazza."<br>";

        str_replace($rimpiazza,'\'',$spotted_titolo);
        str_replace($rimpiazza,'\'',$spotted_descrizione);

        echo $spotted_descrizione;
        echo $spotted_titolo;
    
        if ($spotted_pubblicazione=="Pubblica"){
            $query="INSERT INTO vigaspotted_spotted (email_creatore,titolo,testo,voti,sesso,anonimo,visibile) VALUES ('$utente->email','".$spotted_titolo."','".$spotted_descrizione."',0,'$spotted_sesso',$spotted_anonimo,1)";
            $creazione=mysqli_query($mysqli,$query);
            if ($creazione) header("Location: ../vigaspotted/index.php");
        }
    }
    else header("Location: ../accedi.php");
?>