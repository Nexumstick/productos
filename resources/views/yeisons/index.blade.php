<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    echo $productos;
    
        ?>
        
        <div class="container">
            <table>
                <thead>
                    <tr>Nombre</tr>
                    <tr>Var_dump</tr>
                </thead>
                @foreach ($productos as $producto)
                <tbody>
                    <tr><td>
                        {{ $producto->name}}
                    </td>
                    <td>
                        {{ $producto }}
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>


