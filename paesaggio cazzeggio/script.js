var x = 500, y = 500
function move_top() {
    y-=100
    document.getElementById("personaggio").style.top = y + "px"
}
function move_bottom() {
    y+=100
    document.getElementById("personaggio").style.top = y + "px"
}
function move_right() {
    x+=100
    document.getElementById("personaggio").style.top = x + "px"
}
function move_left() {
    x-=100
    document.getElementById("personaggio").style.left = x + "px"
}

function movimento() {
    if (window.event.keyCode == 38) move_top()
    else if (window.event.keyCode == 40) alert("funziono")
    else if (window.event.keyCode == 39) move_right()
    else if (window.event.keyCode == 37) move_left()
}

function name(params) {
    
}

