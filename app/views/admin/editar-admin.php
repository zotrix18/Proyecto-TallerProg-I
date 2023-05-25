<?=$cabecera?>

<div class="container">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ingresar Datos del producto:</h5>
                <p class="card-text">
                    <form method="post" action="" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?=$producto['id']?>">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input 
                            id="nombre" 
                            value="<?=$producto['nombre']?>" 
                            class="form-control" 
                            type="text" 
                            name="nombre">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input 
                            id="descripcion" 
                            value="<?=$producto['descripcion']?>" 
                            class="form-control" 
                            type="text" 
                            name="nombre">
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input 
                            id="precio" 
                            value="<?=$producto['precio']?>" 
                            class="form-control" 
                            type="text" 
                            name="precio">
                        </div>

                        <div class="form-group">
                            <label for="stock">Stock:</label>
                            <input 
                            id="stock" 
                            value="<?=$producto['stock']?>" 
                            class="form-control" 
                            type="text" 
                            name="stock">
                        </div>

                        <div class="form-group">
                            <label for="imagen">Imagen:</label>
                            <img class="img-thumbnail" 
                                src="<?=base_url()?>uploads/<?=$producto['imagen'];?>" 
                                alt="thumbnail"
                                width=10%;>
                                <br>
                            <input id="imagen" class="form-control" type="file" name="imagen">
                        </div>

                    <button class="btn btn-success" type="subtmit">Guardar</button>

                    </form>            


                </p>
            </div>
    </div>
</div>
<?=$pie?>