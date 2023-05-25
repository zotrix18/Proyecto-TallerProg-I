<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mensaje;
class Mensajes extends Controller{

    public function listar(){
        $mensajes = new Mensaje();
        $datos['mensajes'] = $mensajes->orderBy('id', 'ASC')->findAll();
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/mensajes-admin', $datos);
    }
}