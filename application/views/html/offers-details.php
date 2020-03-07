<div class="header-space"></div>

    <section class="page-header">
        <div class="bg-f5f5f5">
		<br>
            <div class="container">
					 <div class="row">
						 <?php if(isset($h_imgs) && count($h_imgs)>0){ ?>
							<div class="col-md-4">
							   <div id="myCarousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								  <?php $cnt=1;foreach($h_imgs as $li){ ?>
										<?php if($cnt==1){ ?>
									 <li data-target="#myCarousel" data-slide-to="<?php echo $cnt; ?>" class="active"></li>
									<?php }else{ ?>
									 <li data-target="#myCarousel" data-slide-to="<?php echo $cnt; ?>"></li>
									<?php } ?>
									<?php $cnt++;} ?>
								
								  </ol>
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner doctors-height">
								  <?php $cnt=1;foreach($h_imgs as $li){ ?>
										<?php if($cnt==1){ ?>
											 <div class="item active">
												<img class="img-thumbnail" src="<?php echo base_url('assets/hospital_img/'.$li['img_name']); ?>" alt="<?php echo $li['org_img_name']; ?>" style="width:100%;">
											 </div>
										<?php }else{ ?>
											<div class="item">
											<img class="img-thumbnail" src="<?php echo base_url('assets/hospital_img/'.$li['img_name']); ?>" alt="<?php echo $li['org_img_name']; ?>" style="width:100%;">
										 </div>
										<?php } ?>
								  <?php $cnt++;} ?>
								  
								  </div>
								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								  <span class="glyphicon glyphicon-chevron-left"></span>
								  <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" data-slide="next">
								  <span class="glyphicon glyphicon-chevron-right"></span>
								  <span class="sr-only">Next</span>
								  </a>
							   </div>
							</div>
							<?php } ?>
							  <div class="col-md-5 m-t-10 hospital-deatails">
							   <h4><?php echo isset($h_details['name'])?$h_details['name']:''; ?></h4>
							   <div>
								  <strong> Doctors:</strong> <?php echo isset($h_doctors)?count($h_doctors):''; ?>
							   </div>
							   <div>
								  <strong> Services:</strong> <?php echo isset($h_details['service'])?$h_details['service']:'0'; ?>+
							   </div>
							   <div>
								  <strong> loaction:</strong> <?php echo isset($h_details['address'])?$h_details['address']:'0'; ?>
							   </div>
							   <div>
								  <strong> Contact:</strong> <?php echo isset($h_details['contact_num'])?$h_details['contact_num'].' ,':''; ?>  <?php echo isset($h_details['emergency_contact'])?$h_details['emergency_contact']:''; ?>
							   </div>
							   <div>
								  <strong> Distance:</strong> <?php echo isset($h_details['distance'])?$h_details['distance']:'0'; ?> Km  
							   </div>
							   <div>
								  <strong> Directions:</strong> <a href="https://www.google.com/maps/dir/?api=1&origin=<?php echo $this->session->userdata('lat_add'); ?>,<?php echo $this->session->userdata('long_add'); ?>&destination=<?php echo $h_details['lat']; ?>,<?php echo $h_details['lng']; ?>" target="_blank" class="btn btn-theme" style="font-size:10px;padding:5px">Get Directions</a> 
							   </div>
							</div>
							<div class=" col-md-3">
								<div class="coupon">
								  <div class="" style="background-color:white;padding:10px;border-radius:5px;">
									<h2 style="color:green"><b> <?php echo isset($h_details['discount'])?$h_details['discount']:'0'; ?>% OFF </b></h2> 
								  </div>
								</div>
							</div>
						 </div>
            </div>
		<div class="clearfix">&nbsp;</div>
        </div>
    </section>
    <section class="mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ">
					<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Date Of offer : <?php echo isset($h_details['date'])?$h_details['date']:''; ?></span> <span class="pull-right site-col"> <p id="demo"></p></span></div>
								<div class="panel-body">
									<div class="col-md-3">
									 <?php if($doctor_details['profile_pic']!=''){ ?>
										 <img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="<?php echo base_url('assets/profile_pic/'.$doctor_details['profile_pic']); ?>">
									 <?php }else{ ?>
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="<?php echo base_url('assets/profile_pic/doc.png'); ?>">
									 <?php } ?>
									</div>
									<div class="col-md-4">
									<div class="team-content">
                                    <h5 class=" m-0"><?php echo isset($doctor_details['name'])?$doctor_details['name']:''; ?></h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> <?php echo isset($doctor_details['department'])?$doctor_details['department']:''; ?> </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> <?php echo isset($h_details['name'])?$h_details['name']:''; ?></div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php echo isset($doctor_details['course'])?$doctor_details['course']:''; ?></div>
                                    
                                   <div>
								   <a href="<?php echo base_url('offer/slotbooking/'.base64_encode($h_details['c_id'])); ?>" class="btn btn-success " style="margin-top:50px;">
										Book Appointment</a>
                                   </div>
									

                                </div>
									</div>
									<div class="col-md-5">
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
									$percentage =isset($h_details['discount'])?$h_details['discount']:'0';;
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
								<div class="panel-footer"><span class="site-col">Note : <?php echo isset($h_details['note'])?$h_details['note']:''; ?> </span>
								</div>
							</div>
						</div>
						
				</div>
				<div class="col-md-4 ">
					<div class="loop" style="height:330px;overflow-y:scroll;">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Description</span>
								</div>
								<div class="panel-body">
									<?php echo isset($h_details['des'])?$h_details['des']:''; ?>
								</div>
								
							</div>
						</div>
						
				</div>
			</div>
		</div>
    </section>
   
       
  <script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo date('Y-m-d', strtotime($h_details['date'])); ?>").getTime();

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
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>   