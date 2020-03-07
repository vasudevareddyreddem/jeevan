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
   outline: 2px solid #003f7f;
   }
</style>
<div class="header-space"></div>
<section class="page-header">
   <div class="bg-f5f5f5">
      <br>
      <div class="container">
         <div class="row">
            <div class="col-md-2 col-md-offset-3">
               <?php if($d_details['profile_pic']!=''){ ?>
               <img src="<?php echo base_url('assets/profile_pic/'.$d_details['profile_pic']); ?>" class="img-responsive img-thumbnail">
               <?php }else{ ?>
               <img src="<?php echo base_url('assets/profile_pic/doc.png'); ?>">
               <?php } ?>							
            </div>
            <div class="col-md-4">
               <div class="team-content">
                  <h3 class="title m-0"><?php echo isset($d_details['name'])?$d_details['name']:''; ?></h3>
                  <div class="post "><?php echo isset($d_details['department'])?$d_details['department']:''; ?> </div>
                  <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo isset($d_details['course'])?$d_details['course']:''; ?></div>
                  <div class="post mt-2"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo isset($d_details['mor_f_t'])?$d_details['mor_f_t']:''; ?> - <?php echo isset($d_details['mor_t_t'])?$d_details['mor_t_t']:''; ?>
                     <br>
                     <span class="ml-5"> <?php echo isset($d_details['aft_f_t'])?$d_details['aft_f_t']:''; ?> - <?php echo isset($d_details['aft_t_t'])?$d_details['aft_t_t']:''; ?></span>
                  </div>
                  <div class="post mt-2"> <b>consultation fee :</b> ₹ <?php echo isset($d_details['c_fee'])?$d_details['c_fee']:''; ?></div>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix">&nbsp;</div>
   </div>
