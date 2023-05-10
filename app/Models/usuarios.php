<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $useAutoIncrement=true;
    protected $allowedFields = ['nombre', 'apellido', 'email', 'usuario', 'pass', 'perfil_id', 'baja'];
}

public function agregarUsuario($data)
{
    return $this->insert($data);
}

public function editarUsuario($id, $data)
{
    return $this->update($id, $data);
}

public function actualizarUsuario($where, $data)
{
    return $this->update($where, $data);
}

public function borrarUsuario($id)
{
    return $this->delete($id);
}

<?php