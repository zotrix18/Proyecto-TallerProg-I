<?php require('header.php')?> 

<body>
<h2 class="text-center">¡Ponete en contacto con nosotros!</h2>
<div class="container-fluid py-5 my-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
            <iframe class="mapita text-center w-75 h-75 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1756.014742988809!2d-58.783920913816935!3d-27.465838356075682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b48189fcf33%3A0xf8225d446ade7d20!2sLa%20Reina%20Corrientes!5e0!3m2!1ses-419!2sar!4v1681856656410!5m2!1ses-419!2sar"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
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
                    <label for="email">Número de teléfono</label>
                    <input type="email" class="form-control border border-secondary" id="email" required placeholder="Correo">
                </div>
                <br>
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control border border-secondary" id="asunto" required placeholder="Asunto">
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
    </div>
</div>
<?php require('footer.php')?> 