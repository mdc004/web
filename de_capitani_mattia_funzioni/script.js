function writeElementContent(content, id) {
    document.getElementById(id).innerHTML = content;
}

function appendElementContent(content, id) {
    document.getElementById(id).innerHTML += content;
}

function deleteElementContent(id) {
    document.getElementById(id).innerHTML = null;
}

function duplicateElementContent(id) {
    document.getElementById(id).innerHTML += document.getElementById(id).innerHTML;
}

writeElementContent(prompt("Inserire il contenuto"), prompt("Inserire l'ID"));
writeElementContent(prompt("Inserire il contenuto"), prompt("Inserire l'ID"));
writeElementContent(prompt("Inserire il contenuto"), prompt("Inserire l'ID"));
writeElementContent(prompt("Inserire il contenuto"), prompt("Inserire l'ID"));
writeElementContent(prompt("Inserire il contenuto"), prompt("Inserire l'ID"));
writeElementContent(prompt("Inserire il contenuto"), prompt("Inserire l'ID"));

deleteElementContent(prompt("Inserire l'ID dell'elemento da cancellare"));
deleteElementContent(prompt("Inserire l'ID dell'elemento da cancellare"));

appendElementContent(prompt("Inserire il contenuto da aggiungere ad unl'elemento"), prompt("Inserire l'ID dell'elemento a cui aggiungere contenuto"));
appendElementContent(prompt("Inserire il contenuto da aggiungere ad unl'elemento"), prompt("Inserire l'ID dell'elemento a cui aggiungere contenuto"));

duplicateElementContent(prompt("Inserire l'ID dell'elemento da duplicare"));
duplicateElementContent(prompt("Inserire l'ID dell'elemento da duplicare"));
