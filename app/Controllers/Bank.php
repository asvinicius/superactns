<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use App\Libraries\ApiService;

class Bank extends BaseController {
    public function index(): RedirectResponse|string {

        if (!$this->isLogged()) {
            return redirect()->to(base_url('login'));            
        }

        $getinfo = $this->getInfo(2);
        $info = ["info" => $getinfo, "title" => "Backup"];

        $api = new ApiService();

        $auth = [
            'withAuth' => true,
            'token' => session()->get('token')
        ];

        $result = $api->request('GET', 'bank/listing', [], $auth);

        if(!$result['success']) {
            
            $alert = [
                "class" => "danger",
                "message" => $result['data']['error']
            ];

            $info = ["alert" => $alert, "info" => $getinfo, "title" => "Backup"];

            return view('super/template/header', $info).view('super/bank').view('super/template/footer');
        }

        $bank = $result['data'];

        $content = ["bank" => $bank];

        return view('super/template/header', $info).view('super/bank', $content).view('super/template/footer');
    }

    public function create(): RedirectResponse {
        if (!$this->isLogged()) {
            return redirect()->to(base_url('login'));            
        }

        $api = new ApiService();

        $bank_name = $this->request->getPost('bank_name');
        $bank_logo = $this->request->getFile('bank_logo');

        $auth = [
            'withAuth' => true,
            'isJson' => false,
            'token' => session()->get('token')
        ];

        $result = $api->postMultipart('POST', 'bank/create', [
            'bank_name' => $bank_name,
        ], $auth, [
            'bank_logo' => $bank_logo,
        ]);
        
        if (!$result['success']) {
            return redirect()->to(base_url('bank'))->with('alert', [
                'class'   => 'danger',
                'message' => $result['data']['error'] ?? 'Erro ao cadastrar banco',
            ]);
        }

        return redirect()->to(base_url('bank'));
    }
}
