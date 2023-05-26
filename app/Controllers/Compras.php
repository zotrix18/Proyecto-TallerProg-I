<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Compra;
use App\Models\Producto;

class Compras extends Controller{

    public function agregarCarrito($id = NULL){
        var_dump($id);
        $productos=new Producto();
        
    }
}