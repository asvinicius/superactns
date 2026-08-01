<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Libraries\ApiService;

abstract class BaseController extends Controller {

    /**
     * @return void
     */
    
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {

        parent::initController($request, $response, $logger);

    }

    public function isLogged(): bool {

        if(session()->get('super') !== true) {
            return false;
        }

        $api = new ApiService();

        $result = $api->request('GET', 'auth/super/islogged', [], withAuth: true);

        if(!$result['success']) {
            session()->destroy();
            return false;
        }

        return true;

	}
}
