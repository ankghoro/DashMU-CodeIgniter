<?php
class Ui_Navbar extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_navbar'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'Navbar & Tabs');
		$this->template->load('template', 'contents' , 'pages/ui_navbar', $data);
	}

}