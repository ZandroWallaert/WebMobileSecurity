<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Zandro Wallaert">
    <title>The Weather App</title>
</head>

<body>
<h1>The Weather App</h1>
<main>
    <p>City: <label>
        <input id="location" type="text">
    </label>
        <button onclick="performWeatherSearch(document.getElementById('location').value)" type="submit">Get weather
        </button>
    </p>
    <hr>
    <div></div>
</main>
</body>
<script src="script.js"></script>
</html>
