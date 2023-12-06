<?php

namespace App\Models;

use CodeIgniter\Model;

class historialcompra extends Model
{
    protected $table = 'detalle_venta';
    protected $primaryKey = 'id_detalle_venta'; 
    protected $allowedFields = ['id_venta', 'id_producto', 'cantidad', 'precio'];

    public function agregarDetalleVenta($idVenta, $idProducto, $cantidad, $precio)
    {
        
        $data = [
            'id_venta'    => $idVenta,
            'id_producto' => $idProducto,
            'cantidad'    => $cantidad,
            'precio'      => $precio
        ];

        $this->insert($data);
    }
}
      

