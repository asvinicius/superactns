<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Adm extends BaseController {
    public function index(): RedirectResponse|string {
        if ($this->isLogged()) {

            $getinfo = $this->getInfo(2);
			$info = ["info" => $getinfo, "title" => "Início"];

            return view('super/template/header', $info).view('super/adm').view('super/template/footer');
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
