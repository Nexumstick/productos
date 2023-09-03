<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
<div class="contaienr">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <form action="/products/{{$producto->id}}" method="POST">
              @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $producto->name }}" aria-describedby="emailHelp">
                 
                  </div>
                  <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                  <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $producto->description}}</textarea>
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="number" class="form-control" name="price" value="{{ $producto->price }}" aria-describedby="precio">
                  <div class="mb-3 form-check">
                    <input type="checkbox" name="activo"class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Activo</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>