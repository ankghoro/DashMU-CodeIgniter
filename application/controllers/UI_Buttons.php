<?php
class Ui_Buttons extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_buttons'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'Buttons');
		$this->template->load('template', 'contents' , 'pages/ui_buttons', $data);
	}

}