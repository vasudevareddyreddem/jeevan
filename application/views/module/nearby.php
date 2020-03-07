<div class="content-wrapper">
	<section class="content-header mb-4">
	<h1> Nearby Distance </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Nearby Distance</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('module/updatenearby'); ?>" autocomplete="off">
								<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
							<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

							<div class="row">
							
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Distance kM</label>
									<div class="col-md-8">
										<input type="text" class="form-control" name="km" value="<?php echo isset($nearby_di['km'])?$nearby_di['km']:''; ?>" placeholder="Enter Nearby KM" />
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