<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Producto extends Controller
{
    protected $productModel;

    public function listarProductos()
    {
        $productos = $this->productModel->findAll();
    }
}