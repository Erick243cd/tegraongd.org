<!-- start page container -->
<div class="page-container">
	<!-- start sidebar menu -->
	<div class="sidebar-container">
		<div class="sidemenu-container navbar-collapse collapse fixed-menu">
			<div id="remove-scroll" class="left-sidemenu">
				<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
					data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
					<li class="sidebar-toggler-wrapper hide">
						<div class="sidebar-toggler">
							<span></span>
						</div>
					</li>
					<li class="sidebar-user-panel">
						<div class="user-panel">
							<div class="pull-left image">

							<?= img('assets/img/users/'.$session_data['user_image'], '', 'class="img-circle"')?>	
							</div>
							<div class="pull-left info">
								<p> <?= ucfirst($session_data['user_name']) ?? "User name" ?></p>
								<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
							</div>
						</div>
					</li>
					<li class="nav-item start active open">
						<a href="#" class="nav-link nav-toggle">
							<i class="material-icons">dashboard</i>
							<span class="title">Dashboard</span>
							<span class="selected"></span>
							<span class="arrow open"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item active">
								<a href="index.html" class="nav-link ">
									<span class="title">Dashboard 1</span>
									<span class="selected"></span>
								</a>
							</li>
							<li class="nav-item ">
								<a href="dashboard2.html" class="nav-link ">
									<span class="title">Dashboard 2</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="dashboard3.html" class="nav-link ">
									<span class="title">Dashboard 3</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('pages/logout')?>" class="nav-link nav-toggle"> <i class="fa fa-lock"></i>
							<span class="title">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end sidebar menu -->
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Dashboard</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
															   href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Dashboard</li>
					</ol>
				</div>
			</div>
			<!-- start widget -->
			<div class="state-overview">
				<div class="row">
					<div class="col-xl-3 col-md-6 col-12">
						<div class="info-box bg-b-green">
							<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Total Students</span>
								<span class="info-box-number">450</span>
								<div class="progress">
									<div class="progress-bar" style="width: 45%"></div>
								</div>
								<span class="progress-description">
											45% Increase in 28 Days
										</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-3 col-md-6 col-12">
						<div class="info-box bg-b-yellow">
							<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
							<div class="info-box-content">
								<span class="info-box-text">New Students</span>
								<span class="info-box-number">155</span>
								<div class="progress">
									<div class="progress-bar" style="width: 40%"></div>
								</div>
								<span class="progress-description">
											40% Increase in 28 Days
										</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-3 col-md-6 col-12">
						<div class="info-box bg-b-blue">
							<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Total Course</span>
								<span class="info-box-number">52</span>
								<div class="progress">
									<div class="progress-bar" style="width: 85%"></div>
								</div>
								<span class="progress-description">
											85% Increase in 28 Days
										</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-xl-3 col-md-6 col-12">
						<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
							<div class="info-box-content">
								<span class="info-box-text">Fees Collection</span>
								<span class="info-box-number">13,921</span><span>$</span>
								<div class="progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="progress-description">
											50% Increase in 28 Days
										</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>
			</div>
			<!-- end widget -->
			<!-- chart start -->
			<div class="row">
				<div class="col-sm-6">
					<div class="card card-box">
						<div class="card-head">
							<header>University Survey</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body">
							<div class="recent-report__chart">
								<div id="chart1"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card card-box">
						<div class="card-head">
							<header>University Survey</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body">
							<div class="recent-report__chart">
								<div id="chart2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Chart end -->
			
			<div class="row">
				<!-- Quick Mail start -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="inbox">
						<div class="card">
							<div class="card-body no-padding height-9">
								<div class="inbox-body">
									<div class="mail-list">
										<div class="compose-mail">
											<form method="post">
												<div class="email-form">
													<label for="to" class="">To:</label> <input type="text"
																								tabindex="1" id="to" class="form-control itemField">
													<div class="compose-options">
														<a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();"
														   href="javascript:;">Cc</a> <a
															onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();"
															href="javascript:;">Bcc</a>
													</div>
												</div>
												<div class="email-form hidden">
													<label for="cc" class="">Cc:</label> <input type="text"
																								tabindex="2" id="cc" class="form-control itemField">
												</div>
												<div class="email-form hidden">
													<label for="bcc" class="">Bcc:</label> <input type="text"
																								  tabindex="2" id="bcc" class="form-control itemField">
												</div>
												<div class="email-form">
													<label for="subject" class="">Subject:</label> <input
														type="text" tabindex="1" id="subject"
														class="form-control itemField">
												</div>
												<div class="mt-4">
													<div id="summernote"></div>
													<input type="file" class="default" multiple>
												</div>
												<div class="box-footer clearfix">
													<button type="button"
															class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">
														Send <i class="fa fa-paper-plane-o"></i>
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Quick Mail end -->
			</div>
			
			<!-- start new student list -->
			
			<!-- end new student list -->
		</div>
	</div>
	<!-- end page content -->
	<!-- start chat sidebar -->
	<div class="chat-sidebar-container" data-close-on-body-click="false">
		<div class="chat-sidebar">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-bs-toggle="tab"> <i
							class="material-icons">chat</i>Chat
						<span class="badge badge-danger">4</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-bs-toggle="tab"> <i
							class="material-icons">settings</i>
						Settings
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<!-- Start Doctor Chat -->
				<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
					 id="quick_sidebar_tab_1">
					<div class="chat-sidebar-list">
						<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
							 data-wrapper-class="chat-sidebar-list">
							<div class="chat-header">
								<h5 class="list-heading">Online</h5>
							</div>
							<ul class="media-list list-items">
								<li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg"
													   width="35" height="35" alt="...">
									<i class="online dot"></i>
									<div class="media-body">
										<h5 class="media-heading">John Deo</h5>
										<div class="media-heading-sub">Spine Surgeon</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">5</span>
									</div> <img class="media-object" src="../assets/img/prof/prof1.jpg"
												width="35" height="35" alt="...">
									<i class="busy dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Rajesh</h5>
										<div class="media-heading-sub">Director</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg"
													   width="35" height="35" alt="...">
									<i class="away dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Jacob Ryan</h5>
										<div class="media-heading-sub">Ortho Surgeon</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">8</span>
									</div> <img class="media-object" src="../assets/img/prof/prof4.jpg"
												width="35" height="35" alt="...">
									<i class="online dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Kehn Anderson</h5>
										<div class="media-heading-sub">CEO</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg"
													   width="35" height="35" alt="...">
									<i class="busy dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Sarah Smith</h5>
										<div class="media-heading-sub">Anaesthetics</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg"
													   width="35" height="35" alt="...">
									<i class="online dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Vlad Cardella</h5>
										<div class="media-heading-sub">Cardiologist</div>
									</div>
								</li>
							</ul>
							<div class="chat-header">
								<h5 class="list-heading">Offline</h5>
							</div>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-warning">4</span>
									</div> <img class="media-object" src="../assets/img/prof/prof6.jpg"
												width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Jennifer Maklen</h5>
										<div class="media-heading-sub">Nurse</div>
										<div class="media-heading-small">Last seen 01:20 AM</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg"
													   width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Lina Smith</h5>
										<div class="media-heading-sub">Ortho Surgeon</div>
										<div class="media-heading-small">Last seen 11:14 PM</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">9</span>
									</div> <img class="media-object" src="../assets/img/prof/prof9.jpg"
												width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Jeff Adam</h5>
										<div class="media-heading-sub">Compounder</div>
										<div class="media-heading-small">Last seen 3:31 PM</div>
									</div>
								</li>
								<li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg"
													   width="35" height="35" alt="...">
									<i class="offline dot"></i>
									<div class="media-body">
										<h5 class="media-heading">Anjelina Cardella</h5>
										<div class="media-heading-sub">Physiotherapist</div>
										<div class="media-heading-small">Last seen 7:45 PM</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Doctor Chat -->
				<!-- Start Setting Panel -->
				<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
					<div class="chat-sidebar-settings-list slimscroll-style">
						<div class="chat-header">
							<h5 class="list-heading">Layout Settings</h5>
						</div>
						<div class="chatpane inner-content ">
							<div class="settings-list">
								<div class="setting-item">
									<div class="setting-text">Sidebar Position</div>
									<div class="setting-set">
										<select
											class="sidebar-pos-option form-control input-inline input-sm input-small ">
											<option value="left" selected="selected">Left</option>
											<option value="right">Right</option>
										</select>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Header</div>
									<div class="setting-set">
										<select
											class="page-header-option form-control input-inline input-sm input-small ">
											<option value="fixed" selected="selected">Fixed</option>
											<option value="default">Default</option>
										</select>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Footer</div>
									<div class="setting-set">
										<select
											class="page-footer-option form-control input-inline input-sm input-small ">
											<option value="fixed">Fixed</option>
											<option value="default" selected="selected">Default</option>
										</select>
									</div>
								</div>
							</div>
							<div class="chat-header">
								<h5 class="list-heading">Account Settings</h5>
							</div>
							<div class="settings-list">
								<div class="setting-item">
									<div class="setting-text">Notifications</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-1">
												<input type="checkbox" id="switch-1" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Show Online</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-7">
												<input type="checkbox" id="switch-7" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Status</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-2">
												<input type="checkbox" id="switch-2" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">2 Steps Verification</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-3">
												<input type="checkbox" id="switch-3" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="chat-header">
								<h5 class="list-heading">General Settings</h5>
							</div>
							<div class="settings-list">
								<div class="setting-item">
									<div class="setting-text">Location</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-4">
												<input type="checkbox" id="switch-4" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Save Histry</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-5">
												<input type="checkbox" id="switch-5" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
								<div class="setting-item">
									<div class="setting-text">Auto Updates</div>
									<div class="setting-set">
										<div class="switch">
											<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
												   for="switch-6">
												<input type="checkbox" id="switch-6" class="mdl-switch__input"
													   checked>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end chat sidebar -->
