<?=$cabecera?> 

<body>
<h2 class="text-center">¡Ponete en contacto con nosotros!</h2>
<div class="container-fluid py-5 my-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-5 text-center">
        <iframe class="w-75 h-75" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442.51552329872135!2d-58.785951055193415!3d-27.465392899999973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b1e7c96546f%3A0x5fd8545ab4c46264!2sAv.%20Libertad%205251%2C%20W3402%20Corrientes!5e0!3m2!1ses-419!2sar!4v1682382082279!5m2!1ses-419!2sar"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="mb-0 ">Titular: Quintana Facundo</p>
            <p class="mb-0">Av. Libertad 5289</p>
            <p class="mb-0">Tel.: +54 3795334455</p>
        </div>
          <div class="col-sm-12 col-md-6 col-lg-7 border border-dark shadow p-3 mb-5 bg-body rounded">
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="name" class="form-control border border-secondary "  required id="nombre" placeholder="Nombre completo">
                </div>
                <br>
                <div class="form-group">
                    <label for="telefono">Número de teléfono</label>
                    <input type="number" class="form-control border border-secondary" required id="telefono"  placeholder="Telefono">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Correo Electronico</label>
                    <input type="email" class="form-control border border-secondary" required id="email"  placeholder="Correo">
                </div>
                <br>
                <div class="form-group">
                    <label for="asunto">Asunto</label>
                    <input type="text" class="form-control border border-secondary" required id="asunto"  placeholder="Asunto">
                </div>
                <br>
                <div class="form-group">
                    <label for="Descripcion">Descripción</label>
                    <textarea class="form-control border border-secondary" rows="5"  required id="Descripcion" placeholder="Describa brevemente su consulta"></textarea>
                </div>
                <br>  
                <div class="form-check">
                    <input type="checkbox"  required class="form-check-input border border-secondary" id="leido">
                    <label class="form-check-label" for="leido">He leido los <a href="http://localhost/proyecto_quintana/public/tyc">términos y condiciones de la página</a> </label>
                </div>
                <div class="separar text-center pt-5">
                    <button type="submit button" class="btn btn-primary" ><span class="submit-boton button btn btn-primary">Enviar</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?=$pie?>