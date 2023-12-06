<?php

namespace App\Models; 
use CodeIgniter\Model;

class Tipo extends Model{
  protected $table = 'tipo';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;
  protected $returnType = 'array';

  protected $allowedFields = [
    'id',
    'tipo',
  ];


  public function getAllInfo() {
    return $this->db->query('
    SELECT *
    FROM tipo
    ')->getResultArray();
  }

}
?>