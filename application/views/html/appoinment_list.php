<style>
.panel-default>.panel-heading {
    color: #333;
    background-color: #fff;
    border-color: #ddd;
}
.panel-default>.panel-footer {
    color: #333;
    background-color: #fff;
    border-color: #ddd;	
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

    <section>
		<div class="container mt-4">
	<div class="row mt-4">
		
        <div role="tabpanel">
            <div class="col-sm-3" style="">
                <ul class="nav nav-pills brand-pills nav-stacked" role="">
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('userprofile'); ?>" aria-controls="tab1" role="tab" >Profile</a></li>
                    <li role="presentation" class="brand-nav active"><a href="<?php echo base_url('appointment/index'); ?>" aria-controls="tab2" role="tab" >Upcoming Bookings</a></li>
                    <li role="presentation" class="brand-nav "><a href="<?php echo base_url('appointment/completed'); ?>" aria-controls="tab3" role="tab" >Completed Bookings</a></li>
                    <li role="presentation" class="brand-nav "><a href="<?php echo base_url('appointment/canceled'); ?>" aria-controls="tab4" role="tab" >Cancel Bookings</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('appointment/followup'); ?>" aria-controls="tab5" role="tab">Follow up Remainder</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('newpatient'); ?>" aria-controls="tab5" role="tab">New patient</a></li>
					<li role="presentation" class="brand-nav"><a href="<?php echo base_url('userprofile/logout'); ?>" >Logout</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                  <?php if(isset($a_list ) && count($a_list )>0){ ?>
                    <div role="tabpanel" class="tab-pane active" id="tab2">
                        <fieldset class="scheduler-border">
						<legend class="scheduler-border">Upcoming Bookings</legend>
						<?php foreach($a_list as $li){ ?>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : <?php echo str_pad($li['a_b_id'], 5, "M0000", STR_PAD_LEFT); ?></span> <!--<span class="pull-right site-col"> Distance : <?php //echo number_format((float)$li['distance'], 2, '.', ''); ?> Km</span>--></div>
								<div class="panel-body">
									<div class="col-md-3">
									<?php if($li['dpic']!=''){ ?>
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="<?php echo base_url('assets/profile_pic/'.$li['dpic']); ?>" alt="<?php echo $li['dpic']; ?>">
									<?php }else{ ?>
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="<?php echo base_url('assets/profile_pic/doc.png'); ?>" alt="doctor">
									<?php } ?>
										
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0"><?php echo isset($li['doctorname'])?$li['doctorname']:''; ?></h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> <?php echo isset($li['departmentname'])?$li['departmentname']:''; ?> </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> <?php echo isset($li['hospitalname'])?$li['hospitalname']:''; ?></div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php echo isset($li['course'])?$li['course']:''; ?></div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ <?php echo isset($li['consultation_fee'])?$li['consultation_fee']:''; ?></div>

                                </div>
									</div>
									<div class="col-md-3">
										<a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $li['lat']; ?>,<?php echo $li['lng']; ?>" target="_blank" class="btn btn-success btn-block"> Get Directions</a>
										<?php if($li['status']==1){ ?>
										<a href="javascript:void(0);" onclick="get_appoiment_id('<?php echo $li['a_b_id']; ?>');" type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal"> Cancel Booking</a>
										<?php } ?>
										<div class="mt-2">
										<strong>Discount:</strong>₹ <?php echo isset($li['status'])?$li['discount']:''; ?>
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : <?php echo isset($li['a_date'])?$li['a_date']:''; ?>, <?php echo isset($li['time'])?$li['time']:''; ?></span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: <?php echo isset($li['exc_name'])?$li['exc_name']:''; ?> | <?php echo isset($li['exc_mobile'])?$li['exc_mobile']:''; ?></span></div>
							</div>
						</div>
						<?php } ?>
						
						</fieldset>

                    </div>
					<?php }else{ ?>
						<div>NO DATA FOUND</div>
					<?php } ?>
					 <div class="clearfix">&nbsp;</div>
					 
                  
                </div>
            </div>
        </div>
	</div>
</div>
    </section>
  
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="z-index:2000">
    <div class="modal-dialog" style="z-index:2000">
    
      <!-- Modal content-->
      <div class="modal-content" style="z-index:2000">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title ">Cancel Booking confirmation</h4>
        </div>
        <div class="modal-body">
		<form action="<?php echo base_url('appointment/cancel'); ?>" method="post">
			<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

			<input type="hidden" id="a_b_id" name="a_b_id" value="">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label >Reason</label>
						<textarea  name="reason" class="form-control" placeholder="Enter reason" required></textarea>
					</div>
				</div>
				<div class="col-md-12  text-center">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-warning bnt-success"> ok</button>
				</div>
			</div>
			</form>
        </div>
        
      </div>
      
    </div>
  </div>
  
  <script>
  function get_appoiment_id(id){
	  $('#a_b_id').val(id);	  
  }
  </script>
  
     