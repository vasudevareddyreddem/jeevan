<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Role List
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Role List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-header bg-primary">
				<div class="col-md-6">
					<div class="">	<a class="btn btn-default st-btn add-student-btn" href="<?php echo base_url('user/roles'); ?>"><i class="fa fa-plus"></i> Add Role</a>
						
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Module Name</th>
							<th>Role Name</th>
							<th>Menu List</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php if(isset($r_list) && count($r_list)>0){ ?>
						<?php foreach($r_list as $li){ ?>
							<tr>
								<td><?php echo isset($li['mname'])?$li['mname']:''; ?></td>
								<td><?php echo isset($li['role_name'])?$li['role_name']:''; ?></td>
								<td><?php echo isset($li['options'])?$li['options']:''; ?></td>
								<td><?php if($li['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
								<td> 
									<a href="<?php echo base_url('user/rolestatus/'.base64_encode($li['r_n_id']).'/'.base64_encode($li['status'])); ?>" class="confirmation"><i class="fa fa-pencil btn btn-success"></i></a>
									<a href="<?php echo base_url('user/roleedit/'.base64_encode($li['r_n_id'])); ?>"  data-toggle="tooltip" title="Edit"><i class="fa fa-edit btn btn-warning"></i></a>
									<a href="<?php echo base_url('user/roledelete/'.base64_encode($li['r_n_id'])); ?>" data-toggle="tooltip" title="Delete" class="confirmation"><i class="fa fa-trash btn btn-danger"></i></a>
								</td>
								
							</tr>
						<?php } ?>
					<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th>Module Name</th>
							<th>Role Name</th>
							<th>Menu List</th>
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