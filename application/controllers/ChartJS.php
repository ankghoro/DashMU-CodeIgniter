<?php
class ChartJS extends CI_Controller {

	public function index() {
		$data = array();
		$data['parent_chart'] = 'active';
		$data['active_chart'] = 'active';
		$data['menu_chart'] = 'menu-open';
		$this->template->set('title', 'ChartJS');
		$this->template->load('template', 'contents' , 'pages/chartjs', $data);
	}

}