<?=$cabecera?>
<?php
//espacio para pruebas
// if($datos_compras != NULL){
var_dump($prueba);
// }
?>

<div class="shadow p-3 my-5 mx-5 bg-body rounded conteiner text-center">
  <div class="conteiner text-center my-5">
  <form method="get" action="<?= base_url('facturas') ?>">
    <label for="fecha">Filtrar por fecha:</label>
    <input type="date" id="fecha" name="fecha">
    <input type="submit" value="Filtrar">
  </form>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Total</th>
          <th scope="col">Metodo de Pago</th>
          <th scope="col">Numero de Tarjeta</th>
          <th scope="col">Cuotas</th>
          <th scope="col">Envio</th>
          <th scope="col">Direccion</th>
          <th scope="col">Fecha</th>
          <th scope="col">Detalle</th>
      </tr>
    </thead>
    <tbody>
      <?php 
    //   var_dump($datos_compras);
    // if(datos_compras)  
    
    foreach($datos_compras as $cabeceraFactura): 
        $total = number_format($cabeceraFactura['total'], 2, ',', '.');
        if($cabeceraFactura['metodo_pago'] == 1){
            $metodo = 'Efectivo / Cheque';
            $tarjeta = 'No Corresponde';
        }else{
            $metodo = 'Tarjeta Credito / Debito';
            $tarjeta = '••••' . (substr($cabeceraFactura['numero_tarjeta'], -4)); 
        }
        
        $fecha =  date("d-m-Y", strtotime($cabeceraFactura['fecha_alta']));
        
        ?>
          <tr >
              <td><?=$cabeceraFactura['id'];?></td>
              <td>$<?=$total;?></td>
              <td><?=$metodo;?></td>
              <td><?=$tarjeta?></td>
              <td><?=$cabeceraFactura['cuotas'];?></td>
              <td><?=$cabeceraFactura['envio'];?></td>
              <td><?=$cabeceraFactura['direccion'];?></td>
              <td><?=$fecha;?></td>
              <td> 
                  <a href="<?= base_url('comprobante/' . $cabeceraFactura['id']);?>" class="btn btn-info" type="button">Ver detalle</a>
                </td>
          </tr>
          
          <?php 
        endforeach;?>
        </tbody>
    </table>

</div>

<?=$pie?>