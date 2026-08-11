<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use App\Libraries\ApiService;

class Backup extends BaseController {
    public function index(): RedirectResponse|string {
        if (!$this->isLogged()) {
            return redirect()->to(base_url('login'));            
        }

        $getinfo = $this->getInfo(4);
        $info = ["info" => $getinfo, "title" => "Backup"];

        $api = new ApiService();

        $auth = [
            'withAuth' => true,
            'token' => session()->get('token')
        ];

        $result = $api->request('GET', 'backup/listing', [], $auth);

        if(!$result['success']) {
            
            $alert = [
                "class" => "danger",
                "message" => $result['data']['error']
            ];

            $info = ["alert" => $alert, "info" => $getinfo, "title" => "Backup"];

            return view('super/template/header', $info).view('super/backup').view('super/template/footer');
        }

        $backup = $result['data'];

        $content = ["backup" => $backup];

        return view('super/template/header', $info).view('super/backup', $content).view('super/template/footer');
    }
}
