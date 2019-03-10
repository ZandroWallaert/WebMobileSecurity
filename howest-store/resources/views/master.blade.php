<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/screen.css') }}"/>
</head>
<body>
<div id="container">
    <header>
        <h1>Howest Store</h1>
    </header>

    <div>
        <main>
            @yield("main")
        </main>

        <aside>
            <h3>Cart</h3>

            @isset($cart)
                <ul>
                    @foreach ($cart as $elem)
                        <li>{{ $elem -> name }}: &euro; {{ $elem -> price }}</li>
                    @endforeach
                </ul>
            @else
                <p>Your cart is empty</p>
            @endisset
        </aside>
    </div>

    <footer>
        <p>&copy; 2019 Howest University of Applied Sciences</p>
        <p>
            We deliver to the following countries:
            <span id="countries"></span>
        </p>
    </footer>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
