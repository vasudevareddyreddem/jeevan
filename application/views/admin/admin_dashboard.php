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
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo isset($hos_l['cnt'])?$hos_l['cnt']:''; ?></h3>
						<p> Hospital count</p>
					</div>
					<div class="icon"> <i class="fa fa-plus-square"></i>
					</div> <a href="<?php echo base_url('hospital'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			
			<!-- ./col -->
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-blue">
					<div class="inner">
						<h3><?php echo isset($doc_l['cnt'])?$doc_l['cnt']:''; ?></h3>
						<p>Doctors count</p>
					</div>
					<div class="icon"> <i class="fa fa-medkit"></i>
					</div> <a href="<?php echo base_url('doctor'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo isset($depart_l['cnt'])?$depart_l['cnt']:''; ?></h3>
						<p>Department Count</p>
					</div>
					<div class="icon"> <i class="fa fa-building-o"></i>
					</div> <a href="<?php echo base_url('department'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo isset($specilization_l['cnt'])?$specilization_l['cnt']:''; ?></h3>
						<p>Specialization  Count</p>
					</div>
					<div class="icon"> <i class="fa fa-wheelchair"></i>
					</div> <a href="<?php echo base_url('specialization'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12">
				<!-- small box -->
				<div class="small-box bg-pink">
					<div class="inner">
						<h3><?php echo isset($appointment_l['cnt'])?$appointment_l['cnt']:''; ?></h3>
						<p>Appointments Count</p>
					</div>
					<div class="icon"> <i class="fa fa-calendar"></i>
					</div> <a href="<?php echo base_url('appointments/all'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</section>
	<!-- /.content -->
</div>
