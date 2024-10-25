var persona = [
    {
        cognome: "De Capitani",
        nome: "Mattia",
        giorno_nascita: "29",
        mese_nascita: "maggio",
        anno_nascita: "2004",
        comuneN: "Merate",
        provinciaN: "Lecco",
        comuneR: "La Valletta Brianza",
        provinciaR: "Lecco",
        viaR: "Santa Caterina, 5",
        comuneD: "La Valletta Brianza",
        provinciaD: "Lecco",
        viaD: "Santa Caterina, 5",
        identificato_mezzo: "Carta di identità",
        numero_mezzo: "CA265884DW",
        rilasciato: "Mariangiungiangela",
        giorno_rilascio: "19",
        mese_rilascio: "aprile",
        anno_rilascio: "2019",
        telefono: "4647867643469",
        motivo: "Certificazione scolastica",
        partenza: "La Valletta Brianza",
        destinazione: "Merate",
        dichiarazioni: "N.N."
    },
    {
        cognome: "Gilardi",
        nome: "Andrea",
        giorno_nascita: "3",
        mese_nascita: "giugno",
        anno_nascita: "2003",
        comuneN: "Lecco",
        provinciaN: "Lecco",
        comuneR: "Valgreghentino",
        provinciaR: "Lecco",
        viaR: "Ospedaletto, 11",
        comuneD: "Valgregentino",
        provinciaD: "Lecco",
        viaD: "Ospedaletto, 11",
        identificato_mezzo: "Carta di identità",
        numero_mezzo: "CA265884DW",
        rilasciato: "Mariangiungiangela",
        giorno_rilascio: "19",
        mese_rilascio: "aprile",
        anno_rilascio: "2019",
        telefono: "4647867643469",
        motivo: "Visita oculistica",
        partenza: "Valgreghentino",
        destinazione: "Lecco",
        dichiarazioni: "N.N."
    },
    {
        cognome: "Mauri",
        nome: "Davide",
        giorno_nascita: "16",
        mese_nascita: "agosto",
        anno_nascita: "2004",
        comuneN: "Ponte San Pietro",
        provinciaN: "Bergamo",
        comuneR: "Calusco d'Adda",
        provinciaR: "Bergamo",
        viaR: "Via della fontana, 345",
        comuneD: "Calusco d'Adda",
        provinciaD: "Bergamo",
        viaD: "Via della fontana, 345",
        identificato_mezzo: "Carta di identità",
        numero_mezzo: "75839408",
        rilasciato: "Mariangiungiangela",
        giorno_rilascio: "21",
        mese_rilascio: "agosto",
        anno_rilascio: "2019",
        telefono: "3334473595",
        motivo: "Visita medico-sportiva",
        partenza: "Calusco d'Adda",
        destinazione: "Merate",
        dichiarazioni: "N.N."
    }
];

function compila(n) {
    document.getElementById("div1").innerHTML = null;
    document.getElementById("div2").innerHTML = null;
    document.getElementById("div3").innerHTML = null;
    document.getElementById("1").innerHTML = persona[n].nome + persona[n].cognome;
    document.getElementById("2").innerHTML = persona[n].giorno_nascita;
    document.getElementById("3").innerHTML = persona[n].mese_nascita;
    document.getElementById("4").innerHTML = persona[n].anno_nascita;
    document.getElementById("5").innerHTML = persona[n].comuneN;
    document.getElementById("6").innerHTML = persona[n].provinciaN;
    document.getElementById("7").innerHTML = persona[n].comuneR;
    document.getElementById("8").innerHTML = persona[n].provinciaR;
    document.getElementById("9").innerHTML = persona[n].viaR;
    document.getElementById("10").innerHTML = persona[n].comuneD;
    document.getElementById("11").innerHTML = persona[n].provinciaD;
    document.getElementById("12").innerHTML = persona[n].viaD;
    document.getElementById("13").innerHTML = persona[n].identificato_mezzo;
    document.getElementById("14").innerHTML = persona[n].numero_mezzo;
    document.getElementById("15").innerHTML = persona[n].rilasciato;
    document.getElementById("16").innerHTML = persona[n].giorno_rilascio;
    document.getElementById("17").innerHTML = persona[n].mese_rilascio;
    document.getElementById("18").innerHTML = persona[n].anno_rilascio;
    document.getElementById("19").innerHTML = persona[n].telefono;
    document.getElementById("20").innerHTML = persona[n].motivo;
    document.getElementById("21").innerHTML = persona[n].partenza;
    document.getElementById("22").innerHTML = persona[n].destinazione;
    document.getElementById("23").innerHTML = persona[n].dichiarazioni;
    document.getElementById("24").innerHTML = 13;
    document.getElementById("25").innerHTML = "Novembre";
    document.getElementById("26").innerHTML = 2021;
}


