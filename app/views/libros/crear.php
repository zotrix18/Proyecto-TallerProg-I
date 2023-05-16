<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    Crear libros

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar Datos del libro:</h5>
            <p class="card-text">
                <form method="post" action="<?=base_url('http://localhost/proyecto_quintana/public/guardar')?>">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input id="imagen" class="form-control" type="file" name="imagen">
                    </div>

                <button class="btn btn-success" type="subtmit">Guardar</button>

                </form>            


            </p>
        </div>
    </div>

    

</body>
</html>