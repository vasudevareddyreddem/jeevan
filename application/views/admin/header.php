<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hospil</title>
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>assets/back/css/bootstrapValidator.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/daterangepicker.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/custom.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/jquery-ui.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/jquery-jvectormap-1.2.2.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/bootstrap3-wysihtml5.min.css">
	<!-- jQuery 2.2.3 -->
	<script src="<?php echo base_url(); ?>assets/back/js/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url(); ?>assets/back/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/back/js/bootstrapValidator.min.js"></script>
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="<?php echo base_url('dashboard'); ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b>H</b></span>
				<!-- logo for regular state and mobile devices --> <span class="logo-lg"><img style="height:50px;" class="img-responsive" src="<?php echo base_url(); ?>assets/back/img/logo.png"></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php if($h_details['profile_pic']!=''){ ?>
								<img src="<?php echo base_url('assets/profile_pic/'.$h_details['profile_pic']); ?>" class="user-image" alt="User Image">
							<?php }else{ ?>
								<img src="<?php echo base_url(); ?>assets/back/img/user.png" class="user-image" alt="User Image">
							<?php } ?>
								<span class="hidden-xs"><?php echo isset($h_details['name'])?$h_details['name']:''; ?></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<?php if($h_details['profile_pic']!=''){ ?>
										<img src="<?php echo base_url('assets/profile_pic/'.$h_details['profile_pic']); ?>" class="user-image" alt="User Image">
									<?php }else{ ?>
										<img src="<?php echo base_url(); ?>assets/back/img/user.png" class="img-circle" alt="User Image">
									<?php } ?>
									<p><?php echo isset($h_details['name'])?$h_details['name']:''; ?> <small><?php //echo isset($h_details['role_id'])?$h_details['role_id']:''; ?></small>
									</p>
								</li>
								<!-- Menu Body -->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left"> <a href="<?php echo base_url('profile'); ?>" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right"> <a href="<?php echo base_url('dashboard/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- =============================================== -->
		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel bg-profile">
					<div class="pull-left image">
					<?php if($h_details['profile_pic']!=''){ ?>
						<img src="<?php echo base_url('assets/profile_pic/'.$h_details['profile_pic']); ?>" class="user-image" alt="User Image">
					<?php }else{ ?>
						<img src="<?php echo base_url(); ?>assets/back/img/user.png" class="img-circle" alt="User Image">
					<?php } ?>
					</div>
					<div class="pull-left info">
						<p><?php echo isset($h_details['name'])?$h_details['name']:''; ?> </p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
	
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					
					<?php if($h_details['role_id']==1){ ?>
						
						<li class="treeview">
							<a href="#"> <i class="fa fa-user-plus"></i>  <span>Module</span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu" style="display: none;">
								<li> <a href="<?php echo base_url('module/add'); ?>">Add </a></li>
								<li><a href="<?php echo base_url('module'); ?>">List</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#"> <i class="fa fa-user-plus"></i><span>Module Menu</span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu" style="display: none;">
								<li> <a href="<?php echo base_url('module/menuadd'); ?>">Add </a></li>
								<li><a href="<?php echo base_url('module/menulist'); ?>">List</a></li>
							</ul>
						</li>
						
					<?php } ?>
					<?php $cnt=1;foreach($m_list as $m_li){ ?>
						<li class="treeview">
							<a href="#"> <i class="fa fa-user-plus"></i>  <span><?php echo isset($m_li['m_name'])?$m_li['m_name']:''; ?></span>
								<span class="pull-right-container">
								  <i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu" style="display: none;">
								<?php  if(isset($m_li['menu']) && count($m_li['menu'])>0){ ?>
									<?php foreach($m_li['menu'] as $li){ ?>
										<li><a href="<?php echo base_url(); ?><?php echo $li['m_menu_url']; ?>"><?php echo $li['m_menu_name']; ?></a></li>
									<?php } ?>
								<?php } ?>
							</ul>
						</li>
					<?php $cnt++;} ?>
					
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div style="padding:10px">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 style="pull-left" class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
                    <div class="row">
                        <div id="content1" class="col-xs-12 col-xl-12 form-group">
                            Are you sure ?
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6  col-sm-6 ">
                            <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn pull-left">Cancel</button>
                        </div>
                        <div class="col-md-6 col-sm-6  col-sm-6 ">
                            <a href="?id=value" class="btn  blueBtn popid pull-right" style="text-decoration:none;"> <span aria-hidden="true">Ok</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php if($this->session->flashdata('success')): ?>
	<div class="alert_msg1 animated slideInUp bg-succ">
	   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
	</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
	<div class="alert_msg1 animated slideInUp bg-warn">
	   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
	</div>
<?php endif; ?>