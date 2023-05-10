<?php
namespace App\Controllers;
use App\Models\Product;
use CodeIgniter\Controller;
class ProductController extends Controller
{
    // show products list
    public function index() {
        $producto = new producto();
        $data['productos'] = $producto->orderBy('id', 'DESC')->findAll();
        return view('productos/index', $data);
    }

    // show create producto form
    public function create() {
        return view('productos/create');
    }
    
    // save producto data
    public function store() {
        $producto = new producto();
        $data = [
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'description'  => $this->request->getVar('description'),
        ];
        $producto->insert($data);
        return $this->response->redirect(site_url('/productos'));
    }
    // show producto
    public function edit($id) {
        $producto = new producto();
        $data['producto'] = $producto->where('id', $id)->first();
        return view('productos/edit', $data);
    }
    // update producto data
    public function update() {
        $producto = new producto();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'description'  => $this->request->getVar('description'),
        ];
        $producto->update($id, $data);
        return $this->response->redirect(site_url('/productos'));
    }
    // delete producto
    public function delete($id) {
        $producto = new producto();
        $data['producto'] = $producto->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/productos'));
    }
}