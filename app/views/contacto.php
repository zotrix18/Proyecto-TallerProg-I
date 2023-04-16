<?php require('header.php')?> 

<h2 class="text-center">¡Ponete en contacto con nosotros!</h2>
<div class="forma mx-3">
    <form>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="name" class="form-control border border-secondary" required id="nombre" placeholder="Nombre completo">
        </div>
        <br>
        <div class="form-group">
            <label for="telefono">Número de teléfono</label>
            <input type="tel" class="form-control border border-secondary" id="telefono" required placeholder="Telefono">
        </div>
        <br>
        <div class="form-group">
            <label for="Descripcion">Descripción</label>
            <textarea class="form-control border border-secondary" rows="5" required id="Descripcion" placeholder="Describa brevemente su consulta"></textarea>
        </div>
        <br>  
        <div class="form-check">
            <input type="checkbox" required class="form-check-input border border-secondary" id="leido">
            <label class="form-check-label" for="leido">He leido los <a href="http://localhost/proyecto_quintana/public/tyc">términos</a> </label>
        </div>
        <div class="separar text-center pt-5">
            <span class="submit-boton">Enviar</span>
        </div> 
    </form>
</div>
<?php require('footer.php')?> 