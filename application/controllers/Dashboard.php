<?php
class Dashboard extends CI_Controller {
	
	public function index() {
		$data = array();
		$data['active_dash'] = 'active';
		$this->template->set('title', 'Dashboard');
		$this->template->load('template', 'contents' , 'pages/dashboard', $data);
	}

}