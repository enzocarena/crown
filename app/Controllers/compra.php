<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarritoModel;
use App\Models\ProductoModel;
use App\Models\ProvinciasModel;
use App\Models\DatosEnvioModel;
use App\Models\HistorialCompraModel;
use App\Models\VentaModel;
use App\Models\historialcompra;
use App\Models\direccionmodel;


class Compra extends Controller
{
    public function finalizarCompra()
    {

        $usuario = session()->get('usuario');

        if ($usuario === null) {
            return redirect()->to(base_url('iniciarsesion'));
        }

        $carritoModel     = new \App\Models\carritomodel();
        $productosCarrito = $carritoModel->where('id_usuario', $usuario['id_usuario'])->findAll();
        $productomodel    = new \App\Models\producto();

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


        $provinciasModel = new \App\Models\ProvinciasModel();
        $provincias =  $provinciasModel->obtenerProvincias();

        $data = [
            'productosCarrito' => $productosCarrito,
            'provincias'       => $provincias
        ];

        return view('vista_compra', $data);
    }

    public function pagopaypal($provincia, $ciudad, $calle, $codigo_postal, $numero, $piso, $observaciones)
    {
        $usuario = session()->get('usuario');
    

        $datosEnvioModel   = new \App\Models\DatosEnvioModel();
        $ventaModel        = new \App\Models\ventamodel();     
        $detalleVentaModel = new \App\Models\historialcompra(); 

        
        
        $data = [
            'id_usuario'      => $usuario['id_usuario'],
            'provincia'       => $provincia,
            'ciudad'          => $ciudad,
            'calle'           => $calle,
            'codigo_postal'   => $codigo_postal,
            'numero'          => $numero,
            'piso'            => $piso,
            'observaciones'   => $observaciones
        ];
    
        // Guardar los datos de envío en la base de datos
        $idDatosEnvio = $datosEnvioModel->guardarDatosEnvio($data);

        
    
        
        $idVenta = $ventaModel->insert([
            'id_usuario' => $usuario['id_usuario'],
            'fecha' => date('Y-m-d H:i:s'),
            'id_datos_envio' => $idDatosEnvio 
        ]);

        $ciudadModel    = new \App\Models\ciudadmodel(); 
        $calleModel     = new \App\Models\callemodel();  
        $provinciaModel = new \App\Models\provinciamodel();
        $direccionModel = new \App\Models\direccionmodel();

        $idProvincia = $provinciaModel->insertarProvincia(['nombre' => $data['provincia']]);
        $data['id_provincia'] = $idProvincia;

        $idCiudad = $ciudadModel->obtenerIdCiudadPorNombre($ciudad);
        if (!$idCiudad) {
            $idCiudad = $ciudadModel->insertarCiudad(['id_provincia' => $idProvincia, 'nombre' => $ciudad]);
            }

        $idCalle = $calleModel->obtenerIdCallePorNombre($calle);
        if (!$idCalle) {
            $idCalle = $calleModel->insertarCalle(['nombre' => $calle]);
        }
    
        
        $dataDireccion = [
            'id_calle'     => $calleModel->obtenerIdCallePorNombre($calle),
            'id_ciudad'    => $ciudadModel->obtenerIdCiudadPorNombre($ciudad),
            'id_venta'     => $idVenta,
            'num_calle'    => $numero,
            'direccion'    => $calle,
        ];
    
        
        $idDireccion = $direccionModel->insertarDireccion($dataDireccion);

        $carritoModel = new \App\Models\CarritoModel();
        $modelprod = new \App\Models\modelprod();
        $productosCarrito = $carritoModel->where('id_usuario', $usuario['id_usuario'])->findAll();

        foreach ($productosCarrito as $producto) {
            
            $detalleVentaModel->insert([
                'id_venta'      => $idVenta,
                'id_producto'   => $producto['id_talle_producto'],
                'cantidad'      => $producto['cantidad'],
                'precio'        => isset($producto['precio']) ? $producto['precio'] : $modelprod->obtenerPrecioProductoPorId($producto['id_talle_producto'])]);
        }

        
        $carritoModel->where('id_usuario', $usuario['id_usuario'])->delete();

        return redirect()->to('');
    }
}