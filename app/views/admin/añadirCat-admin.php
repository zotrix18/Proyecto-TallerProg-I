<?=$cabecera?>

<div class="container my-5 shadow-lg p-3 mb-5 bg-body rounded ">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ingresar Datos de categoria:</h5>
                <p class="card-text">
                <form method="post" action="<?=site_url('/guardarCategoria')?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input 
                        id="nombre" 
                        class="form-control" 
                        type="text" 
                        name="nombre">
                    </div>

                    <div class="form-group my-3">
                        <label for="alta">Dar de alta Categoria</label>
                        
                        <input type="checkbox" name="alta" id="alta">
                    </div>

                    <div class="my-4 text-center">
                        <button class="btn btn-success" type="subtmit">Guardar</button>
                    </div>
                </form>
            </div>
    </div>
</div>

<?=$pie?>