<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
			Edit Roles
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			<li><a href="<?php echo base_url('user/roleslist'); ?>"><i class="fa fa-dashboard"></i> Role name list</a>
			<li><a href="#"><i class="fa fa-dashboard"></i> Edit</a>
			</li>
			<li class="active">Edit role</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('user/roleseditpost'); ?>">
							<input  type="hidden" name="r_n_id" value="<?php echo isset($r['r_n_id'])?$r['r_n_id']:''; ?>">
						<div class=" row ">
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">Module name</label>
									<div class="col-md-8">
											<select class="form-control" name="m_name" onchange="get_options(this.value);">
												<option value="">Select</option>
												<?php if(isset($m_list) && count($m_list)>0){ ?>
													<?php foreach($m_list as $li){ ?>
														<?php if($r['m_id']==$li['m_id']){ ?>
															<option selected value="<?php echo $li['m_id']; ?>"><?php echo $li['m_name']; ?></option>
														<?php }else{ ?>
															<option value="<?php echo $li['m_id']; ?>"><?php echo $li['m_name']; ?></option>
														<?php } ?>
													<?php } ?>
												<?php } ?>
											</select>
									</div>
								</div> 
								<?php 
									if(isset($r['option']) && count($r['option'])>0){
											foreach($r['option'] as $list){
												$r_ids[]=$list['r_option_id'] ;
											}
										}else{
											$r_ids=array();
										}
								?>
								<div class="form-group">
									<label class="col-lg-4 control-label">Menu Option</label>
									<div class="col-lg-8">
										<select name="role_option[]" id="role_option" class="form-control select2" multiple="multiple" data-placeholder="Select Roll" >
										  <option value="">Select</option>
										  <?php if(isset($op_list) && count($op_list)>0){ ?>
											  <?php foreach($op_list as $li){ ?>
												<?php if (in_array($li['m_m_id'], $r_ids)) {  ?>
													<option  selected value="<?php echo $li['m_m_id']; ?>"><?php echo $li['m_menu_name']; ?></option>
												  <?php }else {  ?>
													<option value="<?php echo $li['m_m_id']; ?>"><?php echo $li['m_menu_name']; ?></option>
												 <?php  }  ?>	
												<?php } ?>
											<?php } ?>
										</select>
									</div>
							   </div>
							   <div class="form-group">
									<label class="col-lg-4 control-label">Role name</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="role_name" value="<?php echo isset($r['role_name'])?$r['role_name']:''; ?>" placeholder="Enter Role name" />
									</div>
							   </div>
							 
							
						</div>
						 
				
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-6 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Update Role</button>
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

</div>

<script type="text/javascript">
function get_options(id){
	jQuery.ajax({
					url: "<?php echo base_url('user/get_module_options');?>",
					data: {
						m_id: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
							$('#role_option').empty();
						    $('#role_option').append('<option value="" disabled>select</option>');
						if(data.msg==1){
							$.each(data.list, function(i, product) {
							$('#role_option').append('<option value="'+product.m_m_id+'">'+product.m_menu_name+'</option>').trigger("chosen:updated");
							});
						}
					}
			});
}
	$(document).ready(function() {
		$('#defaultForm').bootstrapValidator({
				fields: {
					m_name: {
						validators: {
							notEmpty: {
								message: 'Module name is required'
							}
						}
					},
					'role_option[]': {
						validators: {
							notEmpty: {
								message: 'Menu Option is required'
							}
						}
					},
					role_name: {
						validators: {
							notEmpty: {
								message: 'Role Name is required'
							}
						}
					},
	            captcha: {
	                validators: {
	                    callback: {
	                        message: 'Wrong answer',
	                        callback: function(value, validator) {
	                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	                            return value == sum;
	                        }
	                    }
	                }
	            }
	        }
	    });
	});
</script>
