<?php

namespace App\models;
use CodeIgniter\Model;



class modelologin extends Model{
  protected $table = 'usuario';
  protected $primaryKey = 'id_usuario';
  protected $allowedFields = ['nombre','apellido','correo','contrasena','telefono','jerarquia'];
  protected $validarionrules=[];

  public function login($data){
    return $this->insert($data);
  }

}