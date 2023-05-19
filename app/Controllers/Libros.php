<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function index(){
        // Se crea una instancia de libro de clase Libro (desde el modelo)
        $libro = new Libro(); 
        // Crea una variable llamado datos conteniendo un indice libros, ordenado por id y que busque en todos los registros
        $datos['libros']=$libro->orderBy('id', 'ASC')->findAll(); 
        return view ('libros/listar.php', $datos); //se le pasa la variable a la vista
    }

    public function crear(){
        return view('libros/crear');
    }

    public function guardar(){
        $validacion= $this->validate([
            'nombre'=>'required|min_length[3]',
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,3000]', //esta en kb
            ]
        ]);

        if(!$validacion){
            return $this->response->redirect(site_url('/listar'));
        }
        
        $libro = new Libro();

        if ($imagen = $this->request->getFile('imagen')) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('uploads/',$nuevoNombre);

            $datos = [
                'nombre' => $this->request->getVar('nombre'),
                'imagen' => $nuevoNombre];
            $libro->insert($datos);
        } 
            return $this->response->redirect(site_url('/listar'));
    }

    public function borrar($id=null){
        $libro = new Libro();
        $datosLibro= $libro->where('id', $id)->first();
        $ruta=('uploads/'.$datosLibro['imagen']);
        unlink($ruta);
        $libro->where('id',$id)->delete();
        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($id=null){
        $libro= new Libro();
        $datos['libro']=$libro->where('id', $id)->first();

        return view('libros/editar.php', $datos);
    }

    public function actualizar(){
        $libro= new Libro();
        $datos = [
            'nombre' => $this->request->getVar('nombre')];
        $id=$this->request->getVar('id');
        $libro->update($id, $datos);

        $validacion= $this->validate([
            'imagen'=>[
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,3000]', //esta en kb
            ]
        ]);

        if($validacion){
            
            if ($imagen = $this->request->getFile('imagen')) {

                $datosLibro=$libro->where('id',$id)->first();

                $ruta=('uploads/'.$datosLibro['imagen']);
                unlink($ruta);

                $nuevoNombre = $imagen->getRandomName();
                $imagen->move('uploads/', $nuevoNombre);
    
                $datos = ['imagen' => $nuevoNombre];
                $libro->update($id,$datos);
                }
            }else{
                echo "Tamaño excedido";
            }

        return $this->response->redirect(site_url('/listar'));
    }
} 