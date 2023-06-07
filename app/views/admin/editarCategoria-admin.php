<?=$cabecera?>

<form method="post" action="actualizarCategoria" enctype="multipart/form-data">

    
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input 
        id="precio" 
        value="<?=$producto['precio']?>" 
        class="form-control" 
        type="text" 
        name="precio">
    </div>

</form>

<?=$pie?>