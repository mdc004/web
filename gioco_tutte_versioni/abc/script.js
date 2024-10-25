// container game-area
const container = document.querySelector(".container")

// se vera il gioco va, altrimenti si blocca
var game = true

// Punteggio
var score = 0

// distanza da cui gli oggetti iniziano a muoversi
var left = 1000

// distanza a cui gli oggetti che si muovono spariscono
var border_left = -900

// Tempo base ostacoli
    // Diminuire per spawnare più ostacoli
var time_obstacle = 1500

// Keyframe per sfondo
var keyframe_content = `
        @keyframes move_background{
            100% {background-position: -100000px 0px;}
        }
    `

// Velocità dello sfondo: fare riferimento a @move_background
        // NOTA BENE: PER ANDARE PIU' VELOCE VA DIMINUITA NON AUMENTATA
var background_movement_velocity = 600

// Ostacoli 
// setInterval(function(){
//     setTimeout(create_obstacle,random_time_obstacle)
// },1000)

// Crea l'ostacolo
function create_obstacle() {
    let obstacle = document.createElement("div")
    container.appendChild(obstacle)
    obstacle.classList.add("obstacle")
    
    // Sposta l'ostacolo
    let obstacle_left = left       
    let move_obstacle = setInterval(function(){
        obstacle_left -=1
        obstacle.style.left = obstacle_left+ "px"
        if(obstacle_left<50){
            obstacle.outerHTML = null
            clearInterval(move_obstacle)
        }
    },score) 
}

// tempo random
function random_time_obstacle() {
    return Math.floor(Math.random() * 2000)+time_obstacle
}

function move_background() {
    console.log(background_movement_velocity)
    background_movement_velocity = 600 - (score / 250)
    let container_selector = `
    .container{
        animation: move_background ${background_movement_velocity}s infinite linear;
    }
    `
    let style = document.createElement("style")
    style.innerHTML = container_selector + keyframe_content
    document.querySelector("head").appendChild(style)
}

//Scrive il punteggio nella pagina
function write_score() {
    document.querySelector("#score").innerHTML = score
}

/*  
        *********FUNZIONE DI PARTENZA*********  
                IL CODICE PARTE DA QUI
*/

function start(){
    //nasconde start button
    document.querySelector("#start").outerHTML = null
    // mostra il punteggio
    document.querySelector("#score").style.visibility = "visible"
    // Fermare qui sotto per fermare il punteggio
    var score_increment = setInterval(function(){
        score +=3
        write_score()
        move_background()
        
    },100)
    
}

move_background()
document.querySelector("#start").addEventListener("click", start)

