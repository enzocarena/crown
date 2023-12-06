<?php

namespace App\Models;
use CodeIgniter\Model;



class modelprod extends Model {
 protected $table = 'producto';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nombre','precio','tipo_id','color_id','ruta'];
  protected $validarionrules=[];

  public function produtonuevo($date)
  {
    return $this->insert($date);
  }

  public function obtenerPrecioProductoPorId($id_producto)
    {
        
        $query = $this->db->table('producto')->select('precio')->where('id_producto', $id_producto)->get();
        
        
        if ($query->getNumRows() > 0) {
            return $query->getRow()->precio;
        } else {
            
            return 0; 
        }
    }


}