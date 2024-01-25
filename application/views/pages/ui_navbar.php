<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary card-outline">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fas fa-edit"></i>
						Navbar Examples
					</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-12 col-lg-6">
							<h4>Default Navbar <small>(navbar-light)</small></h4>
							<nav class="navbar navbar-expand navbar-light">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Home</a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Contact</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-auto">								
									<li class="nav-item">
										<a class="nav-link" data-widget="navbar-search" data-target="#navbar-search1" href="#" role="button">
											<i class="fas fa-search"></i>
										</a>
										<div class="navbar-search-block" id="navbar-search1">
											<form class="form-inline">
												<div class="input-group input-group-sm">
													<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
													<div class="input-group-append">
														<button class="btn btn-navbar" type="submit">
															<i class="fas fa-search"></i>
														</button>
														<button class="btn btn-navbar" type="button" data-widget="navbar-search">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-comments"></i>
											<span class="badge badge-danger navbar-badge">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-932719739213.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Angel Tenan
															<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">Call me whenever you can</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-139271872184.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															John Pierce
															<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">I got your message bro</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-89382918392.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Nora Sexy
															<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">The subject goes here</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-bell"></i>
											<span class="badge badge-warning navbar-badge">15</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<span class="dropdown-item dropdown-header">15 Notifications</span>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-envelope mr-2"></i> 4 new messages
												<span class="float-right text-muted text-sm">3 mins</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-users mr-2"></i> 8 friend requests
												<span class="float-right text-muted text-sm">12 hours</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-file mr-2"></i> 3 new reports
												<span class="float-right text-muted text-sm">2 days</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="fullscreen" href="#" role="button">
											<i class="fas fa-expand-arrows-alt"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
											<i class="fas fa-th-large"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-12 col-lg-6">
							<h4>Default Navbar <small>(navbar-white navbar-light)</small></h4>
							<nav class="navbar navbar-expand navbar-white navbar-light">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Home</a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Contact</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" data-widget="navbar-search" data-target="#navbar-search2" href="#" role="button">
											<i class="fas fa-search"></i>
										</a>
										<div class="navbar-search-block" id="navbar-search2">
											<form class="form-inline">
												<div class="input-group input-group-sm">
													<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
													<div class="input-group-append">
														<button class="btn btn-navbar" type="submit">
															<i class="fas fa-search"></i>
														</button>
														<button class="btn btn-navbar" type="button" data-widget="navbar-search">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-comments"></i>
											<span class="badge badge-danger navbar-badge">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-932719739213.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Angel Tenan
															<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">Call me whenever you can

														</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-139271872184.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															John Pierce
															<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">I got your message bro</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-89382918392.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Nora Sexy
															<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">The subject goes here</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-bell"></i>
											<span class="badge badge-warning navbar-badge">15</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<span class="dropdown-item dropdown-header">15 Notifications</span>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-envelope mr-2"></i> 4 new messages
												<span class="float-right text-muted text-sm">3 mins</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-users mr-2"></i> 8 friend requests
												<span class="float-right text-muted text-sm">12 hours</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-file mr-2"></i> 3 new reports
												<span class="float-right text-muted text-sm">2 days</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="fullscreen" href="#" role="button">
											<i class="fas fa-expand-arrows-alt"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
											<i class="fas fa-th-large"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<h4 class="mt-4">Primary Navbar <small><b>recommended</b> (navbar-primary navbar-dark)</small></h4>
							<nav class="navbar navbar-expand navbar-primary navbar-dark">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Home</a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Contact</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" data-widget="navbar-search" data-target="#navbar-search3" href="#" role="button">
											<i class="fas fa-search"></i>
										</a>
										<div class="navbar-search-block" id="navbar-search3">
											<form class="form-inline">
												<div class="input-group input-group-sm">
													<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
													<div class="input-group-append">
														<button class="btn btn-navbar" type="submit">
															<i class="fas fa-search"></i>
														</button>
														<button class="btn btn-navbar" type="button" data-widget="navbar-search">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-comments"></i>
											<span class="badge badge-danger navbar-badge">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-932719739213.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Angel Tenan
															<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">Call me whenever you can

														</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-139271872184.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															John Pierce
															<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">I got your message bro</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-89382918392.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Nora Sexy
															<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">The subject goes here</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-bell"></i>
											<span class="badge badge-warning navbar-badge">15</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<span class="dropdown-item dropdown-header">15 Notifications</span>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-envelope mr-2"></i> 4 new messages
												<span class="float-right text-muted text-sm">3 mins</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-users mr-2"></i> 8 friend requests
												<span class="float-right text-muted text-sm">12 hours</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-file mr-2"></i> 3 new reports
												<span class="float-right text-muted text-sm">2 days</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="fullscreen" href="#" role="button">
											<i class="fas fa-expand-arrows-alt"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
											<i class="fas fa-th-large"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-12 col-lg-6">
							<h4 class="mt-4">Primary Navbar <small>(navbar-primary navbar-light)</small></h4>
							<nav class="navbar navbar-expand navbar-primary navbar-light">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Home</a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Contact</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" data-widget="navbar-search" data-target="#navbar-search4" href="#" role="button">
											<i class="fas fa-search"></i>
										</a>
										<div class="navbar-search-block" id="navbar-search4">
											<form class="form-inline">
												<div class="input-group input-group-sm">
													<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
													<div class="input-group-append">
														<button class="btn btn-navbar" type="submit">
															<i class="fas fa-search"></i>
														</button>
														<button class="btn btn-navbar" type="button" data-widget="navbar-search">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-comments"></i>
											<span class="badge badge-danger navbar-badge">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-932719739213.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Angel Tenan
															<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">Call me whenever you can

														</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-139271872184.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															John Pierce
															<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">I got your message bro</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-89382918392.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Nora Sexy
															<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">The subject goes here</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-bell"></i>
											<span class="badge badge-warning navbar-badge">15</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<span class="dropdown-item dropdown-header">15 Notifications</span>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-envelope mr-2"></i> 4 new messages
												<span class="float-right text-muted text-sm">3 mins</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-users mr-2"></i> 8 friend requests
												<span class="float-right text-muted text-sm">12 hours</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-file mr-2"></i> 3 new reports
												<span class="float-right text-muted text-sm">2 days</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="fullscreen" href="#" role="button">
											<i class="fas fa-expand-arrows-alt"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
											<i class="fas fa-th-large"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<h4 class="mt-4">Orange Navbar <small><b>recommended</b> (navbar-orange navbar-light)</small></h4>
							<nav class="navbar navbar-expand navbar-orange navbar-light">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Home</a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Contact</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" data-widget="navbar-search" data-target="#navbar-search5" href="#" role="button">
											<i class="fas fa-search"></i>
										</a>
										<div class="navbar-search-block" id="navbar-search5">
											<form class="form-inline">
												<div class="input-group input-group-sm">
													<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
													<div class="input-group-append">
														<button class="btn btn-navbar" type="submit">
															<i class="fas fa-search"></i>
														</button>
														<button class="btn btn-navbar" type="button" data-widget="navbar-search">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-comments"></i>
											<span class="badge badge-danger navbar-badge">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-932719739213.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Angel Tenan
															<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">Call me whenever you can

														</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-139271872184.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															John Pierce
															<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">I got your message bro</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-89382918392.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Nora Sexy
															<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">The subject goes here</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-bell"></i>
											<span class="badge badge-warning navbar-badge">15</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<span class="dropdown-item dropdown-header">15 Notifications</span>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-envelope mr-2"></i> 4 new messages
												<span class="float-right text-muted text-sm">3 mins</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-users mr-2"></i> 8 friend requests
												<span class="float-right text-muted text-sm">12 hours</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-file mr-2"></i> 3 new reports
												<span class="float-right text-muted text-sm">2 days</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="fullscreen" href="#" role="button">
											<i class="fas fa-expand-arrows-alt"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
											<i class="fas fa-th-large"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-12 col-lg-6">
							<h4 class="mt-4">Orange Navbar <small>(navbar-orange navbar-dark)</small></h4>
							<nav class="navbar navbar-expand navbar-orange navbar-dark">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Home</a>
									</li>
									<li class="nav-item d-none d-sm-inline-block">
										<a href="#" class="nav-link">Contact</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" data-widget="navbar-search" data-target="#navbar-search6" href="#" role="button">
											<i class="fas fa-search"></i>
										</a>
										<div class="navbar-search-block" id="navbar-search6">
											<form class="form-inline">
												<div class="input-group input-group-sm">
													<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
													<div class="input-group-append">
														<button class="btn btn-navbar" type="submit">
															<i class="fas fa-search"></i>
														</button>
														<button class="btn btn-navbar" type="button" data-widget="navbar-search">
															<i class="fas fa-times"></i>
														</button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-comments"></i>
											<span class="badge badge-danger navbar-badge">3</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-932719739213.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Angel Tenan
															<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">Call me whenever you can

														</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-139271872184.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															John Pierce
															<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">I got your message bro</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<div class="media">
													<img src="<?php echo base_url(); ?>assets/images/user-89382918392.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
													<div class="media-body">
														<h3 class="dropdown-item-title">
															Nora Sexy
															<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
														</h3>
														<p class="text-sm">The subject goes here</p>
														<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
													</div>
												</div>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link" data-toggle="dropdown" href="#">
											<i class="far fa-bell"></i>
											<span class="badge badge-warning navbar-badge">15</span>
										</a>
										<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
											<span class="dropdown-item dropdown-header">15 Notifications</span>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-envelope mr-2"></i> 4 new messages
												<span class="float-right text-muted text-sm">3 mins</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-users mr-2"></i> 8 friend requests
												<span class="float-right text-muted text-sm">12 hours</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">
												<i class="fas fa-file mr-2"></i> 3 new reports
												<span class="float-right text-muted text-sm">2 days</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="fullscreen" href="#" role="button">
											<i class="fas fa-expand-arrows-alt"></i>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
											<i class="fas fa-th-large"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<h4>Nav Tabs inside Card Header <small>card-tabs / card-outline-tabs</small></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-6">
			<div class="card card-primary card-tabs">
				<div class="card-header p-0 pt-1">
					<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-one-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
						</div>
						<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
							Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
						</div>
						<div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
							Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
						</div>
						<div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
							Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6">
			<div class="card card-primary card-tabs">
				<div class="card-header p-0 pt-1">
					<ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
						<li class="pt-2 px-3"><h3 class="card-title">Card Title</h3></li>
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill" href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages" aria-selected="false">Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-two-settings-tab" data-toggle="pill" href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings" aria-selected="false">Settings</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-two-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
						</div>
						<div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
							Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
						</div>
						<div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel" aria-labelledby="custom-tabs-two-messages-tab">
							Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
						</div>
						<div class="tab-pane fade" id="custom-tabs-two-settings" role="tabpanel" aria-labelledby="custom-tabs-two-settings-tab">
							Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-6">
			<div class="card card-primary card-outline card-tabs">
				<div class="card-header p-0 pt-1 border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-three-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
							Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
							Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
						</div>
						<div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
							Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6">
			<div class="card card-primary card-outline card-outline-tabs">
				<div class="card-header p-0 border-bottom-0">
					<ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Messages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Settings</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-four-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
						</div>
						<div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
							Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
						</div>
						<div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
							Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
						</div>
						<div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
							Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h4>Nav Tabs Overlay for loading</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card card-primary card-tabs">
				<div class="card-header p-0 pt-1">
					<ul class="nav nav-tabs" id="custom-tabs-five-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="custom-tabs-five-overlay-tab" data-toggle="pill" href="#custom-tabs-five-overlay" role="tab" aria-controls="custom-tabs-five-overlay" aria-selected="true">Overlay</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-five-overlay-dark-tab" data-toggle="pill" href="#custom-tabs-five-overlay-dark" role="tab" aria-controls="custom-tabs-five-overlay-dark" aria-selected="false">Overlay Dark</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="custom-tabs-five-normal-tab" data-toggle="pill" href="#custom-tabs-five-normal" role="tab" aria-controls="custom-tabs-five-normal" aria-selected="false">Normal Tab</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="custom-tabs-five-tabContent">
						<div class="tab-pane fade show active" id="custom-tabs-five-overlay" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-tab">
							<div class="overlay-wrapper">
								<div class="overlay"><i class="fas fa-3x fa-sync-alt fa-spin"></i><div class="text-bold pt-2">Loading...</div></div>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
							</div>
						</div>
						<div class="tab-pane fade" id="custom-tabs-five-overlay-dark" role="tabpanel" aria-labelledby="custom-tabs-five-overlay-dark-tab">
							<div class="overlay-wrapper">
								<div class="overlay dark"><i class="fas fa-3x fa-sync-alt fa-spin"></i><div class="text-bold pt-2">Loading...</div></div>
								Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
							</div>
						</div>
						<div class="tab-pane fade" id="custom-tabs-five-normal" role="tabpanel" aria-labelledby="custom-tabs-five-normal-tab">
							Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>