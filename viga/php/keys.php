<?php
    $SERVERNAME = "localhost";
    $SERVER_USERNAME = "root";
    $SERVER_PASSWORD = "";
    $SERVER_DATABASE = "Sql1591207_1";

    $SERVER_USERNAME_AMMINISTRATORE = "vigainsider_amministratore";
    $SERVER_PASSWORD_AMMINISTRATORE = "p1]orYj4Ln)jbsdi";

    //PERMESSI DI VIGAINSIDER GENERALI
    //define("PERMESSI_VIGAINSIDER_",0);
    define("PERMESSI_VIGAINSIDER_AMMINISTRATORE",0);
    define("PERMESSI_VIGAINSIDER_NOTIZIA_CREA",1);
    define("PERMESSI_VIGAINSIDER_NOTIZIA_MODIFICA",2);
    define("PERMESSI_VIGAINSIDER_NOTIZIA_CANCELLA",3);
    define("PERMESSI_VIGAINSIDER_EVENTO_CREA",4);
    define("PERMESSI_VIGAINSIDER_EVENTO_MODIFICA",5);
    define("PERMESSI_VIGAINSIDER_EVENTO_CANCELLA",6);
    define("PERMESSI_VIGAINSIDER_SVILUPPATORE",7);
    define("PERMESSI_VIGAINSIDER_CONTENUTO_CREA",8);
    define("PERMESSI_VIGAINSIDER_CONTENUTO_MODIFICA",9);
    define("PERMESSI_VIGAINSIDER_CONTENUTO_CANCELLA",10);
    define("PERMESSI_VIGAINSIDER_SONDAGGI_CREA",11);
    define("PERMESSI_VIGAINSIDER_SONDAGGI_MODIFICA",12);
    define("PERMESSI_VIGAINSIDER_SONDAGGI_CANCELLA",13);

    //PERMESSI DI VIGASPOTTED
    //define("PERMESSI_VIGASPOTTED_",0);
    define("PERMESSI_VIGASPOTTED_SPOTTED_MODIFICA",14);
    define("PERMESSI_VIGASPOTTED_SPOTTED_CANCELLA",15);
    define("PERMESSI_VIGASPOTTED_SPOTTED_APPROVA",16);
    define("PERMESSI_VIGASPOTTED_RISPOSTA_MODIFICA",17);
    define("PERMESSI_VIGASPOTTED_RISPOSTA_CANCELLA",18);
    define("PERMESSI_VIGASPOTTED_RISPOSTA_APPROVA",19);
    define("PERMESSI_VIGASPOTTED_FILTRO_PAROLE_AGGIUNGI",20);
    define("PERMESSI_VIGASPOTTED_FILTRO_PAROLE_RIMUOVI",21);

    $permessi_lista=array(
        0 => 'VIGAINSIDER amministratore',
        1 => 'NOTIZIA crea',
        2 => 'NOTIZIA modifica',
        3 => 'NOTIZIA cancella',
        4 => 'EVENTO crea',
        5 => 'EVENTO modifica',
        6 => 'EVENTO cancella',
        7 => 'VIGAINSIDER SVILUPPATORE',
        8 => 'CONTENUTO crea',
        9 => 'CONTENUTO modifica',
        10 => 'CONTENUTO cancella' ,
        11 => 'SONDAGGIO crea' ,
        12 => 'SONDAGGIO modifica' ,
        13 => 'SONDAGGIO cancella' ,
        14 => 'VIGASPOTTED SPOTTED modifica' ,
        15 => 'VIGASPOTTED SPOTTED cancella' ,
        16 => 'VIGASPOTTED SPOTTED approva' ,
        17 => 'VIGASPOTTED RISPOSTA modifica' ,
        18 => 'VIGASPOTTED RISPOSTA cancella' ,
        19 => 'VIGASPOTTED RISPOSTA approva' ,
        20 => 'VIGASPOTTED FILTRO PAROLE aggiungi' ,
        21 => 'VIGASPOTTED FILTRO PAROLE rimuovi' ,
    );
?>