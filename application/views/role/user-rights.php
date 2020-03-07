<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
     User Rights
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Rights</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('user/addrights'); ?>">
							
						<div class=" row ">
							<div class=" col-md-6 ">
								 <div class="form-group ">
									<label class="col-lg-4 control-label">User name</label>
									<div class="col-md-8">
										<select class="form-control" name="a_id" id="a_id">
											<option value="">Select</option>
											<?php if(isset($u_list) && count($u_list)>0){ ?>
											<?php foreach($u_list as $li){ ?>
												<option value="<?php echo $li['a_id']; ?>"><?php echo $li['name']; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div> 
							<div class="form-group">
							<label class="col-lg-4 control-label">Module name</label>
							<div class="col-lg-8">
							<select class="form-control " name="m_name" onchange="get_role_options(this.value);" data-placeholder="Select Module name" >
									<option value="">Select</option>
									<?php if(isset($m_list) && count($m_list)>0){ ?>
									<?php foreach($m_list as $li){ ?>
										<option value="<?php echo $li['m_id']; ?>"><?php echo $li['m_name']; ?></option>
									<?php } ?>
									<?php } ?>
							</select>
						  </div>
						  </div>
						  <div class="form-group">
							<label class="col-lg-4 control-label">Menu Options</label>
							<div class="col-lg-8">
							<div class="" id="multi_dynamic">
							</div>

						  </div>
						  </div>
							
						</div>
						 
				
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-6 text-center">
							
									<button type="submit" class="btn btn-primary  " name="signup" value="Sign up">Add User Rights</button>
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
function get_role_options(id){
	jQuery.ajax({
			url: "<?php echo base_url('user/get_menu_options');?>",
			data: {
				m_id: id,
				a_id: $('#a_id').val(),
			},
			dataType: 'html',
			type: 'POST',
			success: function (data) {
					$('#multi_dynamic').empty();
					$('#multi_dynamic').append(data);
			}
	});
}
   $(document).ready(function() {
   	 $('#defaultForm').bootstrapValidator({
   		fields: {
               a_id: {
                   validators: {
					notEmpty: {
						message: 'User is required'
					}
				}
               },
			   m_name: {
                   validators: {
					notEmpty: {
						message: 'Module Name is required'
					}
				}
               },
              
			   'role_options[]': {
                    validators: {
						 notEmpty: {
							message: 'Roll name is required'
						}
					}
               }
           
           }
       });
   
   });
</script>


