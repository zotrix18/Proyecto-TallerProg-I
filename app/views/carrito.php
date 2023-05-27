<?=$cabecera?>
<?php
    $session = session();
    $counter = $session->get('cart_counter');
    ?>
    


<div class="table-responsive conteiner mx-5 shadow-sm p-3 my-5 bg-body rounded">
    <?php if($counter == 0){?>
                <div class="text-center"> Carro vacio</div>
        <?php } else{ ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Importe unitario</th>
                <th scope="col">Importe</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php
                $session = session();
                $counter = $session->get('carrito_counter');
                $counter2 = 1;
                for ($i = 0; $i < $counter; $i++) {

                    $cartKey = 'cart' . $i;
                    $datoCarro = $session->get($cartKey);
                    //si el contenido es null es porque se ha borrado, entonces se omite
                    if($datoCarro != NULL){?>
                        <tr>
                        <td><?=$counter2?></td>
                        <td><?= $datoCarro['nombre'] ?></td>
                        <div>
                            <td> 
                            <div class="conteiner">
                                <div class="row">
                                    <div class="text-center col-2 shadow-sm p-2 mb-2 mb-5 bg-body rounded border border-3">
                                        <a href="<?=base_url('restar/'. $cartKey);?>"><img src="assets/svg/solid/minus.svg" width=10vw alt="menos"></a>
                                    </div>
                                    <div class="text-center col-2 shadow-sm p-2 mb-5 bg-body rounded border border-2">
                                        <?=  $datoCarro['cantidad'] ?>
                                    </div>   
                                    <div class="text-center col-2 shadow-sm p-2 mb-5 bg-body rounded border border-3">
                                        <a href="<?=base_url('sumar/'. $cartKey);?>"><img src="assets/svg/solid/plus.svg" width=10vw alt="menos"></a>
                                    </div>
                                </div>
                                </div>
                            </td>
                        
                        <td>$<?= $datoCarro['importe_unitario'] ?></td>
                        <td>$<?= $datoCarro['importe'] ?></td>
                        <td><a href="<?=base_url('quitar/'.$i);?>"><button class="btn btn-danger" type="button">Quitar</button></a> </td>
                        <!-- ya que el contenido de $i es la iteracion real dentro de session, se usa como id -->
                    </tr>
                <?php }else{
                    $counter2=$counter2-1; } ?>
                    
                    <?php 
                    $counter2++;
                 }
                        ?>

        </tbody>
    </table>
    <?php } ?>
</div>





<?=$pie?>