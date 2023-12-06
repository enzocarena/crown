<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Autenticacion extends BaseController
{
    public function cerrarSesion()
    {
        session()->remove('usuario');
        return redirect()->to(base_url('/'));
    }
}