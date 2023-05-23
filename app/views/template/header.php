<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electro Voltaics S.A.</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity=" " crossorigin="">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/js/jquery.min.js">

    <?php
    $session=session();
    $logSesion = $session->get('usuario');
    if($session->has('usuario')){
        // session_destroy();
        // $logSesion = $session->get('usuario');
        // print_r($logSesion);
        $nombre = $logSesion['nombre'];
        $apellido = $logSesion['apellido'];
        
        ?>

        
        <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid" >
        <a class="navbar-brand" href="http://localhost/proyecto_quintana/public/">Electro Voltaics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/nosotros">Quienes Somos</a></li>    
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/enConstruccion">Catalogo</a></li>            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/enConstruccion">Consultas</a></li>            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/comercializacion">Comercializacion</a></li>            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/tyc">Terminos y Condiciones</a></li>
              </ul>
            </li>
          </ul>

        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <div class="text-center">
              <p> Hola <?=$nombre?>, <?=$apellido?></p>
              <a href="<?=site_url('logout')?>">Salir</a>
          </div>  
        </div>
      </div>
    </nav>
    
    <?php
    }else{?>
        
      <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid" >
        <a class="navbar-brand" href="http://localhost/proyecto_quintana/public/">Electro Voltaics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/contacto">Contacto</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/nosotros">Quienes Somos</a></li>    
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/enConstruccion">Catalogo</a></li>            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/enConstruccion">Consultas</a></li>            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/comercializacion">Comercializacion</a></li>            
            <li class="nav-item"><a class="nav-link" href="http://localhost/proyecto_quintana/public/tyc">Terminos y Condiciones</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <?php
            // Obtener la instancia del servicio Request
            $request = request();

            // Obtener la URL actual
            $paginaActual = $request->uri->getPath();

            // Se define la página deseada
            $paginaDeseada = 'login';

            //Si esta en login, no muestra la ruta a la pagina login
            if (!($paginaActual === $paginaDeseada)) {
          ?>
                <div class="text-center">
                  <a href="<?=site_url('login')?>">Logearse</a>    
                </div> 
            <?php
            } 
            ?>
      </div>
    </nav>
<?php
    }
    ?>
    

</head>
<body>
<?php if(session('mensaje')){?>

<div class="alert alert-danger text-center" role="alert">
    <?php 
        echo session('mensaje');
    ?>
</div>
<?php
}?>
  

    
