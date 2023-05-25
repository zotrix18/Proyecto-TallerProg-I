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

    public function leido($id=NULL){
        $mensajes = new Mensaje();
        $mensajeleido= $mensajes->where('id', $id)->first();
        $mensajeleido=[
            'leido'=> '1'
        ];
        $mensajes->update($id, $mensajeleido);
        return $this->response->redirect(site_url('mensajes'));
    }
}