<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller {

    /**
     * @return void
     */
    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {

        parent::initController($request, $response, $logger);

    }

    public function isLogged(): bool {
        if(session()->get('logged') === true && session()->get('super') === true) {
            return true;
        } else {
            session_destroy();
            return false;
        }
	}
}
