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

        $auth = [
            'withAuth' => true,
            'token' => session()->get('token')
        ];

        $api = new ApiService();

        $result = $api->request('GET', 'auth/super/islogged', [], $auth);

        if(!$result['success']) {
            session()->destroy();
            return false;
        }

        return true;

	}

    public function getInfo(int $page): array {

        // $notifications = request para endpoint que retorna as notificações
        // $count_notifications = count($notifications)

        return [
            'pageid' => $page
        ];
    }

    /*
    public function getInfo() {
        $this->load->model('SupernotifyModel');
        $this->load->model('OrdersuperModel');
		$snaux = new SupernotifyModel();
		$osaux = new OrdersuperModel();
		
		$notifications = $snaux->countlistsuper($this->session->userdata('superid'));
		$countnotify = $snaux->countlistsuper($this->session->userdata('superid'));
		$requests = $osaux->listsuper($this->session->userdata('userid'));
		$countrequests = $osaux->countlistsuper($this->session->userdata('superid'));
		
		return array(
			"pageid" => 3,
			"notifications" => $notifications,
			"countnotify" => count($countnotify),
			"requests" => $requests,
			"countrequests" => count($countrequests)
		);
    }
    */
}
