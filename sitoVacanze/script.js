window.onload = (event) => {
    window.scrollTo({
        top: 0,
        left: 0,
    })
};

const ageInput = document.getElementById("age")
// Si chiama scopriamo i giovani

ageInput.onchange = function (){
    document.getElementById("age-value").innerText = ageInput.value
}

document.getElementById("muchSport").onchange = function (){
    document.getElementById("much-sport-value").innerText = document.getElementById("muchSport").value
}

document.getElementById("book").onchange = function (){
    document.getElementById("book-value").innerText = document.getElementById("book").value
}

var ver = false

const interviewButton = document.getElementById("interview")
const InterviewField = document.getElementById("interviewField")
const interviewElements = document.getElementsByClassName("interview")
var interviewVar = true

interviewButton.onchange = function () {
    document.getElementById("interviewField").style.border = ""
    if(interviewButton.value == 0){
        interviewVar = false
        for (let i = 0; i < interviewElements.length; i++)
            interviewElements[i].style.visibility = "hidden"
    }else if (interviewButton.value == 1){
        interviewVar = true 
        for (let i = 0; i < interviewElements.length; i++)
            interviewElements[i].style.visibility = "visible"
    }    
}

var deck = []
var verify = false
const form = document.forms[0]
function send() {
    if(!ver){
        alert("Accettare l'informativa privacy")
        return
    }
    document.getElementById("interviewField").style.border = ""
    document.getElementsByName("phoneNumber")[0].style.border = ""
    document.getElementsByName("birthday")[0].style.border = ""
    verify = false
    deck = []
    deck.push({ name: form.age.name, value: form.age.value})
    deck.push({ name: "school", value: form.school.value})
    deck.push({ name: "schoolAddress", value: form.schoolAddress.value})
    deck.push({ name: "class", value: form.class.value})
    deck.push({ name: "region", value: form.region.value})
    deck.push({ name: "sport1", value: form.sport1.value})
    deck.push({ name: "brotherSister", value: form.brotherSister.value})
    deck.push({ name: "musicAbb", value: form.musicAbb.value})
    const musicAbbDeck = document.getElementsByClassName("musicAbb")
    let stringa = ""
    for(let i = 0; i < musicAbbDeck.length; i++)
        if (musicAbbDeck[i].checked)stringa += ` ${musicAbbDeck[i].value}`
    deck.push({ name: "whatAbb", value: stringa})
    deck.push({ name: "videoAbb", value: form.videoAbb.value})
    const videoAbbDeck = document.getElementsByClassName("videoAbb")
    stringa = ""
    for (let i = 0; i < videoAbbDeck.length; i++)
        if (videoAbbDeck[i].checked) stringa += ` ${videoAbbDeck[i].value}`
    deck.push({ name: "whatAbb", value: stringa })
    deck.push({ name: "sportAbb", value: form.sportAbb.value})
    const sportAbbDeck = document.getElementsByClassName("sportAbb")
    stringa = ""
    for (let i = 0; i < sportAbbDeck.length; i++)
        if (sportAbbDeck[i].checked) stringa += ` ${sportAbbDeck[i].value}`
    deck.push({ name: "muchSport", value: form.muchSport.value})
    deck.push({ name: "book", value: form.book.value})
    deck.push({ name: "videogame", value: form.videogame.value})
    deck.push({ name: "question", value: form.question.value})
    if (interviewVar){
        verify = dateCheck(phoneCheck(emailCheck()))
        deck.push({ name: "intervista", value: "si" })
        deck.push({ name: "email", value: form.interviewField.value })
        deck.push({ name: "phone", value: form.phoneNumber.value })
        deck.push({ name: "birthday", value: form.birthday.value })
    }else{
        deck.push({ name: "intervista", value: "no" })
        verify = true
    }
    console.log(deck)
    if(verify)printDoc()
}

function emailCheck() {
    // recupero il valore della email indicata nel form
    var email = form.interviewField.value
    // se non ho inserito nulla nel campo
    if (email == '') { 
        document.getElementById("interviewField").style.border = "2px solid red"
        alert("Devi indicare un indirizzo email")
        return false
    }
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) return true
    else {
        document.getElementById("interviewField").style.border = "2px solid red"
        alert("L'indirizzo email che hai inserito non e' valido")
        return false
    }
}
var number
function phoneCheck(checker){
    if(!checker)return false
    number = form.phoneNumber.value
    if (number == ""){
        document.getElementsByName("phoneNumber")[0].style.border = "2px solid red"
        alert("Devi indicare un numero di telefono")
        return false
    } 
    if (/^((00|\+)39[\.]??)??3\d{2}[\.]??\d{6,7}$/.test(number)) return true
    else{
        document.getElementsByName("phoneNumber")[0].style.border = "2px solid red"
        alert("Il numero di telefono che hai inserito non e' valido")
        return false
    }
}
function dateCheck(checker){
    if(!checker)return false
    var date = form.birthday.value
    if(date == ""){
        document.getElementsByName("birthday")[0].style.border = "2px solid red"
        alert("Devi indicare la tua data di nascita")
        return false
    }
    const datee = new Date()
    return true
    
}

function printDoc() {
    
}
const closeButton = document.getElementById("close")
const disclaimerDiv = document.querySelector(".disclaimer")

const acceptDiv = document.querySelector(".accept")
acceptDiv.style.display = "none"

closeButton.onclick = function () {
    closeButton.display = "none"
    disclaimerDiv.style.display = "none"
    acceptDiv.style.display = ""
}

const linkCoockie = document.querySelector("#linkCoockie")
linkCoockie.onclick = function () {
    closeButton.display = ""
    disclaimerDiv.style.display = ""
    acceptDiv.style.display = "none"
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    })
}

window.addEventListener("scroll", function () {
    if(window.pageXOffset>disclaimerDiv.getBoundingClientRect().bottom){
        acceptDiv.style.display = ""
        closeButton.display = "none"
        disclaimerDiv.style.display = "none"
    }
})

document.getElementById("acceptButton").onclick = function () {
    acceptDiv.style.display = "none"
    closeButton.display = "none"
    disclaimerDiv.style.display = "none"
    ver = true
}
