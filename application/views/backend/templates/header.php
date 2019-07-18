<!DOCTYPE html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Victory Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/node_modules/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/node_modules/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/node_modules/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/node_modules/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/backend/css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
	<!-- partial:partials/_navbar.html -->
	<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
		<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
			<a class="navbar-brand brand-logo" href="index-2.html"><img src="<?=base_url()?>assets/backend/images/logo.svg" alt="logo"/></a>
			<a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?=base_url()?>assets/backend/images/logo-mini.svg" alt="logo"/></a>
		</div>
		<div class="navbar-menu-wrapper d-flex align-items-center">
			<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
				<span class="icon-menu"></span>
			</button>
			<ul class="navbar-nav">
				<li class="nav-item dropdown d-none d-lg-flex">
					<a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
						<span class="btn">+ Create new</span>
					</a>
					<div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
						<a class="dropdown-item" href="#">
							<i class="icon-user text-primary"></i>
							User Account
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<i class="icon-user-following text-warning"></i>
							Admin User
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<i class="icon-docs text-success"></i>
							Sales report
						</a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav navbar-nav-right">
				<li class="nav-item dropdown d-none d-lg-flex">
					<a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
						<i class="flag-icon flag-icon-gb"></i>
						English
					</a>
					<div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
						<a class="dropdown-item font-weight-medium" href="#">
							<i class="flag-icon flag-icon-fr"></i>
							French
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item font-weight-medium" href="#">
							<i class="flag-icon flag-icon-es"></i>
							Espanol
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item font-weight-medium" href="#">
							<i class="flag-icon flag-icon-lt"></i>
							Latin
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item font-weight-medium" href="#">
							<i class="flag-icon flag-icon-ae"></i>
							Arabic
						</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
						<i class="icon-bell mx-0"></i>
						<span class="count"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
						<a class="dropdown-item">
							<p class="mb-0 font-weight-normal float-left">You have 4 new notifications
							</p>
							<span class="badge badge-pill badge-warning float-right">View all</span>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<div class="preview-icon bg-success">
									<i class="icon-info mx-0"></i>
								</div>
							</div>
							<div class="preview-item-content">
								<h6 class="preview-subject font-weight-medium">Application Error</h6>
								<p class="font-weight-light small-text">
									Just now
								</p>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<div class="preview-icon bg-warning">
									<i class="icon-speech mx-0"></i>
								</div>
							</div>
							<div class="preview-item-content">
								<h6 class="preview-subject font-weight-medium">Settings</h6>
								<p class="font-weight-light small-text">
									Private message
								</p>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<div class="preview-icon bg-info">
									<i class="icon-envelope mx-0"></i>
								</div>
							</div>
							<div class="preview-item-content">
								<h6 class="preview-subject font-weight-medium">New user registration</h6>
								<p class="font-weight-light small-text">
									2 days ago
								</p>
							</div>
						</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
						<i class="icon-envelope mx-0"></i>
						<span class="count"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
						<div class="dropdown-item">
							<p class="mb-0 font-weight-normal float-left">You have 7 unread mails
							</p>
							<span class="badge badge-info badge-pill float-right">View all</span>
						</div>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<img src="<?=base_url()?>assets/backend/images/faces/face4.jpg" alt="image" class="profile-pic">
							</div>
							<div class="preview-item-content flex-grow">
								<h6 class="preview-subject ellipsis font-weight-medium">David Grey
									<span class="float-right font-weight-light small-text">1 Minutes ago</span>
								</h6>
								<p class="font-weight-light small-text">
									The meeting is cancelled
								</p>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<img src="<?=base_url()?>assets/backend/images/faces/face2.jpg" alt="image" class="profile-pic">
							</div>
							<div class="preview-item-content flex-grow">
								<h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
									<span class="float-right font-weight-light small-text">15 Minutes ago</span>
								</h6>
								<p class="font-weight-light small-text">
									New product launch
								</p>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item preview-item">
							<div class="preview-thumbnail">
								<img src="<?=base_url()?>assets/backend/images/faces/face3.jpg" alt="image" class="profile-pic">
							</div>
							<div class="preview-item-content flex-grow">
								<h6 class="preview-subject ellipsis font-weight-medium"> Johnson
									<span class="float-right font-weight-light small-text">18 Minutes ago</span>
								</h6>
								<p class="font-weight-light small-text">
									Upcoming board meeting
								</p>
							</div>
						</a>
					</div>
				</li>
				<li class="nav-item nav-settings d-none d-lg-block">
					<a class="nav-link" href="#">
						<i class="icon-grid"></i>
					</a>
				</li>
			</ul>
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
				<span class="icon-menu"></span>
			</button>
		</div>
	</nav>
	<!-- partial -->
	<div class="container-fluid page-body-wrapper">
		<div class="row row-offcanvas row-offcanvas-right">
			<!-- partial:partials/_settings-panel.html -->
			<div class="theme-setting-wrapper">
				<div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
				<div id="theme-settings" class="settings-panel">
					<i class="settings-close mdi mdi-close"></i>
					<p class="settings-heading">SIDEBAR SKINS</p>
					<div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
					<div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
					<p class="settings-heading mt-2">HEADER SKINS</p>
					<div class="color-tiles mx-0 px-4">
						<div class="tiles primary"></div>
						<div class="tiles success"></div>
						<div class="tiles warning"></div>
						<div class="tiles danger"></div>
						<div class="tiles pink"></div>
						<div class="tiles info"></div>
						<div class="tiles dark"></div>
						<div class="tiles default"></div>
					</div>
				</div>
			</div>
			<div id="right-sidebar" class="settings-panel">
				<i class="settings-close mdi mdi-close"></i>
				<ul class="nav nav-tabs" id="setting-panel" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
					</li>
				</ul>
				<div class="tab-content" id="setting-content">
					<div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
						<div class="add-items d-flex px-3 mb-0">
							<form class="form w-100">
								<div class="form-group d-flex">
									<input type="text" class="form-control todo-list-input" placeholder="Add To-do">
									<button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
								</div>
							</form>
						</div>
						<div class="list-wrapper px-3">
							<ul class="d-flex flex-column-reverse todo-list">
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Team review meeting at 3.00 PM
										</label>
									</div>
									<i class="remove mdi mdi-close-circle-outline"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Prepare for presentation
										</label>
									</div>
									<i class="remove mdi mdi-close-circle-outline"></i>
								</li>
								<li>
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox">
											Resolve all the low priority tickets due today
										</label>
									</div>
									<i class="remove mdi mdi-close-circle-outline"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Schedule meeting for next week
										</label>
									</div>
									<i class="remove mdi mdi-close-circle-outline"></i>
								</li>
								<li class="completed">
									<div class="form-check">
										<label class="form-check-label">
											<input class="checkbox" type="checkbox" checked>
											Project review
										</label>
									</div>
									<i class="remove mdi mdi-close-circle-outline"></i>
								</li>
							</ul>
						</div>
						<div class="events py-4 border-bottom px-3">
							<div class="wrapper d-flex mb-2">
								<i class="mdi mdi-circle-outline text-primary mr-2"></i>
								<span>Feb 11 2018</span>
							</div>
							<p class="mb-0 font-weight-thin text-gray">Creating component page</p>
							<p class="text-gray mb-0">build a js based app</p>
						</div>
						<div class="events pt-4 px-3">
							<div class="wrapper d-flex mb-2">
								<i class="mdi mdi-circle-outline text-primary mr-2"></i>
								<span>Feb 7 2018</span>
							</div>
							<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
							<p class="text-gray mb-0 ">Call Sarah Graves</p>
						</div>
					</div>
					<!-- To do section tab ends -->
					<div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
						<div class="d-flex align-items-center justify-content-between border-bottom">
							<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
							<small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
						</div>
						<ul class="chat-list">
							<li class="list active">
								<div class="profile"><img src="<?=base_url()?>assets/backend/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Thomas Douglas</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">19 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?=base_url()?>assets/backend/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
								<div class="info">
									<div class="wrapper d-flex">
										<p>Catherine</p>
									</div>
									<p>Away</p>
								</div>
								<div class="badge badge-success badge-pill my-auto mx-2">4</div>
								<small class="text-muted my-auto">23 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?=base_url()?>assets/backend/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Daniel Russell</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">14 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?=base_url()?>assets/backend/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
								<div class="info">
									<p>James Richardson</p>
									<p>Away</p>
								</div>
								<small class="text-muted my-auto">2 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?=base_url()?>assets/backend/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Madeline Kennedy</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">5 min</small>
							</li>
							<li class="list">
								<div class="profile"><img src="<?=base_url()?>assets/backend/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
								<div class="info">
									<p>Sarah Graves</p>
									<p>Available</p>
								</div>
								<small class="text-muted my-auto">47 min</small>
							</li>
						</ul>
					</div>
					<!-- chat tab ends -->
				</div>
			</div>
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item nav-profile">
						<div class="nav-link">
							<div class="profile-image">
								<img src="<?=base_url()?>assets/backend/images/faces/face10.jpg" alt="image"/>
								<span class="online-status online"></span> <!--change class online to offline or busy as needed-->
							</div>
							<div class="profile-name">
								<p class="name">
									Marina Michel
								</p>
								<p class="designation">
									Super Admin
								</p>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index-2.html">
							<i class="icon-rocket menu-icon"></i>
							<span class="menu-title">Dashboard</span>
							<span class="badge badge-success">New</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/widgets.html">
							<i class="icon-shield menu-icon"></i>
							<span class="menu-title">Widgets</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
							<i class="icon-check menu-icon"></i>
							<span class="menu-title">Page Layouts</span>
							<span class="badge badge-danger">3</span>
						</a>
						<div class="collapse" id="page-layouts">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a></li>
								<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item d-none d-lg-block">
						<a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
							<i class="icon-layers menu-icon"></i>
							<span class="menu-title">Sidebar Layouts</span>
							<span class="badge badge-warning">5</span>
						</a>
						<div class="collapse" id="sidebar-layouts">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
							<i class="icon-target menu-icon"></i>
							<span class="menu-title">Basic UI Elements</span>
							<span class="badge badge-success">10</span>
						</a>
						<div class="collapse" id="ui-basic">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
							<i class="icon-cup menu-icon"></i>
							<span class="menu-title">Advanced Elements</span>
							<span class="badge badge-primary">8</span>
						</a>
						<div class="collapse" id="ui-advanced">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/ui-features/tour.html">Tour</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
							<i class="icon-flag menu-icon"></i>
							<span class="menu-title">Form elements</span>
							<span class="badge badge-danger">3</span>
						</a>
						<div class="collapse" id="form-elements">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
								<li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
								<li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
								<li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
							<i class="icon-anchor menu-icon"></i>
							<span class="menu-title">Editors</span>
							<span class="badge badge-info">3</span>
						</a>
						<div class="collapse" id="editors">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
								<li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
							<i class="icon-pie-chart menu-icon"></i>
							<span class="menu-title">Charts</span>
							<span class="badge badge-warning">8</span>
						</a>
						<div class="collapse" id="charts">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Tables</span>
							<span class="badge badge-info">4</span>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/ui-features/popups.html">
							<i class="icon-diamond menu-icon"></i>
							<span class="menu-title">Popups</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/ui-features/notifications.html">
							<i class="icon-bell menu-icon"></i>
							<span class="menu-title">Notifications</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
							<i class="icon-globe menu-icon"></i>
							<span class="menu-title">Icons</span>
							<span class="badge badge-info">4</span>
						</a>
						<div class="collapse" id="icons">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
							<i class="icon-location-pin menu-icon"></i>
							<span class="menu-title">Maps</span>
							<span class="badge badge-success">2</span>
						</a>
						<div class="collapse" id="maps">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
							<i class="icon-bubbles menu-icon"></i>
							<span class="menu-title">User Pages</span>
							<span class="badge badge-danger">5</span>
						</a>
						<div class="collapse" id="auth">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
							<i class="icon-support menu-icon"></i>
							<span class="menu-title">Error pages</span>
							<span class="badge badge-primary">2</span>
						</a>
						<div class="collapse" id="error">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
							<i class="icon-user menu-icon"></i>
							<span class="menu-title">General Pages</span>
							<span class="badge badge-warning">6</span>
						</a>
						<div class="collapse" id="general-pages">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
							<i class="icon-briefcase menu-icon"></i>
							<span class="menu-title">E-commerce</span>
							<span class="badge badge-info">3</span>
						</a>
						<div class="collapse" id="e-commerce">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
								<li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/apps/email.html">
							<i class="icon-cursor menu-icon"></i>
							<span class="menu-title">E-mail</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/apps/calendar.html">
							<i class="icon-calendar menu-icon"></i>
							<span class="menu-title">Calendar</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/apps/todo.html">
							<i class="icon-clock menu-icon"></i>
							<span class="menu-title">Todo List</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/apps/gallery.html">
							<i class="icon-picture menu-icon"></i>
							<span class="menu-title">Gallery</span>
						</a>
					</li>
					<li class="nav-item nav-doc">
						<a class="nav-link bg-primary" href="pages/documentation.html">
							<i class="icon-magnet menu-icon"></i>
							<span class="menu-title">Documentation</span>
						</a>
					</li>
					<li class="mt-4 nav-item nav-progress">
						<h6 class="nav-progress-heading mt-4 font-weight-normal">
							Today's Sales
							<span class="nav-progress-sub-heading">
                  50 sold
                </span>
						</h6>
						<div class="progress progress-sm">
							<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<h6 class="nav-progress-heading mt-4 font-weight-normal">
							Customer target
							<span class="nav-progress-sub-heading">
                  500
                </span>
						</h6>
						<div class="progress progress-sm">
							<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</li>
				</ul>
			</nav>
			<!-- partial -->
			<div class="content-wrapper">
				<div class="row">
