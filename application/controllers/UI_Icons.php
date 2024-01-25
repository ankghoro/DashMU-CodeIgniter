<?php
class Ui_Icons extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_icons'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'Icons');
		$this->template->load('template', 'contents' , 'pages/ui_icons', $data);
	}

}