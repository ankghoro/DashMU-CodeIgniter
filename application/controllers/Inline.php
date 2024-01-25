<?php
class Inline extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_chart'] = 'active';
		$data['active_inline'] = 'active';
		$data['menu_chart'] = 'menu-open';
		$this->template->set('title', 'Inline');
		$this->template->load('template', 'contents' , 'pages/inline', $data);
	}

}