<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use App\Libraries\ApiService;

class Login extends BaseController {
    public function index(): RedirectResponse|string {
        if ($this->isLogged()) {
            return redirect()->to(base_url('home'));
        } else {
            return view('public/login');
        }
    }

    public function signin(): RedirectResponse|string {
        if ($this->isLogged()) {
            return redirect()->to(base_url('home'));
        } 

        $api = new ApiService();

        $super_login = $this->request->getPost("super_login");
        $super_password = $this->request->getPost("super_password");
        $auth = ['withAuth' => false];

        $result = $api->request('POST', 'auth/super/login', [
            'super_login'    => $super_login,
            'super_password' => $super_password,
        ], $auth);            

        if(!$result['success']) {
            
            $alert = array(
                "class" => "danger",
                "message" => $result['data']['error']
            );

            $info = array("alert" => $alert);

            return view('public/login', $info);
        }

        $super = $result['data'];

        $session = [
            'super' => TRUE,
            'super_id' => $super["super_id"],
            'super_name' => $super["super_name"],
            'token'     => $super['token']
        ];

        session()->set($session);

        return redirect()->to(base_url('login'));
    }

    public function signout(): RedirectResponse {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
