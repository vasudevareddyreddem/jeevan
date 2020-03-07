<div class="content-wrapper">
	<section class="content-header mb-4">
	<h1> Module menu </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Module menu</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('module/menuaddpost'); ?>" autocomplete="off">
							<div class="row">
							<div class="col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Module Name</label>
									<div class="col-md-8">
										<select class="form-control" name="m_name">
											<option value="">Select</option>
											<?php if(isset($m_list) && count($m_list)>0){ ?>
												<?php foreach($m_list as $li){ ?>
													<option value="<?php echo $li['m_id']; ?>"><?php echo $li['m_name']; ?></option>
												<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div> 
							</div>
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Module menu name</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="m_menu_name" value="" placeholder="Enter Module menu name" />
									</div>
								</div> 
							</div>
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Module menu url</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="m_menu_url" value="" placeholder="Enter Module menu url" />
									</div>
								</div> 
							</div>
							<div class="clearfix">&nbsp;</div>
							<div class="form-group">
								<div class="col-lg-6 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Add</button>
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
	            },m_n_name: {
	                validators: {
	                    notEmpty: {
	                        message: 'Module menu name is required'
	                    }
	                }
	            },m_menu_url: {
	                validators: {
	                    notEmpty: {
	                        message: 'Module menu url is required'
	                    }
	                }
	            }
	        }
	    });
	});
</script>