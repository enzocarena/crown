<?php
namespace App\Models;
use CodeIgniter\Model;

class DatosEnvioModel extends Model
{
    protected $table = 'datos_envio';
    protected $primaryKey = 'id_datos_envio'; 
    protected $allowedFields = ['id_usuario','provincia', 'ciudad', 'calle', 'codigo_postal', 'numero', 'piso', 'observaciones'];

    public function guardarDatosEnvio($data)
    {
        return $this->insert($data);

}
}