var persona={
    nome: "Mattia",
    cognome: "De Capitani",

    iniziali: function() {
        return this.cognome.charAt(0)+this.nome.charAt(0);
    }
}
persona.nome=prompt("Inserisci il nome");
persona.cognome=prompt("Inserisci il cognome");
document.getElementById("nome").innerHTML +=persona.nome;
document.getElementById("cognome").innerHTML += persona.cognome;
document.getElementById("prova").innerHTML+= persona.iniziali();