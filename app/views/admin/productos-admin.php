<?=$cabecera?>

<br>
    <br>
    <a class="text-dark" href="<?=base_url('/añadir')?>" >Añadir Producto</a>
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Imagen</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach($productos as $producto):?>
        <tr >
            <td><?=$producto['id'];?></td>
            <td><?=$producto['nombre'];?></td>
            <td><?=$producto['descripcion'];?></td>
            <td>$<?=$producto['precio'];?></td>
            <td><?=$producto['stock'];?> unidades</td>
            <td>
              <img class="img-thumbnail" 
              src="<?=base_url()?>uploads/<?=$producto['imagen'];?>" 
              alt="thumbnail"
              width=5%;>
            </td>
            <td> 
                <a href="<?=site_url('editar/'.$producto['id']);?>" class="btn btn-info" type="button">Editar</a>
              </td>
        </tr>
        <?php endforeach;?>
  </tbody>
</table>


    




<?=$pie?>