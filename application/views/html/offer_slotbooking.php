

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
</style>
<div class="header-space"></div>
<section class="page-header">
   <div class="bg-f5f5f5">
      <br>
      <div class="container">
         <div class="row">
            <div class="col-md-2 col-md-offset-1">
               <?php if($cam_details['profile_pic']!=''){ ?>
               <img src="<?php echo base_url('assets/profile_pic/'.$cam_details['profile_pic']); ?>" class="img-responsive img-thumbnail">
               <?php }else{ ?>
               <img src="<?php echo base_url('assets/profile_pic/doc.png'); ?>">
               <?php } ?>							
            </div>
            <div class="col-md-3">
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
			<div class="col-md-4">
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
										<th>₹ <?php echo isset($t_amt)?(($t_amt)-($discount_amt)):''; ?></th>
									</tr>
									
								</table>
            </div>
         </div>
      </div>
      <div class="clearfix">&nbsp;</div>
   </div>
</section>
<section>
   <div class="container">
   
    <form id=""  onsubmit="return check_validation();"  action="<?php echo base_url('offer/slotconfirmation'); ?>" method="POST">
	<?php $csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
					); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

	<input type="hidden" name="c_id" value="<?php echo isset($cam_details['c_id'])?$cam_details['c_id']:''; ?>">
	<input type="hidden" name="d_id" value="<?php echo isset($cam_details['doc_id'])?$cam_details['doc_id']:''; ?>">
	<input type="hidden" name="of_date" value="<?php echo date('Y-m-d', strtotime(isset($cam_details['date'])?$cam_details['date']:'')); ?>">
	<input type="hidden" name="procedure" value="Consultation">
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
                        message: 'Purpose of Vist is required'
                    }
                }
            }
        }
    });


});
</script>

