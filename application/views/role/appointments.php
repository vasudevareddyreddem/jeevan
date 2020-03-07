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
							<th>Date</th>
							<th>TIme</th>
							<th>Consultation fee</th>
							<th>Discount</th>
							<th>Total fee</th>
							<th>Status</th>
							<th>Action</th>
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
								<td><?php echo isset($li['a_date'])?$li['a_date']:''; ?></td>
								<td><?php echo isset($li['time'])?$li['time']:''; ?></td>
								<td><?php echo isset($li['consultation_fee'])?$li['consultation_fee']:''; ?></td>
								<td><?php echo isset($li['discount'])?$li['discount']:''; ?></td>
								<td><?php echo isset($li['tatol_fee'])?$li['tatol_fee']:''; ?></td>
								<td><?php if($li['status']==1){ echo "Confirmed";}else if($li['status']==2){ echo "Canceled";}else{ echo "Completed"; } ?></td>
								<td>
								<a href="<?php echo base_url('appointments/status/'.base64_encode($li['a_b_id'])); ?>">View</a> 
								<?php if($li['receiving_time']==''){ ?>
								&nbsp; |&nbsp;
								<a href="<?php echo base_url('appointments/received/'.base64_encode($li['a_b_id'])); ?>">Received</a>
								<?php } ?>								
								</td>
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
							<th>Date</th>
							<th>TIme</th>
							<th>Consultation fee</th>
							<th>Discount</th>
							<th>Total fee</th>
							<th>Status</th>
							<th>Action</th>
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
			"order": [[ 7, "desc" ]]
		} );	   
	  });
</script>