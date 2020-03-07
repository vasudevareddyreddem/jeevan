<div class="header-space"></div>
    <section class="page-header">
        <div class="bg-f5f5f5">
            <div class="container">
                <div class="row">
				
					<div class="col-md-8 col-md-offset-3">
						<div class="d-flex justify-content-center h-100">
							<form  autocomplete="off" action="<?php echo base_url('hospitals/alllist'); ?>" method="post">
								<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
								); ?>
								<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

								<div class="col-md-5">
									<div class="input-group">						  
									   <select class="form-control" name="city" onchange='get_location_wise(this.value);'>
										<option value="">Select City</option>
										<?php if(isset($city_ist) && count($city_ist)>0){ ?>
											<?php foreach($city_ist as $cil){?>
												<?php if(isset($p_d['city'])&& $p_d['city']==$cil['city']){ ?>
													<option selected value="<?php echo $cil['city']; ?>"><?php echo $cil['city']; ?></option>
												<?php }else{ ?>
													<option value="<?php echo $cil['city']; ?>"><?php echo $cil['city']; ?></option>
												<?php } ?>								
											<?Php } ?>
										<?Php } ?>
									 </select>
									</div>
								</div>					
								<div class="col-md-6">
									<div class="input-group">
									  <input type="text" class="form-control" name="search" placeholder="Search for Hospital" value="<?php echo isset($p_d['search'])?$p_d['search']:''; ?>">
									</div>
								</div>
								<div class="col-md-1">
									<div class="input-group ">
										<button type="submit" class="btn btn-warning">Search</button>
									</div>
								</div>
							</form>          
						</div>					
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Header End Here -->

    <!-- Main Section Start Here -->
	<?php if(isset($our_hos) && count($our_hos)>0){ ?>
    <div id="main" class="mt-4">
        <!-- About Us Section Start Here-->
        <section id="about-us" class="about-section">
            <div class="section-padding">
                <div class="container">
                    <div class="row hospital-list hosp-sec">
						<?php foreach($our_hos  as $li){ ?>
                              <div class="col-sm-4">
                                 <a href="<?php echo base_url('hospitals/details/'.base64_encode($li['h_id'])); ?>">
                                    <div class="col-item">
                                       <div class="photo">
									   <?php if($li['logo']!=''){ ?>
                                          <img src="<?php echo base_url('assets/profile_pic/'.$li['logo']); ?>" class="img-responsive" alt="<?php echo isset($li['name'])?$li['name']:''; ?>" />
									   <?php }else{ ?>
											<img src="<?php echo base_url(); ?>assets/hospital_img/dummy_hos.png" class="img-responsive" alt="Hospital Logo" />
									   <?php } ?>
                                       </div>
                                       <div class="info">
                                          <div class="row">
                                             <div class="price col-md-12 pb-2">
                                                <h5 class="text-center">
                                                  <?php echo isset($li['name'])?$li['name']:''; ?>
                                                </h5>
                                             </div>
                                          </div>
                                          <div class="separator clear-left">
                                             <p class="btn-add">
                                                <i class="fa fa-user-md" aria-hidden="true"></i>  <?php echo isset($li['hos_doc'])?$li['hos_doc']:'0'; ?>
                                             </p>
                                             <p class="btn-details">
                                                <i class="fa fa-random" aria-hidden="true"></i>Services: <?php echo isset($li['hosl_depart'])?$li['hosl_depart'].' +':'0'; ?> 
                                             </p>
                                          </div>
                                          <div class="clearfix">
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
							<?php } ?>
						
					</div>
                </div>
            </div>
        </section>
        <!-- About Us Section End Here-->

        <!-- Testimonial Section End -->
    </div>
	<?php }else{ ?>
	 <div id="main" class="mt-4">
        <!-- About Us Section Start Here-->
			<section id="about-us" class="about-section">
				<div class="section-padding">
					<div class="container">
						<div class="text-center">No data found</div>
					</div>
				</div>
			 </section>
		</div>
	<?php } ?>
	<div class="clearfix">&nbsp;</div>
        