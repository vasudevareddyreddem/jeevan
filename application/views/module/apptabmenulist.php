<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       App Menu Tab List
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">App Menu Tab List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Icon</th>
							<th>Offer Percentage</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($t_m as $li){ ?>
						<tr>
							<td><?php echo isset($li['name'])?$li['name']:''; ?></td>
							<td><img src="<?php echo base_url('assets/cities/'.$li['icon']); ?>" height="50px;" width="50px;">
							<td><?php echo isset($li['offer'])?$li['offer']:''; ?></td>
							<td><?php if($li['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
							<td> 
								<a href="<?php echo base_url('module/apptabmenustatus/'.base64_encode($li['t_id']).'/'.base64_encode($li['status'])); ?>" class="confirmation"><i class="fa fa-pencil btn btn-success"></i></a>
								<a href="<?php echo base_url('module/apptabmenuedit/'.base64_encode($li['t_id'])); ?>"  data-toggle="tooltip" title="Edit"><i class="fa fa-edit btn btn-warning"></i></a>
							</td>							
						</tr>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Icon</th>
							<th>Offer Percentage</th>
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
$(document).ready(function() {
      $('.confirmation').on('click', function() {
        return confirm('Are you sure?');
      });
    });
	$(function () {
	    $("#example1").DataTable();	   
	  });
</script>