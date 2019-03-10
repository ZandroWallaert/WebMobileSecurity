@extends("master")

@section("main")

    <form method="post" action="{{ route('addToCart') }}">
        @csrf

        <h2>{{ $product -> name }}</h2>

        <img src='{{ asset("images/{$product -> code}.jpg") }}' id="product"/>
        <p>{{ $product -> description }}</p>

        <p>Unit price: <strong>{{ $product -> price }}</strong></p>

        <input type="hidden" name="code" value="{{ $product -> code }}"/>
        <input type="submit" value="Add to cart"/>

    </form>

@endsection