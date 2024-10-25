function sha512(str) {
    //presa da Stack Overflow https://stackoverflow.com/questions/55926281/how-do-i-hash-a-string-using-javascript-with-sha512-algorithm
    return crypto.subtle.digest("SHA-512", new TextEncoder("utf-8").encode(str)).then(buf => {
      return Array.prototype.map.call(new Uint8Array(buf), x=>(('00'+x.toString(16)).slice(-2))).join('');
    });
}


const hashaPassword=()=>{
    let plain=document.getElementById("password").value
    let cipher=sha512(plain)
    .then(result=>{
        document.getElementById("password_hash").value=result
    })
}

const selezionaTuttiPrivilegi=()=>{
    const listaPrivilegi=document.getElementsByClassName("privilegi-vigainsider")
    for (let i = 0; i < listaPrivilegi.length; i++) {
        listaPrivilegi[i].checked=true
    }
}

const deselezionaTuttiPrivilegi=()=>{
    const listaPrivilegi=document.getElementsByClassName("privilegi-vigainsider")
    for (let i = 0; i < listaPrivilegi.length; i++) {
        listaPrivilegi[i].checked=false
    }
}

const domandaAggiungi=()=>{
    const spazio=document.getElementById("domande")
    let nuovaDomanda=document.createElement("div")
    let titoloDomanda=document.createElement("h4")
    let nomeDomanda=document.createElement("div")
    let labelNomeDomanda=document.createElement("label")
    let inputNomeDomanda=document.createElement("input")
    let selectTipo=document.createElement("select")
    let optionTipoOpzioni=document.createElement("option")
    let optionTipoAperta=document.createElement("option")
    let pDomanda=document.createElement("p")
    let tipoOpzioni=document.createElement("div")
    let labelTipoOpzioni=document.createElement("label")
    let inputTipoOpzioni=document.createElement("input")

    titoloDomanda.innerText="Domanda"
    labelNomeDomanda.innerText="Testo domanda"
    optionTipoOpzioni.innerText="Opzioni"
    optionTipoAperta.innerText="Domanda aperta"
    optionTipoOpzioni.setAttribute("value",0)
    optionTipoAperta.setAttribute("value",1)
    pDomanda.innerText="Tipo della domanda:"
    labelTipoOpzioni.innerText="Eventuali opzioni (separate da ;)"
    nuovaDomanda.setAttribute("class","col-md-12 card-notizia mt-3 card")
    nomeDomanda.setAttribute("class", "form-group")
    inputNomeDomanda.setAttribute("type", "text")
    inputNomeDomanda.setAttribute("class", "form-control")
    inputNomeDomanda.setAttribute("name", "domanda_nome[]")
    inputTipoOpzioni.setAttribute("type", "text")
    inputTipoOpzioni.setAttribute("class", "form-control")
    inputTipoOpzioni.setAttribute("name", "opzioni_stringa[]")
    selectTipo.setAttribute("class", "custom-select")
    selectTipo.setAttribute("name", "tipo[]")
    tipoOpzioni.setAttribute("class", "spazio-bottom")

    selectTipo.appendChild(optionTipoOpzioni)
    selectTipo.appendChild(optionTipoAperta)
    nomeDomanda.appendChild(labelNomeDomanda)
    nomeDomanda.appendChild(inputNomeDomanda)
    tipoOpzioni.appendChild(labelTipoOpzioni)
    tipoOpzioni.appendChild(inputTipoOpzioni)
    nuovaDomanda.appendChild(titoloDomanda)
    nuovaDomanda.appendChild(pDomanda)
    nuovaDomanda.appendChild(selectTipo)
    nuovaDomanda.appendChild(tipoOpzioni)
    nuovaDomanda.appendChild(nomeDomanda)
    spazio.appendChild(nuovaDomanda)
}

if (document.getElementById("bottoneTuttiPrivilegi")) document.getElementById("bottoneTuttiPrivilegi").addEventListener("click",e=>{
    e.preventDefault()
    selezionaTuttiPrivilegi()
})

if (document.getElementById("bottoneNoPrivilegi")) document.getElementById("bottoneNoPrivilegi").addEventListener("click",e=>{
    e.preventDefault()
    deselezionaTuttiPrivilegi()
})

if (document.getElementById("bottoneDomandaAggiungi")) document.getElementById("bottoneDomandaAggiungi").addEventListener("click",e=>{
    e.preventDefault()
    domandaAggiungi()
})

function login(){
    hashaPassword()
    fetch("http://localhost/php/signin.php", {
      "body": "email"+document.evaluate('/html/body/main/div/form/div/div[5]/div[1]/input', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.value+"&"+"password="+document.evaluate('//*[@id="password_hash"]', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.value,
      "method": "POST",
    });
}