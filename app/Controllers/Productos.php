<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;

class Productos extends Controller{

    public function guardar(){
                
        $validacion= $this->validate([
            'nombre'=>'required|min_length[3]',
            'descripcion'=>'required|min_length[3]',
            'stock' => 'required|greater_than[0]',
            'precio'=>'required|greater_than[99]',
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,3000]', //esta en kb
            ]
        ]);

    
        if(!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Revise la informacion');
            return redirect()->back()->withInput();
        }
        
        $producto = new Producto();

        if ($imagen = $this->request->getFile('imagen')) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('uploads/',$nuevoNombre);

            $datos = [
                'nombre' => $this->request->getVar('nombre'),
                'descripcion' => $this->request->getVar('descripcion'),
                'stock' => $this->request->getVar('stock'),
                'precio' => $this->request->getVar('precio'),
                'imagen' => $nuevoNombre];
            $producto->insert($datos);
        } 
            return $this->response->redirect(site_url('productosAdmin'));
    }
    
    public function editar($id=NULL){
        $producto= new Producto();
        $datos['producto']=$producto->where('id', $id)->first();
        $datos['cabecera']= view('template/header-admin.php');
        $datos['pie']= view('template/footer.php');
        return view('admin/editar-admin.php', $datos);
    }

    public function actualizar(){
          
        $validacion= $this->validate([
            'nombre'=>'required|min_length[3]',
            'descripcion'=>'required|min_length[3]',
            'precio'=>'required|greater_than[99]',
            'stock' => 'required|greater_than[0]'
        ]);


        if(!$validacion){
            $session=session();
            $session->setFlashdata('mensaje','Revise la informacion');
            return redirect()->back()->withInput();
        }

        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'descripcion'=> $this->request->getVar('descripcion'),
            'precio'=> $this->request->getVar('precio'),
            'stock' => $this->request->getVar('stock')
         ];

        $validacion= $this->validate([
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,36000]', //esta en kb
            ]
        ]);

        // var_dump($validacion);
        $productos= new Producto();
        $id=$this->request->getVar('id');
        
        if($validacion){
            //Si se cambia la imagen
            if ($imagen = $this->request->getFile('imagen')) {
                echo 'hay img';

                // desvinculacion de foto anterior
                // $datosProducto=$productos->where('id',$id)->first();              
                // $ruta=('uploads/'.$datosProducto['imagen']);
                // unlink($ruta);

                $nuevoNombre = $imagen->getRandomName();
                $imagen->move('uploads/', $nuevoNombre);
    
                $datos = [
                    'nombre' => $this->request->getVar('nombre'),
                    'descripcion'=> $this->request->getVar('descripcion'),
                    'precio'=> $this->request->getVar('precio'),
                    'stock' => $this->request->getVar('stock'),
                    'imagen' => $nuevoNombre
                ];
                
                // var_dump($datos);
                $productos->update($id, $datos);

            }else{
                $session=session();
                $session->setFlashdata('mensaje','Tamaño excedido');
                return redirect()->back()->withInput();
                }
            }else{
            //Si no se cambia la imagen
                $productos->update($id, $datos);
                
            }
        return $this->response->redirect(site_url('productosAdmin'));
    }

    public function listar(){
        $productos = new Producto();
        $datos['productos']= $productos->orderBy('id', 'ASC')->findAll();
        $datos['cabecera']= view('template/header.php');
        $datos['pie']= view('template/footer.php');
        return view('catalogo.php', $datos);
    }
}

