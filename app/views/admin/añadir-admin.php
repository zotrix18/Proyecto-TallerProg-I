<?=$cabecera?>

<div class="container shadow-lg p-3 mb-5 bg-body rounded my-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Ingreso nuevo producto</h5>
                <p class="card-text">
                <form method="post" action="<?=site_url('guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" required value="<?=old('nombre')?>" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion:</label>
                        <input id="descripcion" required value="<?=old('descripcion')?>" class="form-control" type="text" name="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input id="stock" required value="<?=old('stock')?>" class="form-control" type="number" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input id="precio" required value="<?=old('precio')?>" class="form-control" type="number" name="precio">
                    </div>
    
                    <div class="form-group my-2">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" class="form-control" name="categoria" required>
                            <option value="">Seleccione categoria</option>
                            <option value="1">Bateria Moto</option>
                            <option value="2">Bateria Auto</option>
                            <option value="3">Bateria Estacionaria</option>
                            <option value="4">Bateria Camion</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input id="imagen" required class="form-control" type="file" name="imagen">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success mt-5" type="subtmit">Guardar</button>
                    </div>
                </form>     
                </p>
            </div>
        </div>
</div>

<?=$pie?>