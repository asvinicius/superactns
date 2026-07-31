<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Home extends BaseController {
    public function index(): RedirectResponse|string {
        if ($this->isLogged()) {
            return view('welcome_message');
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
