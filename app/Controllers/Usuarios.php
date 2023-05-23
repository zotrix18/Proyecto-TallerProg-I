<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{

    public function login(){
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('login.php', $datos);
    }

    public function sigin(){
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('sigin.php',$datos);
    }

    public function iniciar(){
        $usuario = new Usuario();
        $user = $this->request->getVar('user');
        $password = $_POST['pass'];
        $hashedPass = hash('sha256', $password);

        $nick=$usuario->where('usuario', $user)->first();
        

        if($nick==NULL){
            $session=session();
            $session->setFlashdata('mensaje','El usuario no existe');
            return redirect()->back()->withInput();
        }

        $passs=$usuario->where('pass', $hashedPass)->first();
        if($passs==NULL){
            $session=session();
            $session->setFlashdata('mensaje','Contraseña incorrecta');
            return redirect()->back()->withInput();
        }
        
        $session = session();
        $session->set('usuario', $usuario);
        return $this->response->redirect(site_url('/inicio'));
        
    }

    public function registrar(){
        $nombre = $this->request->getVar('nombre');
        $apellido = $this->request->getVar('apellido');
        $email = $this->request->getVar('email');
        $user = $this->request->getVar('user');
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

        //se instancia el acceso a la bd a travez del modelo
        $usuario = new Usuario();

        //verifica si el correo ya esta en la bd
        $correo=$usuario->where('email', $email)->first();
        if( !$correo == NULL){
            $session=session();
            $session->setFlashdata('mensaje','Correo ya registrado');
            return redirect()->back()->withInput();
        }
        
        //verifica que el user no estee siendo usado
        $nick=$usuario->where('usuario', $user)->first();
        if( !$nick ==NULL ){
            $session=session();
            $session->setFlashdata('mensaje','El usuario ya esta siendo usado');
            return redirect()->back()->withInput();
        }
        

        
        $hashedPass = hash('sha256', $password);

        $datos = [
            'nombre' => $nombre,
            'apellido'=> $apellido,
            'email'=> $email,
            'usuario'=> $user,
            'pass'=> $hashedPass,
            'perfil_id'=> 1,
            'baja'=>'no'
        ];
                
        $usuario->insert($datos);
        return $this->response->redirect(site_url('/login'));
    }

    public function inicio(){
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('inicio.php', $datos);
    }
}