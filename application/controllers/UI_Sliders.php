<?php
class UI_Sliders extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_ui'] = 'active';
		$data['active_sliders'] = 'active';
		$data['menu_ui'] = 'menu-open';
		$this->template->set('title', 'Buttons');
		$this->template->load('template', 'contents' , 'pages/ui_sliders', $data);
	}

}