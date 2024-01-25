<?php
class Ui_Ribbons extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_ribbons'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'Ribbons');
		$this->template->load('template', 'contents' , 'pages/ui_ribbons', $data);
	}

}