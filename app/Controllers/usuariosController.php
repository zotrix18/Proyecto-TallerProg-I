<?php
namespace App\Controllers;
use App\Models\usuarios;
use CodeIgniter\Controller;
class usuarioController extends Controller
{
    // mostrar lista de usuarios
    public function index() {
        $usuario = new usuario();
        $data['usuarios'] = $usuario->orderBy('id', 'DESC')->findAll();
        return view('usuarios/index', $data);
    }
    // show create usuario form
    public function create() {
        return view('usuarios/create');
    }
    // save usuario data
    public function store() {
        $usuario = new usuario();
        $data = [
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'description'  => $this->request->getVar('description'),
        ];
        $usuario->insert($data);
        return $this->response->redirect(site_url('/usuarios'));
    }
    // show usuario
    public function edit($id) {
        $usuario = new usuario();
        $data['usuario'] = $usuario->where('id', $id)->first();
        return view('usuarios/edit', $data);
    }
    // update usuario data
    public function update() {
        $usuario = new usuario();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'description'  => $this->request->getVar('description'),
        ];
        $usuario->update($id, $data);
        return $this->response->redirect(site_url('/usuarios'));
    }
    // delete usuario
    public function delete($id) {
        $usuario = new usuario();
        $data['usuario'] = $usuario->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/products'));
    }
}