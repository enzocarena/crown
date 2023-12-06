<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\modelologin;

class Principio extends BaseController
{

  public function principio(){
    $usuario = new modelologin();
    $correo = $this->request->getPost("correo");
    $contrasena = $this->request->getPost("contrasena");
    $usuario2 = $usuario->where('correo', $correo,'contrasena',$contrasena)->first();
    if (password_verify($contrasena, $usuario2["contrasena"])){
        session()->set('usuario', $usuario2);
        return redirect()->to(base_url('/')); 
    } else {
        session()->setFlashdata('error', 'E-mail o Contraseña Incorrecta');
        return redirect()->to(base_url("/iniciarsesion"));  
    }
}

}
?>