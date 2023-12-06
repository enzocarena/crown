<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Models\datosenviomodel;

class carritomodel extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'id_carrito';
    protected $allowedFields = ['id_talle_producto', 'cantidad', 'id_usuario'];

    
    public function actualizarCantidad($id_talle_producto, $nueva_cantidad)
    {
        $data = [
            'cantidad' => $nueva_cantidad,
        ];

        $this->where('id_talle_producto', $id_talle_producto)
            ->set($data)
            ->update();
    }

    public function eliminarProducto($id_talle_producto)
    {
        $this->where('id_talle_producto', $id_talle_producto)
            ->delete();
    }


}
 