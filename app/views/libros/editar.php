    
    Editar libros
    <?=$cabecera?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar Datos del libro:</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$libro['id']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input 
                        id="nombre" 
                        value="<?=$libro['nombre']?>" 
                        class="form-control" 
                        type="text" 
                        name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <img class="img-thumbnail" 
                            src="<?=base_url()?>uploads/<?=$libro['imagen'];?>" 
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

    

</body>
</html>