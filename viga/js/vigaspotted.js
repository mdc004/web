const preparaModalSpottedCancella=(id,back,titolo)=>{
    document.getElementById("spottedCancellaNome").innerText=titolo
    document.getElementById("linkSpottedCancella").href="../php/spotted_cancella.php?id="+id+"&back="+back
}