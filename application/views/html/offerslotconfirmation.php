<style>
/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + div {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + div {
  outline: 2px solid #4cb235;
}
.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
     margin-top: 4px !important; 
	 
}
.modal-backdrop {
  z-index: -1;
}
.modal-header {
    min-height: 16.43px;
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
    background: #4cb235;
	color:#fff;
}
.modal-header h4 {
   
	color:#fff;
}
</style>
<div class="header-space"></div>

   <section class="page-header">
   <div class="bg-f5f5f5">
      <br>
      <div class="container">
         <div class="row">
            <div class="col-md-2 col-md-offset-3">
               <?php if($cam_details['profile_pic']!=''){ ?>
               <img src="<?php echo base_url('assets/profile_pic/'.$cam_details['profile_pic']); ?>" class="img-responsive img-thumbnail">
               <?php }else{ ?>
               <img src="<?php echo base_url('assets/profile_pic/doc.png'); ?>">
               <?php } ?>							
            </div>
            <div class="col-md-4">
               <div class="team-content">
                  <h3 class="title m-0"><?php echo isset($cam_details['name'])?$cam_details['name']:''; ?></h3>
                  <div class="post "><?php echo isset($cam_details['department'])?$cam_details['department']:''; ?> </div>
                  <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo isset($cam_details['course'])?$cam_details['course']:''; ?></div>
                  <div class="post mt-2"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo isset($cam_details['m_in_t'])?$cam_details['m_in_t']:''; ?> - <?php echo isset($cam_details['m_out_t'])?$cam_details['m_out_t']:''; ?>
                     <br>
                     <span class="ml-5"> <?php echo isset($cam_details['eve_in_t'])?$cam_details['eve_in_t']:''; ?> - <?php echo isset($cam_details['eve_out_t'])?$cam_details['eve_out_t']:''; ?></span>
                  </div>
                  
               </div>
            </div>
			
         </div>
      </div>
      <div class="clearfix">&nbsp;</div>
   </div>
