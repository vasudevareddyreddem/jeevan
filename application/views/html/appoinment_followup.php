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
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('appointment/completed'); ?>" aria-controls="tab3" role="tab" >Completed Bookings</a></li>
                    <li role="presentation" class="brand-nav "><a href="<?php echo base_url('appointment/canceled'); ?>" aria-controls="tab4" role="tab" >Cancel Bookings</a></li>
                    <li role="presentation" class="brand-nav active"><a href="<?php echo base_url('appointment/followup'); ?>" aria-controls="tab5" role="tab">Follow up Remainder</a></li>
					  <li role="presentation" class="brand-nav"><a href="<?php echo base_url('newpatient'); ?>" aria-controls="tab5" role="tab" >New patient</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('userprofile/logout'); ?>" >Logout</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <?php if(isset($a_list ) && count($a_list )>0){ ?>
                    <div role="tabpanel" class="tab-pane active" id="tab4">
                        <fieldset class="scheduler-border">
						<legend class="scheduler-border">Followup Remainde</legend>
						<?php foreach($a_list as $li){ ?>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Patient Name : <?php echo isset($li['name'])?$li['name']:''; ?></span> <span class="pull-right site-col "> <p id="demo<?php echo $li['a_b_id']; ?>"></p></span></div>
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
										<a href="<?php echo base_url('slotbooking/index/'.base64_encode($li['d_id'])); ?>"class="btn btn-success btn-block"> Book Appointment</a>
										<div class="mt-2">
										<strong>Discount:</strong>₹ <?php echo isset($li['discount'])?$li['discount']:''; ?>
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Follow Date : <?php echo isset($li['follow_up_time'])?$li['follow_up_time']:''; ?></span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Consultation Fee Validity : <span style="color:green"><?php echo date('Y-m-d', strtotime($li['follow_up_time'])); ?>
								</span></span></div>
							</div>
						</div>
						 <script>
							// Set the date we're counting down to
							var countDownDate = new Date("<?php echo isset($li['follow_up_time'])?$li['follow_up_time']:''; ?>").getTime();

							// Update the count down every 1 second
							var x = setInterval(function() {

							  // Get today's date and time
							  var now = new Date().getTime();

							  // Find the distance between now and the count down date
							  var distance = countDownDate - now;

							  // Time calculations for days, hours, minutes and seconds
							  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

							  // Display the result in the element with id="demo"
							  document.getElementById("demo<?php echo $li['a_b_id']; ?>").innerHTML = days + "d " + hours + "h "
							  + minutes + "m " + seconds + "s ";

							  // If the count down is finished, write some text
							  if (distance < 0) {
								clearInterval(x);
								document.getElementById("demo<?php echo $li['a_b_id']; ?>").innerHTML = "EXPIRED";
							  }
							}, 1000);
							</script> 
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
  

 	
     