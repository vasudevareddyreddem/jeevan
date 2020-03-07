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
                    <li role="presentation" class="brand-nav active"><a href="<?php echo base_url('userprofile'); ?>" aria-controls="tab1" >Profile</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('appointment/index'); ?>" aria-controls="tab2" >Upcoming Bookings</a></li>
                    <li role="presentation" class="brand-nav "><a href="<?php echo base_url('appointment/completed'); ?>" aria-controls="tab3" role="tab" >Completed Bookings</a></li>
                    <li role="presentation" class="brand-nav "><a href="<?php echo base_url('appointment/canceled'); ?>" aria-controls="tab4" role="tab" >Cancel Bookings</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('appointment/followup'); ?>" aria-controls="tab5" role="tab" >Follow up Remainder</a></li>
                    <li role="presentation" class="brand-nav"><a href="<?php echo base_url('newpatient'); ?>" aria-controls="tab5" role="tab">New patient</a></li>
					<li role="presentation" class="brand-nav"><a href="<?php echo base_url('userprofile/logout'); ?>" >Logout</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
					<fieldset class="scheduler-border">
			<legend class="scheduler-border">Profile Details</legend>
                        <div class="card">
		        <div class="card-body">
		            
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="<?php echo base_url('userprofile/editpost'); ?>" method="post" enctype="multipart/form-data">
                              <?php $csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
					); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

							  <div class="form-group col-md-6">
                                <label for="username" class=" col-form-label">Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name"  class="form-control here" value="<?php echo isset($u_d['name'])?$u_d['name']:''; ?>" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="name" class=" col-form-label">Email id</label> 
                                <div class="col-8">
                                  <input id="email" name="email"   class="form-control here"  value="<?php echo isset($u_d['email'])?$u_d['email']:''; ?>" type="text">
                                </div>
                              </div>
							  <div class="form-group col-md-6">
                                <label for="name" class=" col-form-label">Mobile No</label> 
                                <div class="col-8">
                                  <input id="mobile" name="mobile"  class="form-control here"  value="<?php echo isset($u_d['mobile'])?$u_d['mobile']:''; ?>" type="text">
                                </div>
                              </div>
							  <div class="form-group col-md-6">
                                <label for="name" class=" col-form-label">Address</label> 
                                <div class="col-8">
                                  <input id="address" name="address"  class="form-control here"  value="<?php echo isset($u_d['address'])?$u_d['address']:''; ?>" type="text">
                                </div>
                              </div>
							  <div class="form-group col-md-6">
                                <label for="name" class=" col-form-label">Upload Profile Pic</label> 
                                <div class="col-8">
                                  <input  class="form-control here" name="image" type="file">
                                </div>
                              </div>
                              <div class="clearfix">&nbsp;</div>
                              <div class="form-group col-md-6">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-success">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
			</fieldset>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <fieldset class="scheduler-border">
						<legend class="scheduler-border">Upcoming Bookings</legend>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-success btn-block"> Get Directions</button>
										<button class="btn btn-danger btn-block"> Cancel Booking</button>
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-success btn-block"> Get Directions</button>
										<button class="btn btn-danger btn-block"> Cancel Booking</button>
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-success btn-block"> Get Directions</button>
										<button class="btn btn-danger btn-block"> Cancel Booking</button>
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div><div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-success btn-block"> Get Directions</button>
										<button class="btn btn-danger btn-block"> Cancel Booking</button>
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-success btn-block"> Get Directions</button>
										<button class="btn btn-danger btn-block"> Cancel Booking</button>
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						</fieldset>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                         <fieldset class="scheduler-border">
						<legend class="scheduler-border">Completed Bookings</legend>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div><div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Booking Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						</fieldset>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <fieldset class="scheduler-border">
						<legend class="scheduler-border">Cancel Bookings</legend>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Cancelation Id : H0000123</span> <span class="pull-right site-col"> Distance :2.5 Km</span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Slot Time : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Contact Person: Ravi kumar reddy | 850022xxx</span></div>
							</div>
						</div>
						
						</fieldset>
                    </div>
					 <div role="tabpanel" class="tab-pane" id="tab5">
                        <fieldset class="scheduler-border">
						<legend class="scheduler-border">Followup Remainde</legend>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Patient Name : Siva kumar reddy</span> <span class="pull-right site-col "> <p id="demo"></p></span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<button class="btn btn-success btn-block"> Book Appointment</button>
										<div class="mt-2">
										<strong>Discount:</strong>₹ 50
										</div>
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col"> <i class="fa fa-clock-o" aria-hidden="true"></i> Follow Date : Tommarow, 18 Sep-2019</span>
								<span class="site-col pull-right"><i class="fa fa-user" aria-hidden="true"></i> Consultation Fee Validity : <span style="color:green"> 25, Sep 19</span></span></div>
							</div>
						</div>
						
						</fieldset>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
    </section>
  
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

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
	
     