document.addEventListener("DOMContentLoaded", init);

function init() {

}

function showMovies(q) {
    document.querySelector("div").innerHTML = "";
    fetch("http://www.omdbapi.com/?s=" + q + "&apikey=c86a5567")
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            let data = json.Search;
            console.log(data);
            let output = document.querySelector("main div");
            data.forEach(function (movies) {
                output.innerHTML += `<article><h2>${movies.Title}</h2><img src="${movies.Poster}" alt="${movies.Title}">`;
            });
        }).catch(function (err) {
        console.error("Something went wrong:", err)
    });
}
