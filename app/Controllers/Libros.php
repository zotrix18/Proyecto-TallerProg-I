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
        return view ('libros/listar.php',$datos); //se le pasa la variable a la vista
    }

    public function crear(){
        return view('libros/crear');
    }

    public function guardar(){
        $libro = new Libro();

        if ($imagen = $this->request->getFile('imagen')) {
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $nuevoNombre);
            $datos = [
                'nombre' => $this->request->getVar('nombre'),
                'imagen' => $nuevoNombre];
            $libro->insert($datos);

       
        echo "Ingresado a la bd";
    }
} 