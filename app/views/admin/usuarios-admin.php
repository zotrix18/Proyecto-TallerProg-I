<?=$cabecera?>
    <?php
    $session=session();
    $logSesion = $session->get('usuario');  
    ?>


<br>
<br>
<div class=" shadow p-3 mb-5 bg-body rounded conteiner text-center mx-5 my-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Usuario</th>
                <th scope="col">Tipo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario):
                $perfil = $usuario['perfil_id'];
                $baja = $usuario['baja'];
                ?>
                <tr>
                    <td><?=$usuario['id'];?></td>
                    <td><?=$usuario['nombre'];?></td>
                    <td><?=$usuario['apellido'];?></td>
                    <td><?=$usuario['email'];?></td>
                    <td><?=$usuario['usuario'];?></td>
                    
                    <?php if($perfil==1):?>
                        <td> Usuario</td>
                    <?php else:?>
                        <td> Administrador</td>
                    <?php endif;?>
                    
                    
                    <?php if($baja == 'no'):?>
                        <td><a class="btn btn-info" href="<?=base_url('baja/'.$usuario['id']);?>">Baja</a></td>
                    <?php else:?>
                        <td><a class="btn btn-danger" href="<?=base_url('baja/'.$usuario['id']);?>">Alta</a></td>
                    <?php endif;?>
                    
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>


</div>


<?=$pie?>