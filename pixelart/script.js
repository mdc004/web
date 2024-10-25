var board = document.getElementsByClassName("board")[0]

const tab = document.createElement("table")
board.appendChild(tab)
tab.classList.add("table")

for (let i = 0; i < 70; i++) {
    const tr = document.createElement("tr")
    tab.appendChild(tr)
    tr.classList.add("table")

    for (let j = 0; j < 130; j++) {
        const td = document.createElement("td")
        tr.appendChild(td)
        td.classList.add("table")
    }
}

function pennella() {
    const td = document.getElementsByTagName("td")
    var colore = document.getElementById("color").value
    for (let index = 0; index < td.length; index++) {
        td[index].addEventListener("click", function (){
            td[index].style.backgroundColor = colore
            td[index].style.cursor = "pointer"
        }) 
    }
}

// salva colore: aggiungi un bottone per salvare e salvi il colore in un altro bottone, quando lo premi rende il colore uguale a quello
// gomma
// migliorare stile della pagina
// permettere di salvare la pixel art
// lavorare sul cursore, sistemarlo
// provare a fare tasto avanti e indietro
// provare a fare secchiello
// provare a fare pennello veloce
// spostare il pannello comandi con lo spostamento del mouse