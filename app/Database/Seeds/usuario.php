<?php namespace App\Database\seends;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder 
{
  public function run() {
    $usuario = "admin";
    $Contrasena = password_hash("123",PASSWORD_DEFAULT);
    $type = "admin";

    $data = [
      "usuario" => $usuario,
      "Contrasena" => $Contrasena,
      "type" => $type
    ];

    $this->db->table("t_usuario")->insert($data);
  }
}