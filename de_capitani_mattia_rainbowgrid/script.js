const bt = document.getElementById("submit")
document.getElementById("ins").value = null
const grid = document.getElementsByClassName("container-grid")[0]
grid.style.visibility = "hidden"


var crea = function () {
    grid.style.visibility = "visible"
    //pulisce la pagina
    grid.innerHTML = ""
    //prendo il numero dall'input
    const n = document.getElementById("ins").value
    //creo la tabella e la inserisco nella griglia
    const tab = document.createElement("table")
    grid.appendChild(tab)
    // assegno alla tabella la classe "table"
    tab.classList.add("table")

    //creo n righe e n colonne, ogni elemento ha la classe "table"
    //creo n righe
    for (let i = 0; i < n; i++) {
        const tr = document.createElement("tr")
        tab.appendChild(tr)
        tr.classList.add("table")
        //in ogni riga creo e inserisco n colonne
        for (let j = 0; j < n; j++) {
            var td = document.createElement("td")
            tr.appendChild(td)
            td.classList.add("table")
        }
    }
    // creo il pulsante di conferma
    var conf = document.createElement("button")
    grid.appendChild(conf)
    conf.outerHTML = '<button class="conferma" onclick="stoppa()"><img src="images_and_icons/done.svg" alt="confirm"></button>'

    // al passaggio del mouse le celle cambiano colore
    td = document.getElementsByTagName("td")
    for (let index = 0; index < td.length; index++) {
        td[index].addEventListener("mouseover", function () {
            var a = Math.floor(Math.random() * 256)
            var b = Math.floor(Math.random() * 256)
            var c = Math.floor(Math.random() * 256)
            td[index].style.backgroundColor = "rgba(" + a + "," + b + "," + c + ")"
        })
    }
}

var stoppa = function () {
    var td = document.getElementsByTagName("td")
    for (let index = 0; index < td.length; index++) {
        let colore = td[index].style.backgroundColor
        td[index].addEventListener("mouseover", function () { td[index].style.backgroundColor = colore})
    }
    document.getElementById("ins").outerHTML = null
    bt.outerHTML = null
    document.getElementsByClassName("conferma")[0].outerHTML = null
    //alert("funziono")
    var paint = document.createElement("button")
    grid.appendChild(paint)
    paint.outerHTML = '<button class="conferma" onclick="color()"><img src="images_and_icons/paint.svg" alt="paint"></button>'
    var input_color = document.createElement("input")
    grid.appendChild(input_color)
    input_color.setAttribute("type", "color"); 
    input_color.classList.add("input_color")
    input_color.classList.add("conferma")
}

function color() {
    var colore = document.getElementsByClassName("input_color")[0].value
    var td = document.getElementsByTagName("td")
    for (let index = 0; index < td.length; index++) {
        td[index].style.cursor = "pointer"
        td[index].addEventListener("mouseover", function () { td[index].style.backgroundColor = colore })
    }
}

bt.addEventListener("click", crea)








