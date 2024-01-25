<?php
class Flot extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_chart'] = 'active';
		$data['active_flot'] = 'active';
		$data['menu_chart'] = 'menu-open';
		$this->template->set('title', 'Flot');
		$this->template->load('template', 'contents' , 'pages/flot', $data);
	}

}