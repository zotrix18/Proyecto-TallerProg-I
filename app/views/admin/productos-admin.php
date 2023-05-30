<?=$cabecera?>

<br>
<br>


<div class="shadow p-3 mb-5 mx-5 bg-body rounded conteiner">
  
<div class="ml-5">
  <a class="text-light btn btn-success m-2" href="<?=base_url('/añadir')?>" >Añadir Producto</a>
</div>
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
                width=100vw;>
              </td>
              <td> 
                  <a href="<?= base_url('editar/'.$producto['id']);?>" class="btn btn-info" type="button">Editar</a>
                </td>
          </tr>
          <?php endforeach;?>
    </tbody>
  </table>
</div>

    




<?=$pie?>