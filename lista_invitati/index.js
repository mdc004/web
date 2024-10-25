var lista=[]

var nome, cognome

function premi_aggiungi() {
    if (window.event.keyCode == 13) {
        aggiungi()
    }
}

function invitato(nome, cognome) {
    this.name = nome
    this.surname = cognome
}

function aggiungi(){
    lista.push(new invitato(document.getElementById("nome").value, document.getElementById("cognome").value));
    document.getElementById("lista").innerHTML += "<li id=\"lista\">" + document.getElementById("cognome").value + " " + document.getElementById("nome").value + "</li>"    
    document.getElementById("nome").value = null
    document.getElementById("cognome").value = null
    
}

function mostra_lista() {
    document.getElementById("mostra_lista").style.visibility = "hidden"
    document.getElementById("nascondi_lista").style.visibility = "visible"
    document.getElementById("lista").style.visibility = "visible"
}

function nascondi_lista() {
    document.getElementById("nome").style.visibility = "visible"
    document.getElementById("cognome").style.visibility = "visible"
    document.getElementById("aggiungi").style.visibility = "visible"
    document.getElementById("mostra_lista").style.visibility = "visible"
    document.getElementById("nascondi_lista").style.visibility = "hidden"
    document.getElementById("lista").style.visibility = "hidden"
}

function stampa() {
    var doc = new jsPDF()
    
    doc.setFont("times");
    doc.setFontType("bold");
    
    doc.text(20, 20, "Invitati al ricevimento:");
    doc.setFontType("normal");
    var n = 30
    lista.forEach(element => {
        doc.text(20, n, element.surname + element.name);
        n+=10
    });
    doc.save("Lista.pdf")

}

function svuota() {
    document.getElementById("lista").innerHTML = "<li id=\"invitato\">Invitati al ricevimento:</li>"
}
// Funzione per rimuovere una persona
function rimuovi() {
    function ristampa() {
        svuota()
        lista.forEach(element => {
            document.getElementById("lista").innerHTML += "<li id=\"lista\">" + element.surname + " " + element.name + "</li>"
        })
    }
    var temp_name = prompt("Inserire il nome di chi si desidera rimuovere")
    var temp_surname = prompt("Inserire il cognome di chi si desidera rimuovere")
    var count = 0;
    lista.forEach(element => {
        if ((element.name == temp_name) && (element.surname == temp_surname)){console.log(lista.splice(count,1))}
    })
    ristampa()
    count++
}
