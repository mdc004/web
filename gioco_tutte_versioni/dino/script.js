const container = document.querySelector(".container")
var score = 10

    function crea(){
        //tappeto
        // let left = 1000
        // let object = document.createElement("div")
        // container.appendChild(object)
        // object.classList.add("object")
        // let sposta = setInterval(function(){
        //     left -=1
        //     object.style.left = left+ "px"
        //     if(left<50){
        //         object.outerHTML = null
        //         clearInterval(sposta)
        //     }
        // },score)

        //puntini
        let dot_left = 1000
        let dot = document.createElement("div")
        container.appendChild(dot)
        dot.classList.add("dot")
        dot.style.top = (Math.floor(Math.random()*20)+400) + "px"
        let sposta_dot = setInterval(function () {
            dot_left -= 1
            dot.style.left = dot_left + "px"
            if (dot_left < 50) {
                dot.outerHTML = null
                clearInterval(sposta_dot)
            }
        }, score)

        //nuvole
        // let nuvola_left = 1000
        // container.innerHTML +='<img src = "nuvola.jpg" class="nuvola">'
        // nuvola = document.querySelector(".nuvola")
        // nuvola.style.top = (Math.floor(Math.random()*60)+300) + "px"
        // let sposta_nuvola = setInterval(function () {
        //     nuvola_left -= 1
        //     nuvola.style.left = nuvola_left + "px"
        //     if (nuvola_left < 50) {
        //         nuvola.outerHTML = null
        //         clearInterval(sposta_nuvola)
        //     }
        // }, 50)


    }

    // var contenitore;
    // contenitore.push(crea())

setInterval(crea,40)
// switch(eval.keycode) case 32
