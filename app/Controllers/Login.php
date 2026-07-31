<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

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
        } else {

            $super_login = $this->request->getPost("super_login");
            $super_password = $this->request->getPost("super_password");

            echo $super_login." - ".$super_password;
            return false;

            /*
            $this->load->model("LoginModel");

            $supernick = $this->input->post("supernick");
            $superpassword = md5($this->input->post("superpassword"));

            $super = $this->LoginModel->search($supernick, $superpassword);

            if ($super) {
                if ($super['superstatus'] == '1') {
                    $session = [
                        'super_id' => $super["superid"],
                        'super_name' => $super["supername"],
                        'super' => TRUE,
                        'logged' => TRUE
                    ];

                    session()->set($session);

                    return redirect()->to(base_url('login'));
                } else {
                    $alert = array(
                        "class" => "warning",
                        "message" => "Seu acesso esta bloqueado!<br />Entre em contato com um administrador."
                    );

                    $info = array("alert" => $alert);

                    return view('public/login', $info);
                }
            } else {
                $alert = array(
                    "class" => "danger",
                    "message" => "Usuário ou senha incorretos"
                );

                $info = array("alert" => $alert);

                return view('public/login', $info);
            }
            */
        }
    }
}
