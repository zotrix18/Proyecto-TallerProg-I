<?=$cabecera?>
<?php
    $session=session();
    $logSession = $session->get('usuario');
    $date = date('d-m-y');
    $carrito2 = $session->get('carro');
    $total = $session->get('total', 0);

?>
<div  class="sep conteiner shadow-lg p-5 bg-body rounded">
    <div class="text-center">
        <p class="h2 text-center">FACTURA X</p>
        <p class="h5 text-center">Fecha: <?=$date?></p>
    </div>

    <div class="conteiner my-5">
        <div class="row">
            <div class="col-lg-4 col-sm-11 border border-dark mx-3 my-4">
                <p>Electro Voltaics S.A.</p>
                <p>Av. Libertad 5289</p>
                <p>IVA Regimen Comun</p>
                <p>No somos retenedores de IVA</p>
                <p>Inicio de actividades: 28/05/2012</p>
            </div>
            <div class="col-lg-2 col-sm-11 mt-5 border border-dark stacked-box">
               <p class="text-light bg-dark">FACTURA NUMERO:</p> 
               <p>xxxxxx</p>
            </div>
        </div>
    </div>


    <div class="conteiner">
        <div class="row">
            <div class="col-lg-4 col-sm-11 ms-4 border border-dark mx-3 my-4">
                <p>Detalle cliente:</p>
                <p>Nombre: <?=$logSession['nombre']?></p>  
                <p>Apellido: <?=$logSession['apellido']?></p>
            </div>
            <div class="col-lg-1 col-sm-1"></div>
            <div class="col-lg-6 col-sm-11 mx-3 my-4 border border-dark">
                <p>Fecha: <?=$date?></p>
                <p>Forma de pago: $metodo</p>
                <p>Forma de envio: $if-envio</p>
            </div>
        </div>
    </div>
        
    <div class="border border-dark">

        <table class="table border table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Importe unitario</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    for ($i = 0; $i <= count($carrito2); $i++) {
                        $cartKey = 'cart' . $i;
                        if(isset($carrito2[$i])){
                            $datoCarro = $carrito2[$i];
                            $total = $total + $datoCarro['importe'];
                            ?>
                            <tr>
                                <td>#<?=($i+1) ?></td>
                                <td><?=$datoCarro['nombre'] ?></td>
                                <td>  
                                    <div class=" col-2 shadow-sm ml-5 p-2 mb-5 bg-body rounded border border-2">
                                        <?=$datoCarro['cantidad']?>
                                    </div>
                                </td>
                                <td>$<?= $datoCarro['importe_unitario'] ?></td>
                                <td>$<?= $datoCarro['importe'] ?></td>
                            </tr>
                        <?php
                            } 
                        } 
                ?>

            </tbody>
            </table>
            <div class="conteiner">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <p class="fs-4  text-center ">TOTAL: $<?=$total?> </p>        
                    </div>
                    
        
                </div>
            </div>
        </div>
        <br>
   <p class="text-muted">Gracias por su compra. Para cualquier consulta o asistencia adicional, no dude en ponerse en contacto con nuestro equipo de atención al cliente.</p>

   <div class="text-muted">
    <p> Teléfono: +543795334455</p>
    <p>Email: electro@voltaics.com</p>
    <p>Sitio web: ElectroVoltaics.com</p>
    </div>

    <p class="text-muted">Términos y condiciones:</p>
    
    <ul class="text-muted">
        <li>Todos los pagos deben realizarse en un plazo de 30 días a partir de la fecha de emisión de la factura.</li>
        <li>No se aceptan devoluciones después de 14 días a partir de la fecha de compra.</li>
        <li>Los productos deben ser devueltos en su estado original y sin usar para ser elegibles para un reembolso.</li>
    </ul>
    <p class="text-muted">Gracias nuevamente por elegir nuestros servicios.</p>
    
    
    
    <br>
    <br>
    <br>
</div>
    



<?=$pie?>