var alunni=[
    "Airoldi Matteo",
    "Andreaggi Simone",
    "Barb Alex",
    "Biava Margerita",
    "Bonanomi Nicolas",
    "Casiraghi Jacopo",
    "Ceribelli Alessandro",
    "Comi Andrea",
    "Correa	Jermy",
    "Corti Leonardo",
    "De Capitani Mattia",
    "Gilardi Andrea",
    "Luci Andrea",
    "Lupo Andrea",
    "Luzzana Samuele",
    "Mauri Davide",
    "Mazza Alessandro",
    "Merlo Aaron",
    "Montemurro	Davide",
    "Nava Diego",
    "Origo Tommaso",
    "Riva Mattia",
    "Spada Lorenzo Pio",
    "Supino	Michele",
    "Tomaselli Fedro",
    "Trezzi	Marco",
    "Valsecchi Michael",
    "Varisco Lorenzo",
    "Vercelloni	Federico"
];

var ver=[];

function genera() {
    for (var i = 1; i <= 30; i++)document.getElementById(i).style.visibility = "hidden";
    for( var i=0; i<alunni.length; i++) ver[i]=false;
    for ( var i=2; i<=30; i++)document.getElementById(i).innerHTML = null;
    var q = document.getElementById("inserito").value;
    if((q>29)||(q<1))alert("Inserire un numero compreso tra 1 e 29");
    else{
        for (var i = 1; i <= q; i++) {
            do{
                n = Math.floor(Math.random() * 29);
            }
            while(ver[n]!=false);
            ver[n]=true;
            document.getElementById(i).innerHTML = "Candidato "+(i)+" -  "+alunni[n];
            document.getElementById(i).style.visibility = "visible";
        }
        document.getElementById("riconoscimento").innerHTML = "Ecco gli interrogati del giorno, congratulazioni a loro!";
        document.getElementById("prima").style.visibility = "hidden";
        document.getElementById("dopo").style.visibility = "visible";
        document.getElementById("rigen").style.visibility = "visible";
    }
}

function rigenera() {
    for (var i = 1; i <= 30; i++)document.getElementById(i).style.visibility = "hidden";
    document.getElementById("prima").style.visibility = "visible";
    document.getElementById("dopo").style.visibility = "hidden";
    document.getElementById("rigen").style.visibility = "hidden";
    document.getElementById("inserito").innerHTML = null;
}