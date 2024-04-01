<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container text-center">
        <form action="{{route('products.update',$products->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:
                    <input type="text" id="nom" name="nom" class="form-control" value="{{$products->nombre}}" required>
                </label>
            </div>
            <div class="mb-3">
                <label for="descri" class="form-label">Descripción:
                    <input type="text" id="descri" name="descri" class="form-control" value="{{$products->descripcion}}" required>
                </label>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:
                    <input type="number" id="precio" name="precio" class="form-control" value="{{$products->precio}}" required>
                </label>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">

        </form>
    </div>
</body>
</html>