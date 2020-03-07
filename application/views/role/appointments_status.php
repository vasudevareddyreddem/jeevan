<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Appointment Status
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li><li><a href="<?php echo base_url('appointments'); ?>"><i class="fa fa-list"></i> List</a>
			</li>
			<li class="active">Appointment Status</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
            <div class=" ">
               <div style="padding:20px;">
                  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('appointments/statu_update'); ?>">
                     	<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
					<input type="hidden" name="a_p_id" value="<?php echo isset($a_p_id)?$a_p_id:''; ?>">
					 <div class=" row ">
                        <div class=" col-md-6 ">
                           <div class="form-group ">
                              <label class="col-lg-4 control-label">Type</label>
                              <div class="col-md-8">
                                 <select name="type" class="form-control" onchange="get_upto(this.value);">
									<option value="">Select</option>
									<option value="Completed">Completed</option>
									<option value="Cancel">Cancel</option>									
								 </select>
                              </div>
                           </div>
						   <span id="regions_ids" style="display:none;">
							   <div class="form-group ">
								  <label class="col-lg-4 control-label">Reason</label>
								  <div class="col-md-8">
									 <input type="text" class="form-control" name="region" placeholder="Enter Reason" />
								  </div>
							   </div>
						   </span>
						   <span id="fellowup_ids" style="display:none;">
							   <div class="form-group ">
								  <label class="col-lg-4 control-label">Fellow Up days</label>
								  <div class="col-md-8">
									 <input type="text" class="form-control" name="fellowup_days" placeholder="Enter Fellow Up days" />
								  </div>
							   </div>
						   </span>
                          
						  
						   
                        </div>
						
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                           <div class="col-lg-6 text-center">
                              <button type="submit" class="btn btn-primary  " name="Update" value="Update">Update</button>
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
	<!-- /.content -->
</div>
<script>
function get_upto(val){	
	if(val=='Completed'){
		$('#fellowup_ids').show();
		$('#regions_ids').hide();
	}else if(val=='Cancel'){
		$('#fellowup_ids').hide();
		$('#regions_ids').show();
	}	
}
</script>
<script type="text/javascript">
   $(document).ready(function() {
   	 $('#defaultForm').bootstrapValidator({
   		fields: {
               type: {
                   validators: {
						notEmpty: {
							message: 'Type is required'
						}
					}
               },
			   region: {
                   validators: {
						notEmpty: {
							message: 'Region is required'
						}
					}
               },fellowup_days: {
                   validators: {
						notEmpty: {
							message: 'Fellow Up days is required'
						},
						regexp: {
						regexp:  /^[0-9]+$/,
						message:'Fellow Up days must be digits only'
						}
					}
               }		   
           
           }
       });
   
   });
</script>
