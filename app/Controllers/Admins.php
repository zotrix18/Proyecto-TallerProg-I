<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Admins extends Controller{

    public function inicio(){
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/inicio-admin.php', $datos);
    }

    public function productosAdmin(){
        $productos = new Producto();
        $datos['productos']=$productos->orderBy('id', 'ASC')->findAll();
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/productos-admin.php', $datos);
    }
}