</section>
<section>
   <div class="container">
   
    <form id=""  onsubmit="return check_validation();" action="<?php echo base_url('slotbooking/confirmation'); ?>" method="POST">
		<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

	<input type="hidden" name="d_id" value="<?php echo isset($d_details['d_id'])?$d_details['d_id']:''; ?>">
      <div class="row">
         <div class="">
            <div class="col-md-4 col-md-offset-4 py-4">
               <div class="form-group">
                  <label >Select your Purpose of Vist:</label>
                  <select class="form-control" name="procedure" id="procedure" >
                     <option value="">Select</option>
                     <option value="Consultation">Consultation</option>
					 <?php if(isset($slot_check) && count($slot_check)>0){ ?>
                     <option value="Follow Up">Follow Up</option>
					 <?php } ?>
                  </select>
               </div>
            </div>
            <div class="col-md-12 py-4" style="display:flex;justify-content:space-evenly;">
              
			   <?php foreach($slot_date as $tli){ ?>
				   <label>
					  <input type="radio" onclick="get_time_slots('<?php echo isset($d_details['d_id'])?$d_details['d_id']:''; ?>','<?php echo $tli['date']; ?>');" name="s_date" value="<?php echo $tli['date']; ?>" >
					  <div class="slot-days">
						 <?php echo date("d-m-Y", strtotime($tli['date'])); ?>
						 <div class="green-col">
							<?php echo $tli['availablity']; ?>
						 </div>
					  </div>
				   </label>
			   <?php } ?>
              
            </div>
         </div>
      </div>
     
         <div class="row">
		 <span id="appoinment_filed_booking">
            <fieldset class="scheduler-border">
				<?php if(isset($mrng_times) && count($mrng_times)>0){ ?>
               <legend class="scheduler-border">Start Time</legend>
               <div class="row">
                  <div class="col-md-1" style="width:100px;padding:0">
                     <img style="width:50px;float:right" src="<?php echo base_url(); ?>assets/front/img/moning.png" alt="mrng" class="img-responsive">
                  </div>
                  <div style="margin-top:12px;padding:0" class="col-md-10 text-left">
                     <h4>Morning <?php echo count($mrng_times); ?> Slots</h4>
                  </div>
               </div>
			   
               <div class="col-md-12" style="">
			   <?php foreach($mrng_times as $sli){ ?>
					   <?php if($sli['status']!=0){ ?>
						  <label class="col-md-1.5">
							 <input type="radio" id="aslot_time" name="aslot_time" value="<?php echo $sli['time']; ?>" >
							 <div class="slot-time-days-comp">
								<?php echo $sli['time']; ?>
							 </div>
						  </label>
					   <?php }else if(date("h:i A")>$sli['time']){?>
						    <label class="col-md-1.5">
							 <input type="radio" id="aslot_time" name="aslot_time" value="<?php echo $sli['time']; ?>" >
							 <div class="slot-time-days-comp">
								<?php echo $sli['time']; ?>
							 </div>
						  </label>
					   <?php }else{ ?>
						<label class="col-md-1.5">
							 <input type="radio" id="slot_time" name="slot_time" value="<?php echo $sli['time']; ?>" >
							 <div class="slot-days-avail">
								<?php echo $sli['time']; ?>
							 </div>
						  </label>
					   <?php } ?>
			   <?php } ?>
               
               </div>
			   
			   <?php } ?>
               <div class="clearfix" style="border-bottom:1px solid #ddd;margin:10px 0px;">&nbsp;</div>
               <div class="row">
                  <div class="col-md-1" style="width:100px;padding:0">
                     <img style="width:40px;float:right" src="<?php echo base_url(); ?>assets/front/img/evng.png" alt="mrng" class="img-responsive">
                  </div>
                  <div style="margin-top:8px;padding:0" class="col-md-10 text-left">
                     <h4>Evening <?php echo count($after_times); ?> Slots</h4>
                  </div>
               </div>
               <div class="col-md-12" style="">
			   <?php foreach($after_times as $ali){ ?>
					   <?php if($ali['status']==1){ ?>
						   <label class="col-md-1.5">
							 <input type="radio" id="aslot_time" name="aslot_time" value="<?php echo $ali['time']; ?>">
							 <div class="slot-time-days-comp">
								<?php echo $ali['time']; ?>
							 </div>
						  </label>
					   <?php }else{ ?>
						  <label class="col-md-1.5">
							 <input type="radio" id="slot_time" name="slot_time" value="<?php echo $ali['time']; ?>" >
							 <div class="slot-days-avail">
								<?php echo $ali['time']; ?>
							 </div>
						  </label>
					   <?php } ?>
				<?php } ?>
                
               </div>
            </fieldset>
			</span>
         </div>
         <div class="py-4 text-center">
            <button type="submit" id="" class="btn btn-warning">Book Appointment</button>
         </div>
      </form>
   </div>
</section>

<script>
function check_validation() {
	if(document.getElementById("procedure").value==''){
	  alert('Purpose of Vist is required');
         return false;	
	}
	if ($('input[name="s_date"]:checked').length == 0) {
         alert('Please select at least date');
         return false; 
		 }
		 if ($('input[name="slot_time"]:checked').length == 0) {
         alert('Please select at least one time');
         return false; 
		 }
    }
function get_time_slots(d_id,date){
	if(d_id!='' && date!=''){
		jQuery.ajax({
					url: "<?php echo base_url('slotbooking_ajax/get_slots_details');?>",
					data: {
						did: d_id,
						sdate: date,
					},
					dataType: 'HTML',
					type: 'POST',
					success: function (data) {
							 $('#appoinment_filed_booking').empty();						
							 $('#appoinment_filed_booking').append(data);						
						
					}
			});
	}	
}
</script>
<script type="text/javascript">
$(document).ready(function() {
   
    $('#slot_booking').bootstrapValidator({
		fields: {
            procedure: {
                validators: {
                    notEmpty: {
                        message: 'Purpose of Vist is required'
                    }
                }
            }, s_date: {
                validators: {
                    notEmpty: {
                        message: 'Date is required'
                    }
                }
            }
        }
    });


});
</script>

