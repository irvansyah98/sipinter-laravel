<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Si Pinter - Sistem Informasi Pernikahan Terpadu</title>
		<link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/icon.png') }}">
		
        <!-- Common Plugins -->
        <link href="{{ url('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		
		<!-- Vector Map Css-->
        <link href="{{ url('assets/lib/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
		
        <!-- DataTables -->
        <link href="{{ url('assets/lib/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/lib/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('assets/lib/toast/jquery.toast.min.css') }}" rel="stylesheet">
		
        <!-- Custom Css-->
        <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/jquery-steps-master/demo/css/jquery.steps.css') }}">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<div class="top-bar primary-top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<a class="admin-logo" href="index.html">
							<!-- <h1>
								<img alt="" src="assets/img/icon.png" class="logo-icon margin-r-10">
								<img alt="" src="assets/img/logo-dark.png" class="toggle-none hidden-xs">
							</h1> -->
						</a>
						<div class="left-nav-toggle" >
							<a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
						</div>
						<div class="left-nav-collapsed" >
							<a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!--                        Topbar End                              -->
		<!-- ============================================================== -->
		
		
		<!-- ============================================================== -->
		<!--                        Right Side Start                        -->
		<!-- ============================================================== -->
		<nav class="toggle-sidebar" id="right-sidebar-toggle">
			<div class="nano">
				<div class="nano-content">
					<div>
						<ul class="list-inline nav-tab-card clearfix" role="tablist">
							
							<li class="active" role="presentation">
								<a aria-controls="friends" data-toggle="tab" href="#friends" role="tab">Friends</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="friends" role="tabcard">
								<ul class="list-unstyled sidebar-contact-list">
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-2.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-1.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-danger circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-3.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-4.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Hritik Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-5.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Bianca Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-6.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>John Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-success circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-1.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Govinda Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li class="clearfix">
										<a class="media-box" href="#"><span class="pull-right"><span class="circle circle-danger circle-lg"></span></span> <span class="pull-left">
										 <img alt="user" class="media-box-object rounded-circle" src="assets/img/avtar-2.jpg" width="50"></span>
										 <span class="media-box-body"><span class="media-box-heading"><strong>Megan Doe</strong><br>
										<small class="text-muted">Designer</small></span></span></a>
									</li>
									<li>
										<div class=" text-center">
											<a class="btn btn-teal" href="javascript:void(0);" title="See more contacts">Load more..</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- ============================================================== -->
		<!--                        Right Side End                          -->
		<!-- ============================================================== -->
		

        <!-- ============================================================== -->
		<!-- 						Navigation Start 						-->
		<!-- ============================================================== -->
        <div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
                    <ul class="metisMenu nav flex-column" id="menu">
						<div class="card-block border-bottom text-center nav-profile">
                            <img alt="profile" class="rounded-circle margin-b-10 circle-border " src="assets/img/love.jpg" width="80">
                            <p class="lead margin-b-0 toggle-none">SiPinter</p>
                            <p class="text-muted mv-0 toggle-none">Welcome</p>
                        </div>
						
                        <li class="nav-heading"><span>Main</span></li>
											
                        <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-file"></i> <span class="toggle-none">Formulir Nikah </a></li>						
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-envelope-o"></i> <span class="toggle-none">Inbox<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="mail-index.html">Inbox</a></li>
                                <li class="nav-item"><a class="nav-link" href="mail-view.html">Inbox view</a></li>
                                <li class="nav-item"><a class="nav-link" href="mail-compose.html">Compose</a></li>
                            </ul>
                        </li>
						<li class="nav-heading"><span>Examples</span></li>
						<li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="true"><i class="fa fa-shopping-cart"></i> <span class="toggle-none">E-Commerce <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
								<li class="nav-item"><a class="nav-link" href="ecommerce-add.html">Add Product</a></li>
                                <li class="nav-item"><a class="nav-link" href="ecommerce-products.html">All Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="ecommerce-orders.html">Orders</a></li>
                            </ul>
                        </li>						
						<li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="true"><i class="fa fa-briefcase"></i> <span class="toggle-none">Corporate <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
								<li class="nav-item"><a class="nav-link" href="corporate-add.html">Add Pages</a></li>
                                <li class="nav-item"><a class="nav-link" href="corporate-pages.html">All Pages</a></li>
                            </ul>
                        </li>
						<li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="true"><i class="fa fa-fire"></i> <span class="toggle-none">Ajax & Php<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="examples-add-and-update.html">Add and Update With Php</a></li>
								<li class="nav-item"><a class="nav-link" href="examples-delete.html">Delete With Php</a></li>
                            </ul>
                        </li>
						  
                        <li class="nav-heading"><span>Components</span></li>

                        <li class="nav-item">
                            <a  class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-cogs"></i> <span class="toggle-none">UI elements <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="ui-jquery-elements.html">Jquery UI</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-bootstrap-elements.html">Bootstrap UI</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-typography.html">Typography</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-icons.html">Icons</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-cards.html">Cards</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-tabs.html">Tabs</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-card-master.html">Card Master</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-tip-pop.html">Tooltip & Popovers</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-sweetalerts.html">Sweet Alters</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-alertify.html">Alertify Alters</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-modals.html">Modals</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-notification.html">Notification</a></li>
								<li class="nav-item"><a class="nav-link" href="ui-progress.html">Progress</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-grid.html">Grid System</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-carousel.html">Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-range-slider.html">Range Slider</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-nestable.html">Nestable</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-treeview.html">Tree View</a></li>
                                <li class="nav-item"><a class="nav-link" href="ui-draggable-cards.html">Draggable Cards</a></li>
                            </ul>
                        </li>						
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-file-text-o"></i> <span class="toggle-none">Forms <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="form-basic.html">Basic Elements</a></li>
								<li class="nav-item"><a class="nav-link" href="form-validations.html">Form Validations</a></li>
								<li class="nav-item"><a class="nav-link" href="form-masks.html">Form Masks</a></li>
								<li class="nav-item"><a class="nav-link" href="form-picker.html">Form Picker</a></li>
								<li class="nav-item"><a class="nav-link" href="form-editor.html">Text Editor</a></li>
								<li class="nav-item"><a class="nav-link" href="form-file-upload.html">File upload</a></li>
                                <li class="nav-item"><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-table"></i> <span class="toggle-none">Tables <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="table-basic.html">Basic Tables</a></li>
                                <li class="nav-item"><a class="nav-link" href="table-data.html">Data Tables</a></li>
								<li class="nav-item"><a class="nav-link" href="table-js-grid.html">JsGrid Tables</a></li>
                                <li class="nav-item"><a class="nav-link" href="table-foo.html">Foo Tables</a></li>
                            </ul>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-bar-chart"></i> <span class="toggle-none">Charts <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="chart-flot.html">Flot</a></li>
                                <li class="nav-item"><a class="nav-link" href="chart-morris.html">Morris</a></li>
                                <li class="nav-item"><a class="nav-link" href="chart-radial.html">Radial</a></li>
                                <li class="nav-item"><a class="nav-link" href="chart-c3.html">C3</a></li>
                                <li class="nav-item"><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                                <li class="nav-item"><a class="nav-link" href="chart-rickshaw.html">Rickshaw</a></li>
                                <li class="nav-item"><a class="nav-link" href="chart-chartjs.html">ChartJs</a></li>
                            </ul>
                        </li>
						
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-map-marker"></i> <span class="toggle-none">Maps <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="map-vector.html">Vector map</a></li>
                                <li class="nav-item"><a class="nav-link" href="map-google.html">Google map</a></li>
                            </ul>
                        </li>
						
                        <li class="nav-heading"><span>Others</span></li>
						
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-folder-o"></i> <span class="toggle-none">Sample Pages <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="page-blank.html">Blank Page</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-forget-password.html">Forget Password</a></li>
								<li class="nav-item"><a class="nav-link" href="page-lockscreen.html">Lock-screen</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-404.html">404</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-gallery.html">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-timeline.html">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-invoice.html">Invoice</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-profile.html">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-calendar.html">Calendar</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-chat-room.html">Chat Room</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-faqs.html">Faqs</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-pricing.html">Pricing</a></li>
                                <li class="nav-item"><a class="nav-link" href="page-contacts.html">Contacts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="true"><i class="fa fa-folder-open-o"></i> <span class="toggle-none">Multi Level<span class="fa arrow "></span></span></a>
                            <ul class="nav-second-level nav flex-column" aria-expanded="true">
                                <li class="nav-item"><a class="nav-link" href="javascript: void(0);">Level 1</a></li>
                                <li class="nav-item"><a class="nav-link"href="javascript: void(0);" aria-expanded="true">Level 2 <span class="fa arrow"></span></a>
                                    <ul class="nav-third-level nav flex-column sub-menu" aria-expanded="true">
                                        <li class="nav-item"><a class="nav-link" href="javascript: void(0);">Level 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript: void(0);">Level 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->


		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
        <section class="main-content container">
			
				<div class="row">
					<div class="col-md-12">
					<div class="card">
							<div class="card-heading card-default">
								Formulir Nikah
							</div>
							<div class="card-block">
							<form action="{{ url('/daftar/cetak') }}" method="post">
							{{ csrf_field() }}
								<div id="example-basic">
									<h3>Form Data Calon Mempelai</h3>
									<section>
											<div class="col-md-6" style="float:left">
												<h5>Form Mempelai Pria</h5><br>
													<div class="form-group">
														<label for="">Nama Lengkap</label>
														<input type="text" class="form-control myform-input--textbox" name="nama_pria" id="" placeholder="Nama Lengkap"  >
													</div>
													<div class="form-group">
														<label for="">Jenis Kelamin</label>
														<div class="radio">
															<input type="radio" name="jk_pria" id="radio12" value="Laki-laki" checked="">
															<label for="radio12"> Laki-laki </label>
														</div>
													</div>
													<div class="form-group">
														<label for="">Tempat Lahir</label>
														<input type="text" class="form-control" name="tempat_lahir_pria" id="" placeholder="Tempat Lahir"  >
													</div>
													<div class="form-group">
														<label for="">Tanggal Lahir</label>
														<input type="date" class="form-control" name="tgl_lahir_pria" id=""  >
													</div>
													<div class="form-group">
														<label for="">Warganegara</label>
														<input type="text" class="form-control" name="warganegara_pria" id="" placeholder="Warganegara"  >
													</div>
													<div class="form-group">
														<label for="">Status Perkawinan</label>
														<input type="text" class="form-control" name="status_pria" id="" placeholder="Status Perkawinan"  >
													</div>
													<div class="form-group">
														<label for="">Agama</label>
														<select name="agama_pria" class="form-control" id="">
															<option value="">-- Pilih agama --</option>
															<option value="Islam">Islam</option>
															<option value="Kristen">Kristen</option>
															<option value="Hindu">Hindu</option>
															<option value="Budha">Budha</option>
														</select>
													</div>
													<div class="form-group">
														<label for="">Pekerjaan</label>
														<input type="text" class="form-control" name="pekerjaan_pria" id="" placeholder="Pekerjaan"  >
													</div>
													<div class="form-group">
														<label for="">Bin</label>
														<input type="text" class="form-control" name="bin_pria" id="" placeholder="Bin"  >
													</div>
													<div class="form-group">
														<label for="">Tempat Tinggal</label>
														<input type="text" class="form-control" name="tempat_tinggal_pria" id="" placeholder="Tempat Tinggal"  >
													</div>
													<div class="form-group">
														<label for="">Nama Istri Terdahulu <small>(optional)</small></label>
														<input type="text" class="form-control" name="istri_dulu_pria" id="" placeholder="Nama Istri Terdahulu"  >
													</div>
											</div>
											<div class="col-md-6" style="float:left">
													<h5>Form Mempelai Wanita</h5><br>
													<div class="form-group">
														<label for="">Nama Lengkap</label>
														<input type="text" class="form-control" name="nama_wanita" id="" placeholder="Nama Lengkap"  >
													</div>
													<div class="form-group">
														<label for="">Jenis Kelamin</label>
														<div class="radio">
															<input type="radio" name="jk_wanita" id="radio13" value="Perempuan" checked="">
															<label for="radio13"> Perempuan </label>
														</div>
													</div>
													<div class="form-group">
														<label for="">Tempat Lahir</label>
														<input type="text" class="form-control" name="tempat_lahir_wanita" id="" placeholder="Tempat Lahir"  >
													</div>
													<div class="form-group">
														<label for="">Tanggal Lahir</label>
														<input type="date" class="form-control" name="tgl_lahir_wanita" id=""  >
													</div>
													<div class="form-group">
														<label for="">Warganegara</label>
														<input type="text" class="form-control" name="warganegara_wanita" id="" placeholder="Warganegara"  >
													</div>
													<div class="form-group">
														<label for="">Status Perkawinan</label>
														<input type="text" class="form-control" name="status_wanita" id="" placeholder="Status Perkawinan"  >
													</div>
													<div class="form-group">
														<label for="">Agama</label>
														<select name="agama_wanita" class="form-control" id="">
															<option value="">-- Pilih agama --</option>
															<option value="Islam">Islam</option>
															<option value="Kristen">Kristen</option>
															<option value="Hindu">Hindu</option>
															<option value="Budha">Budha</option>
														</select>
													</div>
													<div class="form-group">
														<label for="">Pekerjaan</label>
														<input type="text" class="form-control" name="pekerjaan_wanita" id="" placeholder="Pekerjaan"  >
													</div>
													<div class="form-group">
														<label for="">Binti</label>
														<input type="text" class="form-control" name="binti_wanita" id="" placeholder="Binti"  >
													</div>
													<div class="form-group">
														<label for="">Tempat Tinggal</label>
														<input type="text" class="form-control" name="tempat_tinggal_wanita" id="" placeholder="Tempat Tinggal"  >
													</div>
													<div class="form-group">
														<label for="">Nama Suami Terdahulu <small>(optional)</small></label>
														<input type="text" class="form-control" name="suami_dulu_wanita" id="" placeholder="Nama Suami Terdahulu">
													</div>
											</div>
									</section>
									<h3>Form Data Orang Tua</h3>
									<section>
											<div class="col-md-6" style="float:left">
													<h5>Data Orang Tua Mempelai Pria</h5><br>
														<div class="form-group">
															<label for="">Nama Lengkap Ayah</label>
															<input type="text" class="form-control" name="nama_ayah_pria" id="" placeholder="Nama Lengkap Ayah"  >
														</div>
														<div class="form-group">
															<label for="">Jenis Kelamin</label>
															<div class="radio">
																<input type="radio" name="jk_ayah_pria" id="radio14" value="Laki-laki" checked="">
																<label for="radio14"> Laki-laki </label>
															</div>
														</div>
														<div class="form-group">
															<label for="">Tempat Lahir</label>
															<input type="text" class="form-control" name="tempat_lahir_ayah_pria" id="" placeholder="Tempat Lahir"  >
														</div>
														<div class="form-group">
															<label for="">Tanggal Lahir</label>
															<input type="date" class="form-control" name="tgl_lahir_ayah_pria" id=""  >
														</div>
														<div class="form-group">
															<label for="">Warganegara</label>
															<input type="text" class="form-control" name="warganegara_ayah_pria" id="" placeholder="Warganegara"  >
														</div>
														<div class="form-group">
															<label for="">Agama</label>
															<select name="agama_ayah_pria" class="form-control" id="">
															<option value="">-- Pilih agama --</option>
															<option value="Islam">Islam</option>
															<option value="Kristen">Kristen</option>
															<option value="Hindu">Hindu</option>
															<option value="Budha">Budha</option>
															</select>
														</div>
														<div class="form-group">
															<label for="">Pekerjaan</label>
															<input type="text" class="form-control" name="pekerjaan_ayah_pria" id="" placeholder="Pekerjaan"  >
														</div>
														<div class="form-group">
															<label for="">Tempat Tinggal</label>
															<input type="text" class="form-control" name="tempat_tinggal_ayah_pria" id="" placeholder="Tempat Tinggal"  >
														</div>
														<hr>
														<div class="form-group">
																<label for="">Nama Lengkap Ibu</label>
																<input type="text" class="form-control" name="nama_ibu_pria" id="" placeholder="Nama Lengkap Ibu"  >
															</div>
															<div class="form-group">
																<label for="">Jenis Kelamin</label>
																<div class="radio">
																	<input type="radio" name="jk_ibu_pria" id="radio15" value="Perempuan" checked="">
																	<label for="radio15"> Perempuan </label>
																</div>
															</div>
															<div class="form-group">
																<label for="">Tempat Lahir</label>
																<input type="text" class="form-control" name="tempat_lahir_ibu_pria" id="" placeholder="Tempat Lahir"  >
															</div>
															<div class="form-group">
																<label for="">Tanggal Lahir</label>
																<input type="date" class="form-control" name="tgl_lahir_ibu_pria" id=""  >
															</div>
															<div class="form-group">
																<label for="">Warganegara</label>
																<input type="text" class="form-control" name="warganegara_ibu_pria" id="" placeholder="Warganegara"  >
															</div>
															<div class="form-group">
																<label for="">Agama</label>
																<select name="agama_ibu_pria" class="form-control" id="">
																<option value="">-- Pilih agama --</option>
																<option value="Islam">Islam</option>
																<option value="Kristen">Kristen</option>
																<option value="Hindu">Hindu</option>
																<option value="Budha">Budha</option>
																</select>
															</div>
															<div class="form-group">
																<label for="">Pekerjaan</label>
																<input type="text" class="form-control" name="pekerjaan_ibu_pria" id="" placeholder="Pekerjaan"  >
															</div>
															<div class="form-group">
																<label for="">Tempat Tinggal</label>
																<input type="text" class="form-control" name="tempat_tinggal_ibu_pria" id="" placeholder="Tempat Tinggal"  >
															</div>
												</div>
												<div class="col-md-6" style="float:left">
														<h5>Data Orang Tua Mempelai Wanita</h5><br>
															<div class="form-group">
																<label for="">Nama Lengkap Ayah</label>
																<input type="text" class="form-control" name="nama_ayah_wanita" id="" placeholder="Nama Lengkap Ayah"  >
															</div>
															<div class="form-group">
																<label for="">Jenis Kelamin</label>
																<div class="radio">
																	<input type="radio" name="jk_ayah_wanita" id="radio16" value="Laki-laki" checked="">
																	<label for="radio16"> Laki-laki </label>
																</div>
															</div>
															<div class="form-group">
																<label for="">Tempat Lahir</label>
																<input type="text" class="form-control" name="tempat_lahir_ayah_wanita" id="" placeholder="Tempat Lahir"  >
															</div>
															<div class="form-group">
																<label for="">Tanggal Lahir</label>
																<input type="date" class="form-control" name="tgl_lahir_ayah_wanita" id=""  >
															</div>
															<div class="form-group">
																<label for="">Warganegara</label>
																<input type="text" class="form-control" name="warganegara_ayah_wanita" id="" placeholder="Warganegara"  >
															</div>
															<div class="form-group">
																<label for="">Agama</label>
																<select name="agama_ayah_wanita" class="form-control" id="">
																<option value="">-- Pilih agama --</option>
																<option value="Islam">Islam</option>
																<option value="Kristen">Kristen</option>
																<option value="Hindu">Hindu</option>
																<option value="Budha">Budha</option>
																</select>
															</div>
															<div class="form-group">
																<label for="">Pekerjaan</label>
																<input type="text" class="form-control" name="pekerjaan_ayah_wanita" id="" placeholder="Pekerjaan"  >
															</div>
															<div class="form-group">
																<label for="">Tempat Tinggal</label>
																<input type="text" class="form-control" name="tempat_tinggal_ayah_wanita" id="" placeholder="Tempat Tinggal"  >
															</div>
															<hr>
															<div class="form-group">
																	<label for="">Nama Lengkap Ibu</label>
																	<input type="text" class="form-control" name="nama_ibu_wanita" id="" placeholder="Nama Lengkap Ibu"  >
																</div>
																<div class="form-group">
																	<label for="">Jenis Kelamin</label>
																	<div class="radio">
																		<input type="radio" name="jk_ibu_wanita" id="radio17" value="Perempuan" checked="">
																		<label for="radio17"> Perempuan </label>
																	</div>
																</div>
																<div class="form-group">
																	<label for="">Tempat Lahir</label>
																	<input type="text" class="form-control" name="tempat_lahir_ibu_wanita" id="" placeholder="Tempat Lahir"  >
																</div>
																<div class="form-group">
																	<label for="">Tanggal Lahir</label>
																	<input type="date" class="form-control" name="tgl_lahir_ibu_wanita" id=""  >
																</div>
																<div class="form-group">
																	<label for="">Warganegara</label>
																	<input type="text" class="form-control" name="warganegara_ibu_wanita" id="" placeholder="Warganegara"  >
																</div>
																<div class="form-group">
																	<label for="">Agama</label>
																	<select name="agama_ibu_wanita" class="form-control" id="">
																	<option value="">-- Pilih agama --</option>
																	<option value="Islam">Islam</option>
																	<option value="Kristen">Kristen</option>
																	<option value="Hindu">Hindu</option>
																	<option value="Budha">Budha</option>
																	</select>
																</div>
																<div class="form-group">
																	<label for="">Pekerjaan</label>
																	<input type="text" class="form-control" name="pekerjaan_ibu_wanita" id="" placeholder="Pekerjaan"  >
																</div>
																<div class="form-group">
																	<label for="">Tempat Tinggal</label>
																	<input type="text" class="form-control" name="tempat_tinggal_ibu_wanita" id="" placeholder="Tempat Tinggal"  >
																</div>
													</div>
									</section>
								</div>
								<input type="submit" style="opacity:0" id="submit_nikah">
							</form>
							</div>
						</div>
					</div>
				</div>

            <footer class="footer">
                <span>Copyright &copy; 2018 Iervan Firdiansyah</span>
            </footer>

        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

		
        <!-- Common Plugins -->
        <script src="{{ url('assets/lib/jquery/dist/jquery.min.js') }}"></script>
		<script src="{{ url('assets/jquery-steps-master/build/jquery.steps.js') }}"></script>
		<script src="{{ url('assets/lib/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ url('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/lib/toast/jquery.toast.min.js') }}"></script>
		<script type="text/javascript">
var form = $("#example-basic").show();

form.steps({
  headerTag: "h3",
  bodyTag: "section",
  transitionEffect: "slideLeft",
  onFinishing: function (event, currentIndex)
  {
	$('#submit_nikah').click();
  },
  onFinished: function (event, currentIndex)
  {
    //   $('#setuju').click();
  }
});


</script>
    </body>
</html>