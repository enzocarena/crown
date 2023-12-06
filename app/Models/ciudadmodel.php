<?php

namespace App\Models;

use CodeIgniter\Model;

class ciudadmodel extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_provincia', 'nombre'];

    
    public function obtenerIdCiudadPorNombre($nombre)
    {
        $result = $this->select('id')->where('nombre', $nombre)->first();

        return ($result) ? $result['id'] : null;
    }

    public function insertarCiudad($data)
    {
        $this->insert($data);
        return $this->insertID();
    }
}