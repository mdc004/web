const SWAPI = "https://swapi.info/"
const container = document.getElementById("films-container")

fetch(SWAPI + "api/films")
    .then((res) => res.json())
    .then((films) => {
        films.forEach(film => {
            
            characters = films.characters.forEach(characterLink =>{
                fetch(characterLink).then((res) => res.json()).then((character) => {
                    return `<li class="list-group-item">${character.name}</li>`
                })
            })
            container.innerHTML += `
            <div class="card col-4 m-2">
                
                <div class="card-body">
                    <h5 class="card-title">${film.title}</h5>
                    <p class="card-text">${film.opening_crawl}</p>
                </div>
                <ul class="list-group list-group-flush">${characters}</ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            `
        })
    })