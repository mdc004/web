var classifica=[
    {
        posizione: "Prima",
        foto: "0",
        titolo: "Strappare Lungo I Bordi",
        trama: "a serie ruota attorno ad un viaggio che Zerocalcare ed i suoi due amici di sempre, Sarah e Secco, devono affrontare. Nel corso degli episodi si susseguono racconti e flashback della vita del protagonista, passando dagli anni delle scuole medie, a quelli del liceo, fino a tornare al presente, raccontando la sua esistenza attraverso il sarcasmo e l'ironia che contraddistinguono il personaggio. Durante il viaggio Zerocalcare cerca in tutti i modi di distrarsi da quello che la sua coscienza (un armadillo dalle sembianze antropomorfe che lo accompagna da sempre) vuole ricordargli: il motivo per cui i tre amici si stanno dirigendo in treno verso la città di Biella.",
    },
    {
        posizione: "Seconda",
        foto: "1",
        titolo: "Narcos - Messico",
        trama: "La storia è incentrata sulla nascita e l'ascesa del Cartello di Guadalajara negli anni '80, quando Miguel Ángel Félix Gallardo ne assume il comando, unificando i singoli trafficanti di droga di tutto il Messico per costruire una organizzazione univoca in grado di gestire l'intero flusso di marijuana e cocaina verso gli Stati Uniti. Quando l'agente della DEA Kiki Camarena si trasferisce insieme a sua moglie e suo figlio dalla California a Guadalajara per assumere un nuovo incarico, scopre rapidamente che il suo nuovo compito sarà più impegnativo di quanto avrebbe mai potuto immaginare. Mentre Kiki indaga su Félix, si verifica una tragica catena di eventi, che influenzano il traffico di droga e la guerra contro di essa negli anni a venire.",
    },
    {
        posizione: "Terza",
        foto: "2",
        titolo: "The Queen Of Flow",
        trama: document.getElementById("testohide1").innerHTML,
    },
    {
        posizione: "Quarta",
        foto: "3",
        titolo: "Dynasty",
        trama: "I Carrington e i Colby, due delle famiglie più ricche d'America, fanno a gara per il controllo della fortuna dei loro figli, mettendo in risalto il fascino della ricchezza",
    },
    {
        posizione: "Quinta",
        foto: "4",
        titolo: "SqidGame",
        trama: "Corea del Sud. Seong Gi-hun, un uomo divorziato e sommerso dai debiti, viene invitato a giocare ad una serie di giochi tradizionali per bambini per vincere una grossa somma di denaro. Egli accetta l'offerta e si ritrova in un luogo sconosciuto insieme ad altre 455 persone con debiti simili ai suoi. I giocatori sono tenuti costantemente sotto controllo da alcune guardie vestite di rosso, sotto la sovrintendenza di un Front Man. I giocatori scoprono ben presto che chi perde viene ucciso, e ogni morte aggiunge 100000000 ₩ al montepremi finale di 45600000000 ₩ (circa 33000000 €). Gi-hun fa squadra con altri giocatori, incluso il suo amico d'infanzia Cho Sang-woo, per sopravvivere alle sfide fisiche e psicologiche sottoposte dai giochi.",
    },
];

var n=0;

document.getElementById("d").innerHTML = '<img src="images/' + classifica[n].foto + '.jpg" id="locandina">';
document.getElementById("titolo").innerHTML = classifica[n].titolo;
document.getElementById("trama").innerHTML = classifica[n].trama;

function avanti() {
    n++;
    if(n==5)n=0;
    document.getElementById("d").innerHTML = '<img src="images/' + classifica[n].foto +'.jpg" id="locandina">';
    document.getElementById("titolo").innerHTML = classifica[n].titolo;
    document.getElementById("trama").innerHTML = classifica[n].trama;
    document.getElementById("position").innerHTML = classifica[n].posizione;
}

function indietro() {
    n--;
    if(n==-1)n=4;
    document.getElementById("d").innerHTML = '<img src="images/' + classifica[n].foto + '.jpg">';
    document.getElementById("titolo").innerHTML = classifica[n].titolo;
    document.getElementById("trama").innerHTML = classifica[n].trama;
    document.getElementById("position").innerHTML = classifica[n].posizione;
}

function inserisci() {
    var pos = document.getElementById("ins_pos").value;
    function sposta(pos) {
        for (var i = classifica.length; i > pos; i--) {
            classifica[i + 1] = classifica[i];
        }
    }
    sposta(pos);
    classifica[pos].foto = document.getElementById("ins_foto").value;
    classifica[pos].titolo = document.getElementById("ins_titolo").value;
    classifica[pos].trama = document.getElementById("ins_descrizione").value;
    classifica.pop();
    document.getElementById("ins_foto").innerHTML= "";
    document.getElementById("ins_titolo").innerHTML= "";
    document.getElementById("ins_descrizione").innerHTML= "";
}

