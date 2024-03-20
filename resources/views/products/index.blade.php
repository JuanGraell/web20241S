<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.store')}}" method="post">
        @csrf
        <label>Ingrese el nombre de producto: 
            <input type="text" name="product_name" placeholder="Ingrese el nombre del producto">
        </label>
        <br>
        <label>Ingrese el preico del producto
            <input step="0.5" type="number" name="product_price" placeholder="Ingrese el precio del producto">
        </label>
        <br>
        <label>Ingrese la cantidad disponible:
            <input type="number" name="product_stock" placeholder="Ingrese la cantidad disponible">
        </label>
        <br>
        <button type="submit">Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>