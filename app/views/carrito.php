<?=$cabecera?>
<?php
    $session = session();
    $counter = $session->get('cart_counter');
    $carrito2 = $session->get('carro');
    $total = $session->get('total', 0);
    $total=0;
    ?>
    
<div class="table-responsive conteiner mx-5 shadow-sm p-3 my-5 bg-body rounded">
    <?php if($counter == 0){ ?>
        <div class="text-center fs-1">Carro vacío</div>
    <?php } else { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Importe unitario</th>
                    <th scope="col">Importe</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                for ($i = 0; $i <= count($carrito2); $i++) {
                   
                     if(isset($carrito2[$i])){
                        $datoCarro = $carrito2[$i];
                        $total = $total + $datoCarro['importe'];
                        ?>
                        <tr>
                            <td>#<?= ($i+1) ?></td>
                            <td><?= $datoCarro['nombre'] ?></td>
                            <td>
                                <div class="conteiner">
                                    <div class="row">
                                        <div class="text-center col-2 shadow-sm p-2 mb-2 mb-5 bg-body rounded border border-3">
                                            <a href="<?= base_url('restar/' . $i); ?>"><img src="assets/svg/solid/minus.svg" width=10vw alt="menos"></a>
                                        </div>
                                        <div class="text-center col-2 shadow-sm p-2 mb-5 bg-body rounded border border-2">
                                            <?= $datoCarro['cantidad'] ?>
                                        </div>
                                        <div class="text-center col-2 shadow-sm p-2 mb-5 bg-body rounded border border-3">
                                            <a href="<?= base_url('sumar/' . $i); ?>"><img src="assets/svg/solid/plus.svg" width=10vw alt="menos"></a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>$<?= $datoCarro['importe_unitario'] ?></td>
                            <td>$<?= $datoCarro['importe'] ?></td>
                            <td><a href="<?= base_url('quitar/' . $i); ?>"><button class="btn btn-danger" type="button">Quitar</button></a></td>
                        </tr>
                    <?php
                        } 
                    } 
            } ?>

           </tbody>
        </table>
    <?php
        if($counter != 0){ ?>
        
        <div class="conteiner">
            <div  class="row">
                <div class="col-sm-4">

                </div>

                <div class="col-sm-4">
                    <div class="text-center my-3">
                        <a href="<?= base_url('limpiar'); ?>"><button class="btn btn-danger" type="button">Limpiar Carrito</button></a>
                    </div>
                    <div class="text-center">
                        <a href="<?= base_url('pago'); ?>"><button class="btn btn-success" type="button">Continuar con la compra</button></a>
                    </div>
                </div>

                <div class="col-sm-4 ">
                    <p class="fs-4 d-line">TOTAL: $<?=$total?> </p>
                    
                </div>
            </div>
        </div>
        <?php } ?>
        
        <?php
            $session->set('total', $total);
        ?>
</div>
<?=$pie?>