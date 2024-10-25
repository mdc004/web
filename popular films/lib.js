const api_key = `28fb4d34344587cb6ce81a08b73b75c8`
const image_base_path = `https://media.themoviedb.org/t/p/w300_and_h450_bestv2`
const sort_by = `popularity.desc`

searchQuery = new URLSearchParams(window.location.search)
id = searchQuery.has(`id`) ? searchQuery.get(`id`) : null
adult = searchQuery.has(`adult`) ? searchQuery.get(`adult`) : false
language = searchQuery.has(`language`) ? searchQuery.get(`language`) : `en-US`
year = searchQuery.has(`year`) ? searchQuery.get(`year`) : null
with_cast = searchQuery.has(`with_cast`) ? searchQuery.get(`with_cast`) : null
page = searchQuery.has(`page`) ? searchQuery.get(`page`) : 1
query = searchQuery.has(`query`) ? searchQuery.get(`query`) : null

// Modal info
const film_details_master_title = document.getElementById(`film-details-master-title`)
const film_details_title = document.getElementById(`film-details-title`)
const film_details_img = document.getElementById(`film-details-img`)
const film_details_overview = document.getElementById(`film-details-overview`)
// const film_details_master_title = document.getElementById(`film-details-master-title`)


display_search = (films) => {
    cards = document.getElementsByClassName(`film-card`)

    last_card = cards[cards.length - 1]
    
    films.reverse().forEach(film => {
        
        clone = last_card.cloneNode(true)
        
        title = clone.getElementsByClassName(`film-card-title`)[0]
        image = clone.getElementsByClassName(`film-card-img`)[0]
        film_date = clone.getElementsByClassName(`film-card-date`)[0]
        adult = clone.getElementsByClassName(`film-card-adult`)[0]
        // button = clone.getElementsByClassName(`film-card-btn`)[0]
        
        title.innerHTML = film.title
        image.src = image_base_path + film.poster_path
        film_date.innerHTML = film.release_date
        // but  ton.href = "scheda-film.html?id=" + film.id

        title.addEventListener(`click`, () => showFilmDetails(film))
        
        if (film.adult) adult.classList.remove('d-none')
        
        clone.classList.remove('d-none')
        
        last_card.after(clone)
    })
    
    window.addEventListener(`scroll`, checkScroll)
}

search = () => {
    fetch(`https://api.themoviedb.org/3/${query ? `search` : `discover`}/movie?api_key=${api_key}&include_adult=${adult}&include_video=false&language=${language}&page=${page}&sort_by=${sort_by}${year ? `&year=${year}` : ``}${with_cast ? `&with_cast=${with_cast}` : ``}${query ? `&query=${query}` : ``}`).then(response => response.json()).then(response => display_search(response.results))
}

checkScroll = () => {
    cards = document.getElementsByClassName(`film-card`)

    last_card = cards[cards.length - 1]

    last_card_pos = last_card.getBoundingClientRect()

    if (last_card_pos.y < last_card_pos.height * 1.5) {
        page++;
        window.removeEventListener(`scroll`, checkScroll)
        search()
    }
}

// Show the modal with the film details
showFilmDetails = (film) => {
    console.log(film)

    film_details_master_title.innerText = film.title
    film_details_img.src = image_base_path + film.poster_path
    film_details_title.innerHTML = film.original_title + `<span class="text-muted"> (${film.release_date.substr(0, 4)})</span>`
    film_details_overview.innerText = film.overview
}

search()