<?php
namespace App\models;
use CodeIgniter\Model;

class Producto extends Model{
  protected $table = 'producto';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;
  protected $returnType = 'array';

  protected $allowedFields = [
    'id_producto',
    'nombre',
    'precio',
    'tipo_id',
    'color_id',
    'id_imagen'
  ];

  public function select() {
    return $this->db->query("SELECT * FROM producto")->getResultArray();
  }

  public function getAllInfo() {
    return $this->db->query('
    SELECT
    p.id_producto,
    p.nombre,
    ti.tipo,
    c.color,
    p.precio,
    ruta
    FROM
        producto p

    INNER JOIN tipo ti ON
        ti.id = p.tipo_id
    INNER JOIN color c ON
        c.id = p.color_id
    ')->getResultArray();
  }

public function getProductInfo($id)
  {
    return $this->db->query('
    SELECT
    p.id_producto,
    p.nombre,
    ti.tipo,
    c.color,
    p.precio,
    ruta
    FROM
        producto p

    INNER JOIN tipo ti ON
        ti.id = p.tipo_id
    INNER JOIN color c ON
        c.id = p.color_id
    WHERE p.id_producto='.$id
    )->getResultArray();
  }

public function obtenerNombreProductoPorId($producto)
{
    return $this->db->query('
    SELECT 
    nombre,
    precio
    FROM 
    producto
    WHERE id_producto = '.$producto 
    )->getResultArray();
}

}
?>