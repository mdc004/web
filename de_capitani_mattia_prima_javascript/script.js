var giocatori = [
    {
        foto: "1.jpg",
        nome: "Marco Milani",
        nick: "quelloricco",
    },
    {
        foto: "2.jpg",
        nome: "Giorgio Comi",
        nick: "giorgione",
    },
    {
        foto: "3.jpg",
        nome: "Guido Burgio",
        nick: "cassata",
    },
    {
        foto: "4.jpg",
        nome: "Filippo Carroti",
        nick: "macellaio",
    },
    {
        foto: "5.jpg",
        nome: "Andrea Marotta",
        nick: "duracell",
    }
];

var n = Math.floor(Math.random() * 5);

function insertName(name) {
    document.getElementById("nome").innerHTML += name;
    document.getElementById("title").innerHTML = name; // Cambia il titolo della pagina (nell'head)
}

function insertNickname(Nick) {
    document.getElementById("nick").innerHTML += Nick;
}

function insertImage(img) {
    document.getElementById("foto").innerHTML = "<img src=\"images/" + img + "\" alt=\"Immagine non trovata\" class=\"foto\">";
}

insertName(giocatori[n].nome);
insertNickname(giocatori[n].nick);
insertImage(giocatori[n].foto);