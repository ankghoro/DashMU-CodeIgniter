<?php
class About extends CI_Controller {

	public function index() {
		$data = array();
		$data['active_about'] = 'active';
		$this->template->set('title', 'About');
		$this->template->load('template', 'contents' , 'pages/about', $data);
	}

}