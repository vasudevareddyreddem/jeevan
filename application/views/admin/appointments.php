<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Appointments List
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Appointments List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Hospital Name</th>
							<th>Doctor</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile Number</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Consultation fee</th>
							<th>Discount</th>
							<th>Total fee</th>
							<th>Created Date & Time</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($a_list) && count($a_list)>0){ ?>
						<?php foreach($a_list as $li){ ?>
							<tr>
								<td><?php echo isset($li['hospitalname'])?$li['hospitalname']:''; ?></td>
								<td><?php echo isset($li['doctorname'])?$li['doctorname']:''; ?></td>
								<td><?php echo isset($li['name'])?$li['name']:''; ?></td>
								<td><?php echo isset($li['email'])?$li['email']:''; ?></td>
								<td><?php echo isset($li['mobile'])?$li['mobile']:''; ?></td>
								<td><?php echo isset($li['gender'])?$li['gender']:''; ?></td>
								<td><?php echo isset($li['age'])?$li['age']:''; ?></td>
								<td><?php echo isset($li['consultation_fee'])?$li['consultation_fee']:''; ?></td>
								<td><?php echo isset($li['discount'])?$li['discount']:''; ?></td>
								<td><?php echo isset($li['tatol_fee'])?$li['tatol_fee']:''; ?></td>
								<td><?php echo isset($li['created_at'])?$li['created_at']:''; ?></td>
								<td><?php if($li['status']==1){ echo "Confirmed";}else if($li['status']==2){ echo "Canceled";}else{ echo "Completed"; } ?></td>
							</tr>
						<?php } ?>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Hospital Name</th>
							<th>Doctor</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile Number</th>
							<th>Gender</th>
							<th>Age</th>
							<th>Consultation fee</th>
							<th>Discount</th>
							<th>Total fee</th>
							<th>Created Date & Time</th>
							<th>Status</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script>

	$(function () {
	    $('#example1').DataTable( {
			"order": [[ 9, "desc" ]]
		} );	   
	  });
</script>