<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INDEX - BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <a href="products/create" class="btn-btn-succes">Crear Producto</a>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Vendedor</th>
                        <th>Opciones</th>
        
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
        
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->name }}</td>
                            <td>{{ $producto->description }}</td>
                            <td>{{ $producto->price }}</td>
                            <td>{{ $producto->seller }}</td>
                            <td><button class="btn btn-warning"><a href="{{route('products.edit',$producto->id)}}">Editar</a></button></td>
                            <td>
                                
                            
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>