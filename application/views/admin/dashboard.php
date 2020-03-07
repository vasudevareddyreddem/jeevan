<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Dashboard <small></small>  </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="">
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo isset($ip_list['cnt'])?$ip_list['cnt']:''; ?></h3>
						<p> IP Count</p>
					</div>
					<div class="icon"> <i class="fa fa-user-md"></i>
					</div> <a href="<?php echo base_url('/ip/history'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			
			<!-- ./col -->
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo isset($patient_list['cnt'])?$patient_list['cnt']:''; ?></h3>
						<p>Patients</p>
					</div>
					<div class="icon"> <i class="fa fa-user"></i>
					</div> <a href="<?php echo base_url('patient'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo isset($op_list['cnt'])?$op_list['cnt']:''; ?></h3>
						<p>OP Count</p>
					</div>
					<div class="icon"> <i class="fa fa-list"></i>
					</div> <a href="<?php echo base_url('patient/history'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</section>
	<!-- /.content -->
</div>
