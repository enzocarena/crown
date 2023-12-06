<?php

namespace App\Controllers;

use App\Models\CarritoModel;
use App\Models\DetalleVentaModel;
use App\Models\historialcompra;
use App\Models\VentaModel;

class CompraController extends BaseController
{
    public function finalizarCompra()
    {
        // Obtener datos del carrito
        $idUsuario = 1;
        $carritoModel = new CarritoModel();
        $productosEnCarrito = $carritoModel->obtenerProductosEnCarrito($idUsuario);

        
        $ventaModel = new historialcompra(); 
        $idVenta = $ventaModel->insert(['id_usuario' => $idUsuario, 'fecha' => date('Y-m-d H:i:s')]);

        
        $detalleVentaModel = new historialcompra(); 
        foreach ($productosEnCarrito as $producto) {
            $detalleVentaModel->insert([
                'id_venta' => $idVenta,
                'id_producto' => $producto['id_talle_producto'], 
                'cantidad' => $producto['cantidad'],
                'precio' => $producto['precio'],
            ]);
        }

        
        $carritoModel->where('id_usuario', $idUsuario)->delete();

        
        return redirect()->to('pagina-de-confirmacion');
    }
}