</section>
    <section>
		<div class="container">
		
		<form id="book_confirm" method="post" action="<?php echo base_url('slotbooking/confirmpost'); ?>">
		<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

		<div class="row">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">Who is the Patient</legend>
			<div class="col-md-6">
				<div class="form-group">
					<label >Who is the Patient</label>
						<select class="form-control" name="whoisthe_patient" onchange="get_patient_details(this.value);">
							<option value="">Select</option>
							<?php if(isset($new_patient_list) && count($new_patient_list)>0){ ?>
							<?php foreach($new_patient_list as $li){ ?>
								<option value="<?php echo $li['f_m_id']; ?>"><?php echo $li['name']; ?></option>
							<?php } ?>
							<?php }else{ ?>
								<option value="">Click Add New Patient</option>
							<?php } ?>
						</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >&nbsp;</label>
					<div>
						<a type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal">Add New Patient</a>
						</div>
				</div>
			</div>
		</fieldset>
				<?php  $sl_d=$this->session->userdata('slot_b_d');

						//echo '<pre>';print_r($sl_d);exit;
						?>

		<fieldset class="scheduler-border">
			<legend class="scheduler-border">Add Patient Details</legend>
			<input type="hidden" name="a_date" value="<?php echo isset($sl_d['of_date'])?$sl_d['of_date']:''; ?>">
			<input type="hidden" name="time" value="<?php echo isset($sl_d['slot_time'])?$sl_d['slot_time']:''; ?>">
			<input type="hidden" name="d_id" value="<?php echo isset($d_id)?$d_id:''; ?>">
			<input type="hidden" name="c_id" value="<?php echo isset($c_id)?$c_id:''; ?>">
			<input type="hidden" name="h_id" value="<?php echo isset($cam_details['h_id'])?$cam_details['h_id']:''; ?>">

			<div class="col-md-6">
				<div class="form-group">
					<label >Date and Time</label>
						<input type="text" class="form-control" value="<?php echo isset($sl_d['of_date'])?$sl_d['of_date']:''; ?> ,<?php echo isset($sl_d['slot_time'])?$sl_d['slot_time']:''; ?>" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Name of the Patient</label>
						<input type="text" name="s_name" id="pname" class="form-control" value="" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Email Id</label>
						<input type="text" id="pemail" name="s_email" class="form-control" value="" >
				</div>
			</div>	
			<div class="col-md-6">
				<div class="form-group">
					<label >Mobile No</label>
						<input type="text" id="pmobile" name="s_mobile" class="form-control" value="" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Age</label>
						<input type="text" id="page" name="s_age" class="form-control" value="" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Gender</label>
						<input type="text" id="pgender" name="s_gender" class="form-control" value="" >
				</div>
			</div>	
			<div class="col-md-6 col-md-offset-6">
				 <table class="table table-bordered ">
								<?php if(isset($cam_test_details) && count($cam_test_details)>0){ ?>
									<?php $t_amt='';foreach($cam_test_details as $tli){ ?>
										<tr>
											<td><?php echo $tli['t_name']; ?></td>
											<td>₹ <?php echo $tli['t_amt']; ?></td>
										</tr>
									<?php $t_amt +=$tli['t_amt'];
									
									} ?>
								<?php } ?>
									<tr>
										<th>consultation fee</th>
										<th>₹ <?php echo isset($t_amt)?$t_amt:''; ?></th>
									</tr>
									<?php 
									$percentage =isset($cam_details['discount'])?$cam_details['discount']:'0';;
									$totalWidth =$t_amt;
									$discount_amt = ($percentage / 100) * $totalWidth;
									
									?>
									<tr>
										<th>Discount</th>
										<th>₹ <?php echo isset($discount_amt)?$discount_amt:''; ?></th>
									</tr>
									
									<tr>
										<th>Grand Total</th>
										<?php $gtotal= isset($t_amt)?(($t_amt)-($discount_amt)):''; ?>
										<th>₹ <?php echo isset($gtotal)?$gtotal:''; ?></th>
									</tr>
									
								</table>
					<input type="hidden" name="consultation_fee" value="<?php echo isset($t_amt)?$t_amt:''; ?>">
					<input type="hidden" name="discount" value="<?php echo isset($discount_amt)?$discount_amt:''; ?>">
					<input type="hidden" name="tatol_fee" value="<?php echo isset($gtotal)?$gtotal:''; ?>">
				<p>Booking is FREE. All fees are payable at Hospital</p>
				<div class="checkbox form-group">
				  <label>
				  <input style="width: 20px; height: 20px; margin-left:-20px;" type="checkbox" name="confirmattion" value="1">  &nbsp; 
				  </label>Booking this appointment  I agree to the <a href="<?php echo base_url('termsandconditions'); ?>" target="_blank"> T&C </a>
				</div>
			</div>
			
			
		</fieldset>
		</div>
		<div class="py-4 text-center">
			<button type="submit"  class="btn btn-success">Confirm Booking </button>
		</div>
		</form>
		</div>
    </section>
  
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="z-index:2000">
    <div class="modal-dialog" style="z-index:2000">
    
      <!-- Modal content-->
      <div class="modal-content" style="z-index:2000">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title ">Add New Patient Details</h4>
        </div>
        <div class="modal-body">
		<form action="<?php echo base_url('offer/slotconfirmation'); ?>" method="post">
		<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

		<input type="hidden" name="all_data" value="">
		<input type="hidden" name="c_id" value="<?php echo isset($c_id)?$c_id:''; ?>">
		<input type="hidden" name="d_id" value="<?php echo isset($d_id)?$d_id:''; ?>">
			<div class="row">
				
			<div class="col-md-6">
				<div class="form-group">
					<label >Name of the Patient</label>
						<input type="text"  name="name" class="form-control" placeholder="Enter Patient Name" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Email Id</label>
					<input type="text" name="email" class="form-control" placeholder="Enter email Address" >
				</div>
			</div>	
			<div class="col-md-6">
				<div class="form-group">
					<label >Mobile No</label>
					<input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Age</label>
					<input type="text" name="age" class="form-control" placeholder="Enter Age" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Select Gender</label>
					<select class="form-control" name="gender">
						<option value=""> select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>	
			<div class="col-md-12  text-center">
				<button type="submit" class="btn btn-warning bnt-success"> Add Patient</button>
			</div>
			</div>
			</form>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <script>
  function get_patient_details(id){
	  if(id!=''){
			jQuery.ajax({
   					url:'<?php echo base_url('slotbooking/get_new_patient_details'); ?>',
   					data: {
   						npid: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						if(data.msg==1){
							$("#pname").val(data.name);
							$("#pemail").val(data.email);
							$("#pmobile").val(data.mobile);
							$("#page").val(data.age);
							$("#pgender").val(data.gender);
						}
					}
   				});
   			}
		  
  }
  </script>
  <script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#book_confirm').bootstrapValidator({
		fields: {
            whoisthe_patient: {
                validators: {
                    notEmpty: {
                        message: 'Who is the Patient is required'
                    }
                }
            },
			confirmattion: {
                validators: {
                    notEmpty: {
                        message: 'I Agree Terms and Conditions is required'
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
	
       