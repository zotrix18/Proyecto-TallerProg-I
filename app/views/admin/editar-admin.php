<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity=" " crossorigin="">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/js/jquery.min.js">
<?=$cabecera?>

<div class="container">
    <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ingresar Datos del producto:</h5>
                <p class="card-text">
                    <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">

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