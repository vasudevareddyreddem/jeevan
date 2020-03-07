<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
     Module
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url('module'); ?>"><i class="fa fa-dashboard"></i> List</a></li>
			<li class="active">Module edit</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('module/editpost'); ?>" autocomplete="off">
						<input  type="hidden" name="m_id"  value="<?php echo isset($m['m_id'])?$m['m_id']:'';?>">
							<div class=" row ">
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Module name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="m_name" value="<?php echo isset($m['m_name'])?$m['m_name']:'';?>" placeholder="Enter Module name" />
									</div>
								</div> 
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="col-lg-6 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Update</button>
								</div>
							</div>
						</form>
						
						
						<div class="clearfix">&nbsp;</div>
					</div>
				</div>
				<!-- /.box -->
			</div>
		</div>
		<!--/.col (right) -->
</div>
<!-- /.row -->
</section> 
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#defaultForm').bootstrapValidator({
			fields: {
	            m_name: {
	                validators: {
	                    notEmpty: {
	                        message: 'Module name is required'
	                    }
	                }
	            }
	        }
	    });
	});
</script>