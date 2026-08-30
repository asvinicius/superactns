<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use App\Libraries\ApiService;

class Adm extends BaseController {
    public function index(): RedirectResponse|string {
        if (!$this->isLogged()) {
            return redirect()->to(base_url('login'));            
        } 

        $getinfo = $this->getInfo(2);
        $info = ["info" => $getinfo, "title" => "Administradores"];

        $api = new ApiService();

        $auth = [
            'withAuth' => true,
            'token' => session()->get('token')
        ];

        $admsresult = $api->request('GET', 'adm/listing', [], $auth);

        if(!$admsresult['success']) {
            
            $alert = [
                "class" => "danger",
                "message" => $admsresult['data']['error']
            ];

            $info = ["alert" => $alert, "info" => $getinfo, "title" => "Backup"];

            return view('super/template/header', $info).view('super/bank').view('super/template/footer');
        }

        $adms = $admsresult['data'];

        $bankresult = $api->request('GET', 'bank/listing', [], $auth);

        if(!$bankresult['success']) {
            
            $alert = [
                "class" => "danger",
                "message" => $bankresult['data']['error']
            ];

            $info = ["alert" => $alert, "info" => $getinfo, "title" => "Backup"];

            return view('super/template/header', $info).view('super/bank').view('super/template/footer');
        }

        $bank = $bankresult['data'];

        $content = ["adms" => $adms, "bank" => $bank];

        return view('super/template/header', $info).view('super/adm', $content).view('super/template/footer');
        
    }

    public function create(): RedirectResponse {
        if (!$this->isLogged()) {
            return redirect()->to(base_url('login'));            
        }

        $rules = [
            'adm_name'  => 'required|min_length[3]|max_length[255]',
            'adm_login' => 'required|min_length[3]|max_length[100]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('adm'))->with('alert', [
                'class'   => 'danger',
                'message' => $result['data']['error'] ?? 'Erro ao cadastrar administrador',
            ]);
        }

        $api = new ApiService();

        $adm_name = $this->request->getPost('adm_name');
        $adm_login = $this->request->getPost('adm_login');

        $auth = [
            'withAuth' => true,
            'token' => session()->get('token')
        ];

        $result = $api->request('POST', 'adm/create', [
            'adm_name' => $adm_name,
            'adm_login' => $adm_login,
        ], $auth);

        if (!$result['success']) {
            return redirect()->to(base_url('adm'))->with('alert', [
                'class'   => 'danger',
                'message' => $result['data']['error'] ?? 'Erro ao cadastrar administrador',
            ]);
        }

        return redirect()->to(base_url('adm'))->with('alert', [
            'class'   => 'success',
            'message' => 'Administrador cadastrado com sucesso!',
        ]);
        
    }
}
