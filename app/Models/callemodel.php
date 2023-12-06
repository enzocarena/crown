<?php

namespace App\Models;

use CodeIgniter\Model;

class callemodel extends Model
{
    protected $table = 'calle';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre'];

    
    public function obtenerIdCallePorNombre($nombre)
    {
        $result = $this->select('id')->where('nombre', $nombre)->first();

        return ($result) ? $result['id'] : null;
    }

    public function insertarCalle($data)
    {
        $this->insert($data);
        return $this->insertID();
    }
}