<?php
class Uplot extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_chart'] = 'active';
		$data['active_uplot'] = 'active';
		$data['menu_chart'] = 'menu-open';
		$this->template->set('title', 'Uplot');
		$this->template->load('template', 'contents' , 'pages/uplot', $data);
	}

}