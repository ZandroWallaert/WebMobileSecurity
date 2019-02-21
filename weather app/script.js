document.addEventListener("DOMContentLoaded", init);

function init() {

}

function performWeatherSearch(tag) {
    location = tag;
    console.log(location);
    let script = document.createElement("script");
    script.src = "https://api.openweathermap.org/data/2.5/weather?\n" +
        "q=${location}&appid=96a1b65a91890877ab0fb461eeac2d1a&units=metric,callback=processJSON";
    document.getElementsByTagName("body").appendChild(script);
}

function processJSON(json) {
    let div = document.querySelector("div");

}
