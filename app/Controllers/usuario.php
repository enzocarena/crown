<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\modelologin;

class Usuario extends BaseController
{

public function insertar()
    {
        $usuarioModel = new modelologin();
        

        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $contrasena = $this->request->getPost('contrasena');
        $correo = $this->request->getPost('correo');
        //$direccion = $this->request->getPost('direccion');
        $telefono = $this->request->getPost('telefono');
        
        $hash = password_hash($contrasena, PASSWORD_BCRYPT);    

        $data = array(
            'id_usuario'=>$this->request->getPost('id_usuario'),
            'nombre' => $nombre,
            'apellido' => $apellido,
            'contrasena' => $hash,
            'correo' => $correo,
            //'direccion' => $direccion,
            'telefono' => $telefono,
        );
        $usuarioModel->login($data);
        return redirect()->to(base_url('principal.php'));
    }
}

?>