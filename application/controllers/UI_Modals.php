<?php
class Ui_Modals extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_modals'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'Modals');
		$this->template->load('template', 'contents' , 'pages/ui_modals', $data);
	}

}