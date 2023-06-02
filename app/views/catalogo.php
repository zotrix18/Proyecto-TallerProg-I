<?=$cabecera?>
<?php 
    $session=session();
    

    //verifica que si el usuario ya ha iniciado sesion no acceda a esta parte
    if($session ->has ('usuario')){
      $log = $session->get('usuario');
      
      //si es admin, no puede acceder al panel principal, solo al panel admin
      if($log['perfil_id'] == 2){
        header("Location: " . base_url('inicio'));
        exit();
      }
    }
    
    ?>
    
   
<div class="container shadow p-3 my-5 bg-body rounded">
  <?php $contador = 0; ?>
  <?php foreach ($productos as $producto) : ?>
    <?php if ($contador % 4 == 0) { ?>
      <div class="row">
    <?php } ?>
    
    <div class="col-md-3 col-sm-6 text-center my-3">
      <div class="card ">
        <div class="text-center mb-3">
            <img  
                src="<?=base_url()?>uploads/<?=$producto['imagen'];?>" 
                alt="thumbnail"
                width=200vw;>
        </div>
        <div class="card-body mb-3">
            <h5 class="card-title"><?=$producto['nombre']?></h5>
            <p class="card-text">$<?=$producto['precio']?></p>
            <p class="card-text"><?=$producto['descripcion']?></p>
            
            <?php 
            if($session->has('usuario')){?>
                <a href="<?= base_url('agregarCarrito/'.$producto['id']);?>" class="btn btn-success" type="button">Agregar al Carrito</a>

            <?php }?>
        </div>
        
      </div>
    </div>
    
    <?php $contador++; ?>
    <?php if ($contador % 4 == 0) { ?>
      </div>
    <?php } ?>
    
<?php endforeach;?>
  
  <?php if ($contador % 4 != 0) { ?>
    </div>
  <?php } ?>
</div>



<?=$pie?> 