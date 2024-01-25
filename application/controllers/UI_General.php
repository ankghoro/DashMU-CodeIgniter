<?php
class Ui_General extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_general'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'General');
		$this->template->load('template', 'contents' , 'pages/ui_general', $data);
	}

}