<!-- resources/views/Products.blade.php -->

<h1>Products</h1>

<ul>
    @foreach($products as $product)
        <li>
            {{ $product->Name }} (ID: {{ $product->ID }})
        </li>
    @endforeach
</ul>