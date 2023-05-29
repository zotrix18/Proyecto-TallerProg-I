<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DetCom;
use App\Models\Compra;
use App\Models\Producto;
class ComprasConfirmadas extends Controller{

    public function confirmarPago(){
        // echo 'funciona';
        $session = session();
        $total = $session -> get('total');
        $userInfo = $session->get('usuario');
        // var_dump($userInfo['id']);
        // var_dump($this->request->getVar('tarjeta'));
        // var_dump($this->request->getVar('fecha'));
        // var_dump($this->request->getVar('cvv'));
        // $cuotas = $_POST['cuota'];
        // var_dump($this->request->getVar('cuota')); 
        // var_dump($this->request->getVar('nombreTarjeta'));
        // var_dump($this->request->getVar('dni'));
        // var_dump($this->request->getVar('medio'));

        //ver si es en pago efectivo/cheque, si el contenido recepcionado es nulo
        if($this->request->getVar('tarjeta') != null){
           
           //es credito
            
                // var_dump($this->request->getVar('tarjeta'));
                if ($this->request->getVar('cuota')==3) {
                            $total = ($total*1.21);
                        }elseif ($this->request->getVar('cuota')==6){
                            $total = ($total*1.5);
                        }elseif ($this->request->getVar('cuota')==12){
                            $total = ($total*2.1);
                        }   

                // var_dump($total);
                if($this->request->getVar('medio') == 'opcion11'){
                            $medio = 'oca';
                        }elseif ($this->request->getVar('medio') == 'opcion12'){
                            $medio = 'andreani';
                        }elseif ($this->request->getVar('medio') == 'opcion13'){
                            $medio = 'presencial';
                        }


                if($this->request->getVar('direccion')!=NULL){
                    $direccion = $this->request->getVar('direccion');
                        }elseif($this->request->getVar('direccion2')!=NULL){
                            $direccion=  $this->request->getVar('direccion2');
                        }else{
                            $direccion = 'presencial';
                        }

                // var_dump($_POST['direccion']);        
                // var_dump($_POST['direccion2']);
                // var_dump($direccion);
                $compra = new Compra();

                $datos = [
                    'total' => $total,
                    'id_usuario' => $userInfo['id'],
                    'metodo_pago' => 2,
                    'numero_tarjeta' =>$this->request->getVar('tarjeta'),
                    'cuotas' => $this->request->getVar('cuota'),
                    'envio'=> $medio,
                    'direccion' => $direccion,
                    'fecha_alta' => date('d-m-y')
                ];

                // var_dump($datos);
                
                $compra->insert($datos);
                $datos = [];//limpieza del array datos
                $productos = new Producto();
                $detComs = new DetCom();
                $compras =  $compra->where('numero_tarjeta', $this->request->getVar('tarjeta') )->first();
                // var_dump($compras['id']);//id unico por compra
                $carrito2 = $session->get('carro');
                for ($i = 0; $i < count($carrito2); $i++) {
                    if(isset($carrito2[$i])){
                       $datoCarro = $carrito2[$i];
                       $total = $total + $datoCarro['importe'];
                       $datos = [
                        'id_compra' => $compras['id'],
                        'id_producto' => $datoCarro['id_producto'],
                        'nombre' => $datoCarro['nombre'],
                        'cantidad' => $datoCarro['cantidad'],
                        'importe_unitario' => $datoCarro['importe_unitario'],
                        'importe' => $datoCarro['importe'],
                        'fecha' => $datoCarro['fecha']
                       ];
                        }
                        $detComs->insert($datos);

                    }



                }else{//es efectivo
                    $compra = new Compra();
                    $datos = [
                        'total' => $total,
                        'id_usuario' => $userInfo['id'],
                        'metodo_pago' => 1,
                        'numero_tarjeta' =>'cheque/Efectivo',
                        'cuotas' => 1,
                        'envio'=> 'presencial',
                        'direccion' => 'no aplica',
                        'fecha_alta' => date('d-m-y')
                    ];
                    $compra->insert($datos);
                    $datos = [];//limpieza del array datos
                    $productos = new Producto();
                    $detComs = new DetCom();
                    $compras =  $compra->where('id_usuario', $userInfo['id'])->orderBy('id', 'DESC')->first();
                    // var_dump($compras['id']);//id unico por compra
                    $carrito2 = $session->get('carro');
                    for ($i = 0; $i < count($carrito2); $i++) {
                        if(isset($carrito2[$i])){
                        $datoCarro = $carrito2[$i];
                        $total = $total + $datoCarro['importe'];
                        $datos = [
                            'id_compra' => $compras['id'],
                            'id_producto' => $datoCarro['id_producto'],
                            'nombre' => $datoCarro['nombre'],
                            'cantidad' => $datoCarro['cantidad'],
                            'importe_unitario' => $datoCarro['importe_unitario'],
                            'importe' => $datoCarro['importe'],
                            'fecha' => $datoCarro['fecha']
                        ];
                            }
                            $detComs->insert($datos);

                        }
                    
                }
            }
        
        



}