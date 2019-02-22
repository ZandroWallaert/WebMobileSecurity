document.addEventListener("DOMContentLoaded", init);
function init() {

}

function performWeatherSearch(tag) {
    let url = "https://api.openweathermap.org/data/2.5/weather?q=" + tag + "&appid=96a1b65a91890877ab0fb461eeac2d1a&units=metric&callback=myCallbackFunction";
    let script = document.createElement("script");
    script.src = url;
    document.getElementsByTagName("body")[0].appendChild(script);
}

function myCallbackFunction(json) {
    console.log(json);
    let output = document.querySelector("main div");
    output.innerHTML = `<h2>Weather for ${json.name}</h2>
    <ul>
    <li>Temperature: ${json.main.temp}°C</li>
    <li>Min. temperature: ${json.main.temp_min}°C</li>
    <li>Max. temperature: ${json.main.temp_max}°C</li>
    </ul>
    <img src="http://openweathermap.org/img/w/${json.weather[0].icon}.png" alt="icon">
    <p>${json.weather[0].main}</p>
`;
}
