<?php 
namespace App\Models;

use CodeIgniter\Model;

class Compra extends Model{
    protected $table      = 'compras';
    protected $primaryKey = 'id';
    protected $allowedFields= [
        'folio',
        'total',
        'id_usuario',
        'activo',
        'fecha_alta'
    ];
}