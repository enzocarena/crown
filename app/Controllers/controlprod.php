<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\modelprod;

class controlprod extends BaseController
{
    public function insertarproductos()
    {
        $productoModel = new modelprod();
    
        $nombre = $this->request->getPost('nombre');
        $precio = $this->request->getPost('precio');
        $tipo = $this->request->getPost('tipo');
        $color = $this->request->getPost('color');
        $imagen = $this->request->getFile('imagen');
    
        if ($imagen->isValid() && !$imagen->hasMoved()) {
            $nombreOriginal = $imagen->getName();
            $imagen->move('./imagenes', $nombreOriginal);
    
            $date = [
                'nombre' => $nombre,
                'precio' => $precio,
                'tipo_id' => $tipo,
                'color_id' => $color,
                'ruta' => 'imagenes/' . $nombreOriginal
            ];
    
            $productoModel->produtonuevo($date);
    
            return redirect()->to(base_url('/'));
        } else {
            echo $imagen->getErrorString() . ' ' . $imagen->getError();
        }
    }

}
