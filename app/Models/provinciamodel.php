<?php

namespace App\Models;

use CodeIgniter\Model;

class provinciamodel extends Model
{
    protected $table = 'provincia';
    protected $primaryKey = 'id_provincia';
    protected $allowedFields = ['nombre'];

    public function obtenerIdProvinciaPorNombre($nombre)
    {
        $result = $this->select('id_provincia')->where('nombre', $nombre)->first();

        return ($result) ? $result['id_provincia'] : null;
    }

    public function insertarProvincia($data)
    {
        $this->insert($data);
        return $this->insertID();
    }
}