</div>
<!-- end page container -->
<!--<main>-->
<!--	<div class="container-fluid m-5 p-5">-->
<!--		<div class="row">-->
<!--			<div class="col-3">-->
<!--				<div class="">-->
<!--					<ul class="list-group">-->
<!--						<li class="list-item"><a class="genric-btn primary btn-lg default" href="--><?//= base_url()?><!--pages/dashboard">Dashboard</a></li>-->
<!--						<div class="ml-2">-->
<!--						<li class="list-item"><a class="genric-btn default btn-lg" href="--><?//= base_url()?><!--activities/liste">Activités</a></li>-->
<!--						<li class="list-item"><a class="genric-btn default btn-lg" href="--><?//= base_url()?><!--pages/dashboard">Publier</a></li>-->
<!--						<li class="list-item"><a onclick="return confirm('Etes-vous sûr de vous déconnecter');" class="genric-btn default btn-lg" href="--><?//= base_url()?><!--pages/logout">Logout</a></li>-->
<!--						</div>-->
<!--					</ul>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-8">-->
<!--				<form class="form-contact contact_form" action="--><?//= base_url()?><!--activities/create" method="post" enctype="multipart/form-data">-->
<!--			<div class="row">-->
<!--			-->
<!--			<div class="col-sm-12">-->
<!--				<div class="form-group">-->
<!--				<input class="form-control valid" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Titre de la publication'" placeholder="Titre de la publication" required="required">-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-12">-->
<!--			<div class="form-group">-->
<!--			<textarea class="form-control w-100" name="body" id="" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer le Conteny'" placeholder=" Entrer le contenu" required="required"></textarea>-->
<!--			</div>-->
<!--			</div>-->
<!---->
<!--			<div class="col-sm-6">-->
<!--			<div class="form-group">-->
<!--				<select class="form-control" name="id_category" required>-->
<!--					<option disabled selected>Séléctionner la catégorie</option>-->
<!--					--><?php //foreach($categories as $row):?>
<!--						<option value="--><?//= $row->id_category?><!--">--><?//= $row->name?><!--</option>-->
<!--					--><?php //endforeach;?>
<!--				</select>-->
<!--			</div>		-->
<!--			</div>-->
<!--			<div class="col-sm-6">-->
<!--			<div class="form-group">-->
<!--			<input  type="file" name="post_image" class="form-control valid" accept=".jpg; .png; .webp"required>-->
<!--			</div>		-->
<!--			</div>-->
<!--		</div>-->
<!--			<div class="form-group mt-3">-->
<!--			<button type="submit" class="genric-btn primary btn-fixed">Publier</button>-->
<!--			</div>-->
<!--			</form>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</main>-->
