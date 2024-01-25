<?php
class Forms_General extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_forms'] = 'active';
		$data['active_general'] = 'active';
		$data['menu_forms'] = 'menu-open';
		$this->template->set('title', 'Forms General Elements');
		$this->template->load('template', 'contents' , 'pages/forms_general', $data);
	}

}