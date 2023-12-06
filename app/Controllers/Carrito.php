<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Model\carritomodel;
use App\Model\producto;

class Carrito extends Controller
{
    public function vista_carrito()
    {
        $usuario = session()->get('usuario');
        
        if ($usuario === null) {
            return redirect()->to(base_url('iniciarsesion'));
        }
    
        $carritoModel = new \App\Models\carritomodel();
        $productosCarrito = $carritoModel->where('id_usuario', $usuario['id_usuario'])->findAll();
        $productomodel = new \App\Models\producto();
    
        $producto_detalle = [];
        foreach ($productosCarrito as &$producto) {
            $producto_detalle = $productomodel->obtenerNombreProductoPorId($producto['id_talle_producto']);
            if (!empty($producto_detalle)) {
                $producto['nombre'] = $producto_detalle[0]['nombre'];
                $producto['precio'] = $producto_detalle[0]['precio'];
            } else {
                $producto['nombre'] = "Producto no encontrado";
            }
        
        }
    
        $data = [
            'productosCarrito' => $productosCarrito,
            'productodetalle' => $producto_detalle,
        ];  
    
        return view('vista_carrito', $data);
    }
    

    public function agregarAlCarrito()
    {
        $producto_id = $this->request->getPost('producto_id');
        $cantidad = $this->request->getPost('cantidad');
        $precio = $this->request->getPost('precio');
        $total= $cantidad * $precio;
        
        $carritoModel = new \App\Models\carritomodel();
        $usuario = session()->get('usuario');
        $id_u = $usuario['id_usuario']; 
        $carritoModel->insert([
            'id_talle_producto' => $producto_id,
            'cantidad' => $cantidad,
            'id_usuario' => $id_u,
        ]); 

        return redirect()->route('vista_carrito');
    }

    public function actualizar()
    {
        $id_talle_productos = $this->request->getPost('id_talle_producto');
        $nuevas_cantidades = $this->request->getPost('nueva_cantidad');
    
       
        $carritoModel = new \App\Models\carritomodel();
        foreach ($id_talle_productos as $key => $id_talle_producto) {
            $nueva_cantidad = $nuevas_cantidades[$key];
            $carritoModel->actualizarCantidad($id_talle_producto, $nueva_cantidad);
        }
    
        return redirect()->to(base_url('carrito'));
    }

    public function eliminar($id_talle_producto)
    {

            $carritoModel = new \App\Models\carritomodel();
            $carritoModel->eliminarProducto($id_talle_producto);

            return redirect()->to(base_url('carrito'));
    }

}
