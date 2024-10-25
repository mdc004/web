// const genres_checkbox_container = document.getElementById(`genres-container`)
// const genres_checkbox = document.getElementsByName(`genre`)

// console.log(genres_checkbox_container)
// displayGenres = (genres) => {
    
//     genres.forEach(genre => {
        
//         genres_checkbox_container.innerHTML += `
//             <li>
//                 <div class="form-check">
//                     <input class="dropdown-item" type="checkbox" name="genre" value="${genre.id}">
//                     <label class="form-check-label" for="genre">${genre.name}</label>
//                 </div>
//             </li>
//         `
//     });

// }

// function getGenres(language, api_key) {
    
// }

// window.onload = () => {

// }
// fetch(`https://api.themoviedb.org/3/genre/movie/list?language=en&api_key=${API_KEY}`).then(response => response.json()).then(response => response.genres).then(displayGenres)



// const d = new Date();
// d.setTime(d.getTime() + d.getTime());
// document.cookie = `language=italiano; expires=${d.toUTCString()}`

// console.log(document.cookie)


// genres_checkbox.forEach(el => el.addEventListener("change", () => console.log(el.checked)))

// function search(){
//     // check the geners
//     fetch(`https://api.themoviedb.org/3/movie/popular?language=en-US&page=1&api_key=${API_KEY}`)
//         .then(response => response.json())
//         .then((response) => {
//             films = response.results

//             films.forEach(film => {
//                 film.
//             })





//             popular_container.innerHTML = ""
//             films.forEach(film => {
//                 popular_container.innerHTML += `
//                 <a class="col-md-2" style="text-decoration: none;" href="./film.html?id=${film.id}">
//                     <div class="card mb-4 border-0">
//                         <img class="card-img-top" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/${film.backdrop_path}">
//                         <div class="card-body">
//                             <h6 class="card-title">${film.original_title}</h6>
//                             <div class="d-flex justify-content-between align-items-center">
//                                 <small class="text-muted">${film.release_date}</small>
//                             </div>
//                         </div>
//                     </div>
//                 </a>
//             `
//             })
//         })
// }



/*

- scheda film con tutto il cast
- scheda attori con ricerca (usare api persone ) e visualizzazione di tutti gli attori
- ricerca di attori/film/tutto usare ricerca corrente con evento: onkeypress
- cambio lingua con cookie e immagini fatto bene?
- dividere per attori e film, fare la ricerca e la visualizzazione in per ogni tipo tutto nella stessa pagina
- fare in modo di visualizzare tutte le pagine con il caricamento a rotellina
--> fare tutto nella stessa pagina e in base ai parametri del get aggiungere o meno quello che si vede?
- gestire errori

*/