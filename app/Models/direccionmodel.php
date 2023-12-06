<?php

namespace App\Models;

use CodeIgniter\Model;

class direccionmodel extends Model
{
    protected $table = 'direccion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_calle', 'id_ciudad', 'id_venta', 'num_calle', 'direccion',];

    public function insertarDireccion($data)
    {
        $this->insert($data);
        return $this->insertID(); // Devuelve el ID del último insert
    }

    public function actualizarIdVenta($idDireccion, $idVenta)
    {
        $this->set('id_venta', $idVenta)
             ->where('id', $idDireccion)
             ->update();
    }
}
