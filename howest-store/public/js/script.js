"use strict";

document.addEventListener("DOMContentLoaded", loadCountries);

function loadCountries() {
    fetch("https://restcountries.eu/rest/v2/regionalbloc/eu").then(function (res) {
        return res.json();
    }).then(function (json) {
        let countries = document.getElementById("countries");
        countries.innerHTML = "";

        json.forEach(function (country) {
            countries.innerHTML += country.name + "; "
        })
    });
}
