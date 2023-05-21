<?=$cabecera?>
    Listar Libros
    <!-- <?php print_r($libros); ?> -->
    <br>
    <br>
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
            <td>
              <img class="img-thumbnail" 
              src="<?=base_url()?>uploads/<?=$libro['imagen'];?>" 
              alt="thumbnail"
              width=10%;>
              
            </td>
            <td><?=$libro['nombre'];?></td>
            <td> 
                <a href="<?=base_url('editar/'.$libro['id']);?>" class="btn btn-info" type="button">Editar</a>
                <a href="<?=base_url('borrar/'.$libro['id']);?>" class="btn btn-danger" type="button">Borrar</a>
              </td>
        </tr>
        <?php endforeach;?>
  </tbody>
</table>

<a href="<?=base_url('/crear')?>" >Crear Libro</a>
    
</body>
</html>