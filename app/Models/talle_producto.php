<?php

namespace App\models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class TalleProducto extends Model {
  protected $table = 'talle_producto';
  protected $primaryKey = 'id_talle_producto';


  protected $allowedFields = [
    'id_talle_producto',
    'id_talle',
    'id_producto'
  ];
}


?>