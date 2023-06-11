<?=$cabecera?>

<div class="shadow p-3 my-5 mx-5 bg-body rounded conteiner">
  
    <div class="ml-5">
    <a class="text-light btn btn-success m-2" href="<?=base_url('/añadirCategoria')?>" >Crear Categoria</a>
    </div>

    <div>
    <form method="get" action="" enctype="multipart/form-data">
    <label for="categoria">Filtrar por Categoria</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    </form>

    </div>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($categorias as $categoria): ?>
            <tr >      
                <td><?=$categoria['id']?></td>
                <td><?=$categoria['nombre']?></td>
                <td> 
                    <a href="<?= base_url('editarCategoria/'.$categoria['id']);?>" class="btn btn-info" type="button">Editar</a>
                
                <?php if($categoria['baja'] == 0){ ?>
                            <a class="btn btn-danger" href="<?=base_url('bajaCategoria/' . $categoria['id']);?>">Baja</a>
                        <?php }else{?>
                            <a class="btn btn-success" href="<?=base_url('bajaCategoria/' . $categoria['id']);?>">Alta</a>
                        <?php }  ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>




<?=$pie?>