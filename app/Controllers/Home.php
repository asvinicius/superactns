<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController {
    public function index(): RedirectResponse|string {
        if ($this->isLogged()) {

            $getinfo = $this->getInfo(1);
			$info = ["info" => $getinfo, "title" => "Início"];

            return view('super/template/header', $info).view('super/home').view('super/template/footer');
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
