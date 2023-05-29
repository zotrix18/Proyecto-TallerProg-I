<?=$cabecera?>
<?php
    $session=session();
    $logSession = $session->get('usuario');
    $date = date('d-m-y');
    $carrito2 = $session->get('carro');
    $total = $session->get('total', 0);

?>
<div  class="sep conteiner shadow-lg p-3 bg-body rounded">
    <div class="text-center">
        <p class="h2 text-center">FACTURA X</p>
        <p class="h5 text-center">Fecha: <?=$date?></p>
    </div>

    <div class="conteiner">
        <div class="row">
            <div class="col-sm-2 border border-dark mx-3 my-4">
          Electro Voltaics S.A.
          Av. Libertad 5289
          Iva Regimen Comun
          No somos retenedores de IVA
          Inicio de actividades: 28/05/2012
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4 border-2 p-5 m-5 text-center">
               <p class="text-light bg-dark">FACTURA NUMERO:</p> 
               <p>xxxxxx</p>
            </div>
        </div>
    </div>


    <div class="conteiner">
        <div class="row">
            <div class="col-sm-2 border border-dark mx-3 my-4">
                <p>Detalle cliente:</p>
                <p>Nombre: <?=$logSession['nombre']?></p>  
                <p>Apellido: <?=$logSession['apellido']?></p>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-5 mx-3 my-4 border border-dark">
                <p>Fecha: <?php $fecha?></p>
                <p>Forma de pago: $metodo</p>
                <p>Forma de envio: $if-envio</p>
            </div>
        </div>
    </div>
        
    <div class="border border-dark">

        <table class="table border table-striped">
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
    </div>
    
</div>


<?=$pie?>