<?php

namespace App\Models;
use CodeIgniter\Model;

class color extends Model{
  protected $table = 'color';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;
  protected $returnType = 'array';

  protected $allowedFields = [
    'id',
    'color',
  ];


  public function getAllInfo() {
    return $this->db->query('
    SELECT *
    FROM color
    ')->getResultArray();
  }

}
?>