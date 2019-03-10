@extends("master")

@section("main")
    <h2>Product Catalog</h2>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product -> code) }}">
                    {{ $product -> name }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection