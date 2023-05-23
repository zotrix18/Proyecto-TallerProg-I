<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Admins extends Controller{

    public function inicio(){
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/inicio-admin.php', $datos);
    }
}