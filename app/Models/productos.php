<?php
namespace App\Controllers;
use App\Models\productos;
use CodeIgniter\Controller;
class productosController extends Controller
{
    //el carrito debe vaciarse al realizarse la compra

    // show productoss list
    public function index() {
        $productos = new productos();
        $data['productoss'] = $productos->orderBy('id', 'DESC')->findAll();
        return view('productoss/index', $data);
    }
    // show create productos form
    public function create() {
        return view('productoss/create');
    }
    // save productos data
    public function store() {
        $productos = new productos();
        $data = [
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'description'  => $this->request->getVar('description'),
        ];
        $productos->insert($data);
        return $this->response->redirect(site_url('/productoss'));
    }
    // show productos
    public function edit($id) {
        $productos = new productos();
        $data['productos'] = $productos->where('id', $id)->first();
        return view('productoss/edit', $data);
    }
    // update productos data
    public function update() {
        $productos = new productos();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'description'  => $this->request->getVar('description'),
        ];
        $productos->update($id, $data);
        return $this->response->redirect(site_url('/productoss'));
    }
    // delete productos
    public function delete($id) {
        $productos = new productos();
        $data['productos'] = $productos->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/productoss'));
    }
}