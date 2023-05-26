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
                $counter = $session->get('cart_counter');
                for ($i = 0; $i < $counter; $i++) {
                    $cartKey = 'cart' . $i;
                    $datoCarro = $session->get($cartKey);
                ?>
                    <tr>
                        <td><?=$i+1?></td>
                        <td><?= $datoCarro['nombre'] ?></td>
                        <td><?= $datoCarro['cantidad'] ?></td>
                        <td>$<?= $datoCarro['importe_unitario'] ?></td>
                        <td>$<?= $datoCarro['importe'] ?></td>
                        <td><a href="<?=base_url('quitar/'.$i);?>"><button class="btn btn-danger" type="button">Quitar</button></a> </td>
                    </tr>
                    
            <?php }
                ?>

        </tbody>
    </table>
    <?php } ?>
</div>





<?=$pie?>