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
</style>
<div class="header-space"></div>

    <section>
		<div class="container mt-4">
	<div class="row mt-4">
		
        <div role="tabpanel">
            <div class="col-sm-3" style="">
                <ul class="nav nav-pills brand-pills nav-stacked" role="">
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('userprofile'); ?>" aria-controls="tab1" role="tab" >Profile</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('appointment/index'); ?>" aria-controls="tab2" role="tab" >Upcoming Bookings</a></li>
                    <li role="presentation" class="brand-nav active"><a href="<?php echo base_url('appointment/completed'); ?>" aria-controls="tab3" role="tab" >Completed Bookings</a></li>
                    <li role="presentation" class="brand-nav "><a href="<?php echo base_url('appointment/canceled'); ?>" aria-controls="tab4" role="tab" >Cancel Bookings</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('appointment/followup'); ?>" aria-controls="tab5" role="tab" >Follow up Remainder</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('newpatient'); ?>" aria-controls="tab5" role="tab">New patient</a></li>
					<li role="presentation" class="brand-nav"><a href="<?php echo base_url('userprofile/logout'); ?>" >Logout</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <?php if(isset($a_list ) && count($a_list )>0){ ?>
                    <div role="tabpanel" class="tab-pane active" id="tab4">
                        <fieldset class="scheduler-border">
						<legend class="scheduler-border">Completed Bookings</legend>
						<?php foreach($a_list as $li){ ?>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : <?php echo str_pad($li['a_b_id'], 5, "M0000", STR_PAD_LEFT); ?></span> <span class="pull-right site-col"> Distance : <?php echo number_format((float)$li['distance'], 2, '.', ''); ?> Km</span></div>
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
										<div class="mt-2">
										<strong>Discount:</strong>₹ <?php echo isset($li['discount'])?$li['discount']:''; ?>
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
	
  

	
     