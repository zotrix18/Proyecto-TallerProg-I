<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Compra;
use App\Models\Producto;

class Compras extends Controller{

    public function agregarCarrito($id = NULL){
        $productos = new Producto();
        $seleccionProd = $productos->where('id', $id)->first();
        $session = session();
        $counter = $session->get('cart_counter');

        // Verificar si el producto ya existe en el carrito
        $carrito = [];
        //bandera que detecta si es existente o no
        $productoExistente = false;
        for ($i = 0; $i < $counter; $i++) {
            $cartKey = 'cart' . $i;
            $item = $session->get($cartKey);
            if ($item['id_producto'] === $seleccionProd['id']) {
                // El producto ya existe en el carrito, incrementar la cantidad
                $item['cantidad'] += 1;
                $item['importe'] = $item['cantidad'] * $item['importe_unitario'];
                $session->set($cartKey, $item);
                $productoExistente = true;
                break;
            }
            $carrito[$cartKey] = $item;
        }

        if (!$productoExistente) {
            $cartKey = 'cart' . $counter;
            $datosCart = [
                'id_producto' => $seleccionProd['id'],
                'nombre' => $seleccionProd['nombre'],
                'cantidad' => 1,
                'importe_unitario' => $seleccionProd['precio'],
                'importe' => 1 * $seleccionProd['precio'],
                'fecha' => date('d-m-y')
            ];
            
            $session->set($cartKey, $datosCart);
            $carrito[$cartKey] = $datosCart;
            $session->set('cart_counter', $counter + 1);
            $session->set('carrito_counter', $counter + 1);
        }

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

    public function quitarItemCarrito($cartKey = NULL){
        $session = session();
        $session->remove($cartKey);
        $counter= $session->get('cart_counter');
        $session->set('cart_counter', ($counter - 1));

        return $this->response->redirect(base_url('carrito'));
    }
    

    public function sumar($cartKey = NULL){
        $session = session();
        $productos=new Producto();
        $compra = $session->get($cartKey);
        // var_dump($compra);

        $seleccionProd = $productos->where('id', $compra['id_producto'])->first();
       
        $cant = ($compra['cantidad']+1);      

        $compraMOD = [
            'id_producto'=> $seleccionProd['id'],
            'nombre'=> $seleccionProd['nombre'],
            'cantidad'=> $cant,
            'importe_unitario'=> $seleccionProd['precio'],
            'importe'=> $cant * $seleccionProd['precio'],
            'fecha'=> date('d-m-y')
        ];
        
        $session->set($cartKey, $compraMOD);
        return $this->response->redirect(base_url('carrito'));
    }
    
    public function restar($cartKey = NULL){
        $session = session();
        $productos=new Producto();
        $compra = $session->get($cartKey);

        $seleccionProd = $productos->where('id', $compra['id_producto'])->first();
       
        $cant = ($compra['cantidad']-1);      

        $compraMOD = [
            'id_producto'=> $seleccionProd['id'],
            'nombre'=> $seleccionProd['nombre'],
            'cantidad'=> $cant,
            'importe_unitario'=> $seleccionProd['precio'],
            'importe'=> $cant * $seleccionProd['precio'],
            'fecha'=> date('d-m-y')
        ];
        
        $session->set($cartKey, $compraMOD);
        return $this->response->redirect(base_url('carrito'));
    }
}