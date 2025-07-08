<?php namespace Modules\API\Controllers;

use CodeIgniter\API\ResponseTrait;
use Modules\Empresas\Models\EmpresaModel;

class EmpresasApi extends BaseController {
    use ResponseTrait;
    
    public function getEmpresa($qr) {
        $model = new EmpresaModel();
        $empresa = $model->where('config_qr', $qr)->first();
        
        return $this->respond([
            'success' => true,
            'data' => $empresa
        ]);
    }
}