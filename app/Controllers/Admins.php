<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
use App\Models\Compra;

class Admins extends Controller{

    public function inicio(){
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/inicio-admin.php', $datos);
    }

    public function productosAdmin(){
        $producto=new Producto();
        $datos['productos']=$producto->orderBy('id')->findAll();
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/productos-admin.php', $datos);
    }

    public function añadir(){
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/añadir-admin.php', $datos);
    }

    public function facturas(){
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        
        $fecha = $this->request->getVar('fecha');
        $compra = new Compra();
        $datos['prueba']=$fecha;
       

        if ($fecha !=NULL) {
            $compra->where('fecha_alta >=', $fecha);
        }else{
            $datos['datos_compras'] = $compra->orderBy('id', 'ASC')->findAll(); 
        }
        
        
        return view('admin/compras-admin.php', $datos);
    }
   
}