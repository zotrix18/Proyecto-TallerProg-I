<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{

    public function login(){
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('login.php',$datos);
    }

    public function sigin(){
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('sigin.php',$datos);
    }

    public function iniciar(){
        // $usuario = new Usuario();
        $password = $_POST['pass'];
        $hashedPass = hash('sha256', $pass);

        $datos = [
            'nombre' => $this->request->getVar('user'),
            'contraseña' => $hashedPass
        ];
        print_r($datos);
    }

    public function registrar(){
        $password = $_POST['pass'];
        $validacion= $this->validate([
            'nombre'=>'required|min_length[1]',
            'apellido'=>'required|min_length[1]',
            'email'=>'required|min_length[1]',
            'user'=>'required|min_length[1]' 
        ]);

        if ((strlen($password) < 5)) {
            // La contraseña no cumple con la longitud mínima requerida
            $session=session();
            $session->setFlashdata('mensaje','La contraseña debe tener almenos 5 caracteres');
            // $validacion=false;
            return redirect()->back()->withInput();

        } 

        if(!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Revise la informacion');
            return redirect()->back()->withInput();
        }
        $usuario = new Usuario();


        
        $hashedPass = hash('sha256', $password);

        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido'=> $this->request->getVar('apellido'),
            'email'=>$this->request->getVar('email'),
            'usuario'=>$this->request->getVar('user'),
            'pass'=>$hashedPass,
            'perfil_id'=>'1',
            'baja'=>'no'
        ];
        
        
        
        print_r($datos);

    }
}