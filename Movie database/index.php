<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Zandro Wallaert">
    <title>Movie Database</title>
</head>

<body>
<h1>Movie database</h1>
<main><h2>Search for a movie by (part of) the title</h2>
    <p>Search for: <label>
            <input id="titel" type="text">
        </label>
        <button onclick="showMovies(document.getElementById('titel').value)" type="submit">Search</button>
    </p>
    <hr>
    <div></div>
</main>
</body>
<script src="script.js"></script>
</html>
