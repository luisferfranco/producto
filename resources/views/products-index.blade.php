<div>
    <h1>Products</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->nombre }}</li>
        @endforeach
    </ul>
    {{-- <a href="{{ route('products.create') }}">Create Product</a> --}}
</div>