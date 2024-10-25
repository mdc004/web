// attivita[i] descrive l'attività con codice i
const attivita=[
    [],
    ["Microplastic’s world","Attività sulle microplastiche","Pistaceci","1I","Aula 1L - 3.09",1],
    ["L’isola che c’è","Esecuzione, con relativa spiegazione, della canzone \"L'isola che c'è\" (rielaborazione del testo de \"L'isola che non c'è\" di Bennato), in riferimento all'\"Isola di plastica\" che, a causa dei detriti plastici, si è formata nell'oceano Pacifico.","Catalano","3B","Aula 3M - Officina informatica",2],
    ["Gioco dell’oca a tema ambientale","Il tradizionale gioco rielaborato a tema ambientale, in cui le caselle contengono quesiti relativi ai comportamenti sostenibili e alla conoscenza di temi e contenuti a carattere ecologico.","Catalano","3B","Aula 4D - 1.01 + Aula 1.06",3],
    ["La finanza green: investimenti realmente verdi o operazione di Green Washing?","Il ruolo della finanza: multinazionali che investono sulle energie rinnovabili","Catalano","3B","Aula 4A - 1.10",4],
    ["Mangia e bevi di gusto, nel modo giusto!","Gli alimenti che consumiamo","Colombo Rossana","2E","Aula 1G - 1.07",5],
    ["L'angolo dei libri e dei propositi: cosa sei disposto a fare per il pianeta terra?","Esposizione di libri, mappe, oggetti, esempi di alternative slogan e raccolta di propositi dei visitatori","Colombo Rossana","2E (con contributo di 1E e 2I)","Atrio 1° piano",6],
    ["Vieni a conoscere Eric","Pillole video sulla salute del pianeta","Dessì","4L","Lab Mac  2 + Aula 3I - 2.02",7],
    ["Una zuppa di sasso","Gioco","Colotta","5L","Aula  5D - S.10",8],
    ["Chiedi alla Terra","Attività del gruppo teatro sulla salute del pianeta","Contento-Ughi","Gruppo laboratorio teatro","Aula 4G - Officina informatica",9],
    ["Il pomodoro democratico","Attività sui prodotti della terra a cura della cooperativa Paso Lavoro","Colotta-Cassamagnago","Coop Paso Lavoro","Aula 4H - Officina informatica",10],
    ["Paint the world","Murales e gioco sul pianeta","Colotta","3H","Aula 3H - Officina informatica",11],
    ["Camminare = + Salute - Inquinamento","Percorso di nordic walking","Mauri Sabrina","-","Esterno/Palestra",12],
    ["La natura dall’alto","Foto dall'alto con un drone a forme sul tema della Giornata della Terra","Carlini","-","Esterno/Campo pallavolo",13],
    ["Green words o Le parole ecologiche","Lettura di brani e testi scritti per un concorso sul tema della sotenibilità","Contento","3D","Aula 3G + Lab - Officina informatica",14],
    ["La nostra Terra","Presentazione dei progetti per i manifesti sulla Giornata della Terra","Ratti","3I","Atrio d’ingresso",15],
    ["Green print","Mostra lavori Xilografia","Dessì-Coco-Papini","3I 3L","Atrio 2° piano",16],
    ["Environment click","Mostra di fotografia","Coco","4L","Parete 2° piano",17],
    ["Ecocircolo","Presentazione ricerca sulla sostenibilità ambientale","Cicoria","5C, 5G, 5H","Aula 1C - 3.04",18]
];

// fasce orarie
const orari=["8:15","8:35","8:55","9:15","9:35","9:55","10:15","10:35","11:15","11:35","11:55","12:15","12:35","12:55","13:15","13:35"];

// scheduling
const schedule={
    "1D": ["Tinenzo",15,3,5,7,16,12,10,10,0,0,0,0,0,0,0,0],
    "1E": ["Colombo",8,8,13,4,6,2,1,1,0,0,0,0,0,0,0,0],
    "2D": ["Rossi",12,15,8,8,3,5,2,11,0,0,0,0,0,0,0,0],
    "2F": ["Stucchi",14,2,12,15,8,8,6,5,0,0,0,0,0,0,0,0],
    "2I": ["Lanfritto",3,6,7,12,4,15,8,8,0,0,0,0,0,0,0,0],
    "2M": ["Sala",2,11,15,3,10,10,13,7,0,0,0,0,0,0,0,0],
    "3A": ["Pacchiani",5,14,2,11,7,17,12,3,0,0,0,0,0,0,0,0],
    "3C": ["Cunegatti",7,5,11,13,2,14,17,4,0,0,0,0,0,0,0,0],
    "3G": ["Pacchiani",7,16,10,10,13,3,5,14,0,0,0,0,0,0,0,0],
    "3H": ["Placentino",1,1,18,6,15,7,16,13,0,0,0,0,0,0,0,0],
    "3Ia_3L": ["Missaglia",4,17,7,18,1,1,3,12,0,0,0,0,0,0,0,0],
    "3M": ["Mingon",6,13,3,5,11,16,7,18,0,0,0,0,0,0,0,0],
    "4H": ["Nieddu",10,10,16,3,7,13,18,9,0,0,0,0,0,0,0,0],
    "4E": ["Monti",13,7,1,1,14,18,4,15,0,0,0,0,0,0,0,0],
    "5A": ["Pelloli",18,12,3,14,17,4,7,6,0,0,0,0,0,0,0,0],
    "5B": ["Cimino",11,9,6,7,12,3,15,17,0,0,0,0,0,0,0,0],
    "5C": ["Fumagalli",17,7,14,2,18,6,3,16,0,0,0,0,0,0,0,0],
    "5E": ["Ghezzi",16,18,4,17,5,7,11,2,0,0,0,0,0,0,0,0],
    "5G": ["Colico",3,4,17,16,9,11,14,7,0,0,0,0,0,0,0,0],
    "1A": ["Tinenzo",0,0,0,0,0,0,0,0,15,3,5,7,16,12,10,10],
    "1B": ["Rossi",0,0,0,0,0,0,0,0,8,8,13,4,9,2,1,1],
    "1F": ["Colombo",0,0,0,0,0,0,0,0,12,15,8,8,3,18,7,11],
    "1I": ["Mingon",0,0,0,0,0,0,0,0,14,2,12,15,8,8,3,7],
    "1M": ["Pelloli",0,0,0,0,0,0,0,0,3,6,16,12,4,15,8,8],
    "2A": ["Stucchi",0,0,0,0,0,0,0,0,2,11,15,3,10,10,13,17],
    "2B": ["Cunegatti",0,0,0,0,0,0,0,0,5,14,2,11,7,17,12,15],
    "2C": ["Mingon",0,0,0,0,0,0,0,0,7,5,11,13,2,14,17,4],
    "2G": ["Pacchiani",0,0,0,0,0,0,0,0,7,16,10,10,13,3,11,14],
    "2H": ["Missaglia",0,0,0,0,0,0,0,0,1,1,18,6,15,4,16,13],
    "3D": ["Ghezzi",0,0,0,0,0,0,0,0,4,17,7,18,1,1,2,12],
    "3E": ["Fumagalli",0,0,0,0,0,0,0,0,6,13,7,5,11,16,7,18],
    "3Ib": ["Monti",0,0,0,0,0,0,0,0,10,10,17,7,6,13,18,9],
    "4B": ["Cimino",0,0,0,0,0,0,0,0,13,7,1,1,14,11,4,3],
    "4C": ["Nieddu",0,0,0,0,0,0,0,0,18,12,3,14,17,0,0,0],
    "4I_4L": ["Colico",0,0,0,0,0,0,0,0,11,9,6,16,12,3,15,7],
    "5I": ["Sala",0,0,0,0,0,0,0,0,17,4,14,2,18,7,3,16],
    "5L": ["Lanfritto",0,0,0,0,0,0,0,0,16,18,4,17,5,7,14,2],
}