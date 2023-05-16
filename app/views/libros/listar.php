<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    Listar Libros
    <!-- <?php print_r($libros); ?> -->
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombres</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($libros as $libro):?>
        <tr >
            <td><?=$libro['id'];?></td>
            <td><?=$libro['imagen'];?></td>
            <td><?=$libro['nombre'];?></td>
        </tr>
        <?php endforeach;?>
  </tbody>
</table>

<a href="<?=base_url('http://localhost/proyecto_quintana/public/crear')?>" >Crear Libro</a>
    
</body>
</html>