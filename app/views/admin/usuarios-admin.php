<?=$cabecera?>

<br>
    <br>
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
     <?php foreach($usuarios as $usuario):?>
        <tr >
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nombre'];?></td>
            <td><?=$usuario['apellido'];?></td>
            <td>$<?=$usuario['email'];?></td>
            <td><?=$usuario['usuario'];?> unidades</td>
            <?php if($usuario['tipo de usuario'] == 1){?>
                <td>Usuario</td>
            <?php}else{?>
                <td>Administrador</td>
            <?php}?>

            <?php if($usuario['baja'] == 'no'){?>
                <td><a href="">Baja</a></td>
            <?php}else{?>
                <td><a href="">Alta</a></td>
            <?php}?>
                
        </tr>
        <?php endforeach;?>
  </tbody>
</table>


<?=$pie?>