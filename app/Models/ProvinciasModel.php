<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinciasModel extends Model
{
    protected $table = 'provincia'; 
    protected $primaryKey = 'id_provincia'; 
    protected $allowedFields = ['id_provincia', 'nombre']; 
    public function obtenerProvincias()
    {
        return $this->findAll();
    }
}