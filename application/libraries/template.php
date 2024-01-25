<?php
class Template {
    //ci instance
	private $CI;
    //template Data
	var $template_data = array();

	public function __construct() {
		$this->CI =& get_instance();
	}

	function set($content_area, $value) {
		$this->template_data[$content_area] = $value;
	}

	function load($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE) {
		$this->template_data['menu_dashboard'] = $this->MenuDashboard($view_data);
		$this->template_data['menu_charts'] = $this->MenuCharts($view_data);
		$this->template_data['menu_about'] = $this->MenuAbout($view_data);
		$this->template_data['menu_ui'] = $this->MenuUI($view_data);
		$this->template_data['menu_forms'] = $this->MenuForms($view_data);
		$this->set($name , $this->CI->load->view($view, $view_data, TRUE));
		$this->CI->load->view($template, $this->template_data);
	}

	function MenuDashboard($data) {
		$active = (@$data['active_dash']) ? $data['active_dash'] : '';
		return '<li class="nav-item">
					<a href="'.site_url('dashboard').'" class="nav-link '.$active.'">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>';
	}

	function MenuCharts($data) {
		$menuOpen = (@$data['menu_chart']) ? $data['menu_chart'] : '';
		$activeParent = (@$data['parent_chart']) ? $data['parent_chart'] : '';
		$activeChart = (@$data['active_chart']) ? $data['active_chart'] : '';
		$activeFlot = (@$data['active_flot']) ? $data['active_flot'] : '';
		$activeInline = (@$data['active_inline']) ? $data['active_inline'] : '';
		$activeUplot = (@$data['active_uplot']) ? $data['active_uplot'] : '';

		return '<li class="nav-item '.$menuOpen.'">
					<a href="#" class="nav-link '.$activeParent.'">
						<i class="nav-icon fas fa-chart-pie"></i>
						<p>
							Charts
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="'.site_url('chartjs').'" class="nav-link '.$activeChart.'">
								<i class="far fa-circle nav-icon"></i> <p>ChartJS</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('flot').'" class="nav-link '.$activeFlot.'">
								<i class="far fa-circle nav-icon"></i> <p>Flot</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('inline').'" class="nav-link '.$activeInline.'">
								<i class="far fa-circle nav-icon"></i> <p>Inline</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('uplot').'" class="nav-link '.$activeUplot.'">
								<i class="far fa-circle nav-icon"></i> <p>uPlot</p>
							</a>
						</li>
					</ul>
				</li>';
	}

	function MenuUI($data) {
		$menuOpen = (@$data['menu_ui']) ? $data['menu_ui'] : '';
		$activeParent = (@$data['parent_ui']) ? $data['parent_ui'] : '';
		$activeGeneral = (@$data['active_general']) ? $data['active_general'] : '';
		$activeIcons = (@$data['active_icons']) ? $data['active_icons'] : '';
		$activeButtons = (@$data['active_buttons']) ? $data['active_buttons'] : '';
		$activeSliders = (@$data['active_sliders']) ? $data['active_sliders'] : '';
		$activeModals = (@$data['active_modals']) ? $data['active_modals'] : '';
		$activeNavbar = (@$data['active_navbar']) ? $data['active_navbar'] : '';
		$activeTimeline = (@$data['active_timeline']) ? $data['active_timeline'] : '';
		$activeRibbons = (@$data['active_ribbons']) ? $data['active_ribbons'] : '';

		return '<li class="nav-item '.$menuOpen.'">
					<a href="#" class="nav-link '.$activeParent.'">
						<i class="nav-icon fas fa-tree"></i>
						<p>UI Elements <i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="'.site_url('ui_general').'" class="nav-link '.$activeGeneral.'">
								<i class="far fa-circle nav-icon"></i> <p>General</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('ui_icons').'" class="nav-link '.$activeIcons.'">
								<i class="far fa-circle nav-icon"></i> <p>Icons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('ui_buttons').'" class="nav-link '.$activeButtons.'">
								<i class="far fa-circle nav-icon"></i> <p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('ui_sliders').'" class="nav-link '.$activeSliders.'">
								<i class="far fa-circle nav-icon"></i> <p>Sliders</p>
							</a>
						</li>
						<li class="nav-item">
						<a href="'.site_url('ui_modals').'" class="nav-link '.$activeModals.'">
							<i class="far fa-circle nav-icon"></i> <p>Modals & Alerts</p>
						</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('ui_navbar').'" class="nav-link '.$activeNavbar.'">
								<i class="far fa-circle nav-icon"></i> <p>Navbar & Tabs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('ui_timeline').'" class="nav-link '.$activeTimeline.'">
								<i class="far fa-circle nav-icon"></i> <p>Timeline</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="'.site_url('ui_ribbons').'" class="nav-link '.$activeRibbons.'">
								<i class="far fa-circle nav-icon"></i> <p>Ribbons</p>
							</a>
						</li>
					</ul>
				</li>';
	}

	function MenuForms($data) {
		$menuOpen = (@$data['menu_forms']) ? $data['menu_forms'] : '';
		$activeParent = (@$data['parent_forms']) ? $data['parent_forms'] : '';
		$activeGeneral = (@$data['active_general']) ? $data['active_general'] : '';

		return '<li class="nav-item '.$menuOpen.'">
					<a href="#" class="nav-link '.$activeParent.'">
						<i class="nav-icon fas fa-tree"></i>
						<p>Forms <i class="fas fa-angle-left right"></i></p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="'.site_url('forms_general').'" class="nav-link '.$activeGeneral.'">
								<i class="far fa-circle nav-icon"></i> <p>General Elements</p>
							</a>
						</li>
					</ul>
				</li>';
	}

	function MenuAbout($data) {
		$activeAbout = (@$data['active_about']) ? $data['active_about'] : '';
		return '<li class="nav-item">
					<a href="'.site_url('about').'" class="nav-link '.$activeAbout.'">
						<i class="nav-icon fas fa-info"></i>
						<p>About</p>
					</a>
				</li>';
	}

}
?>