<?php namespace Modules\Empresas\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model {
    protected $table = 'empresas';
    protected $allowedFields = ['nombre', 'logo', 'config_qr'];
    
    // Generar QR automático al crear
    protected $beforeInsert = ['generarQR'];
    
    protected function generarQR(array $data) {
        $data['data']['config_qr'] = 'qr_'.bin2hex(random_bytes(8));
        return $data;
    }
}