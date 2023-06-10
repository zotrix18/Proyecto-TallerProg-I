<?=$cabecera?>

<br>
<br>


<div class="shadow p-3 mb-5 mx-5 bg-body rounded conteiner">
  
<div class="ml-5">
  <a class="text-light btn btn-success m-2" href="<?=base_url('/añadir')?>" >Añadir Producto</a>
</div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Categoria</th>
          <th scope="col">Nombre</th>
          <th scope="col">descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
          <th scope="col">Imagen</th>
          <th scope="col">Acciones</th>
          <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($productos as $producto):
        
          $cat = $categorias[($producto['id_categoria'] - 1)];
        
        ?>
          <tr >      
              <td><?=$producto['id'];?></td>
              <td><?=$cat['nombre'];?></td>
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
              
              <?php if($producto['baja'] == 0){ ?>
                        <a class="btn btn-danger" href="<?=base_url('bajaProducto/' . $producto['id']);?>">Baja</a>
                    <?php }else{?>
                        <a class="btn btn-success" href="<?=base_url('bajaProducto/' . $producto['id']);?>">Alta</a>
                    <?php }  ?>
              </td>
          </tr>
          <?php endforeach;?>
    </tbody>
  </table>
</div>

    




<?=$pie?>