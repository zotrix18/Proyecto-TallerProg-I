<?php require('header.php')?> 
<div class="mx-auto">
    <form>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="email" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Ingrese su nombre completo">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <br>
        <div class="form-group">
            <label for="telefono">Numero de telefono</label>
            <input type="tel" class="form-control" id="telefono" placeholder="Telefono">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="leido">
            <label class="form-check-label" for="leido">He leido los <a href="http://localhost/proyecto_quintana/public/tyc">terminos</a> </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php require('footer.php')?> 