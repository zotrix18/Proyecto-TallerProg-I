<?=$cabecera?>

<div class=" shadow p-3 mb-5 bg-body rounded conteiner text-center mx-5 my-5">
<div class="accordion accordion-flush" id="accordionFlushExample">
  
<?php foreach($mensajes as $mensaje):
  $leido = $mensaje['leido'];
  $asunto = $mensaje['asunto'];
  $mensaje = $mensaje['descripcion'];
   if($leido=):?>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#flush-collapseOne" 
      aria-expanded="false" 
      aria-controls="flush-collapseOne">
        <?=$asunto?>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
    
    
<?php endif;?>

    

 
</div>
</div>


<?=$pie?>