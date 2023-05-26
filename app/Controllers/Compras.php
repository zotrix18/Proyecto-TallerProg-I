<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Compra;
use App\Models\Producto;

class Compras extends Controller{

    public function agregarCarrito($id = NULL){
        $productos=new Producto();
        $seleccionProd = $productos->where('id', $id)->first();
        $session=session();
        $counter = $session ->get('cart_counter');
        $session->set('cart_counter', $counter + 1);
        $cartKey= 'cart'.$counter;
        // var_dump($cartKey);
        $datosCart=[
            'id_producto'=>$seleccionProd['id'],
            'nombre'=> $seleccionProd['nombre'],
            'cantidad'=>1,
            'importe_unitario'=>$seleccionProd['precio'],
            'importe'=> 1*$seleccionProd['precio'],
            'fecha'=>date('d-m-y')
        ];
        
        $session->set($cartKey, $datosCart);
        return $this->response->redirect(base_url('catalogo'));
    }

    public function carrito(){
        $session = session();
        $counter = $session->get('cart_counter');
        for ($i = 1; $i < $counter; $i++) {
            $cartKey = 'cart' . $i;
            $cartItem = $session->get($cartKey);
            $datos[$cartKey]=$cartItem;
            // var_dump($cartKey);
            // var_dump($datos[$cartKey]);
        }
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('carrito.php', $datos);
    }

    public function quitarItemCarrito($idCart = NULL){
        $cartKey = 'cart'. $idCart;
        $session = session();
        $session->remove($cartKey);
        $session->set('cart_counter', $counter - 1);
        return $this->response->redirect(base_url('carrito'));
    }
    
}