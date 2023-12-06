<?php

namespace App\Models;

use CodeIgniter\Model;

class ventamodel extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'id_venta';
    protected $allowedFields = ['id_usuario', 'id_datos_envio', 'fecha'];

    public function agregarDetalleVenta($id_usuario, $id_datos_envio, $fecha)
    {
        
        $precio = isset($precio) ? $precio : 0;

        $data = [
            'id_usuario' => $id_usuario,
            'id_datos_envio' => $id_datos_envio,
            'fecha' => $fecha,
            'precio' => $precio
        ];

        return $this->insert($data);
    }
}