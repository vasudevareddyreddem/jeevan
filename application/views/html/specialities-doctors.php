
<div class="header-space"></div>

   
    <div id="main" class="mt-4">
        <!-- About Us Section Start Here-->
        <section id="about-us" class="about-section">
            <div class="section-padding">
                <div class="container mt-5" style="border:1px solid #ddd;padding:5px;border-radius:5px;">
				 <div class="row ">
               <div class="col-md-8 " style="border-right:1px solid #ddd">
                  <header class="page-header section-header ">
                     <h1 class="h-bold mt-4 text-center"><?php echo isset($spec_name['name'])?$spec_name['name']:'No'; ?> <span>Doctors </span> <?php echo isset($s_city)?'in '.$s_city:''; ?></h1>
                    
                     
                  </header>
               </div>
			    <div class="col-md-4 mt-4">
				<form action="<?php echo base_url('specialities/index'); ?>" method="post" id="myform">
				
			<?php $csrf = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
			); ?>
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

				<input type="hidden" name="sp_id" value="<?php echo isset($spec_name['s_id'])?$spec_name['s_id']:''; ?>">
				<div class="form-group">
				<div class="input-group ">
					 <select class="form-control" name="city" onchange='get_location_wise(this.value);'>
						<option value="">Select City</option>
						<?php if(isset($city_ist) && count($city_ist)>0){ ?>
							<?php foreach($city_ist as $cil){?>
								<?php if($s_city==$cil['city']){ ?>
									<option selected value="<?php echo $cil['city']; ?>"><?php echo $cil['city']; ?></option>
								<?php }else{ ?>
									<option value="<?php echo $cil['city']; ?>"><?php echo $cil['city']; ?></option>
								<?php } ?>								
							<?Php } ?>
						<?Php } ?>
					 </select>
				
				  <div class="input-group-addon" style="padding:0">
				   <a href="javascript:void(0);" style="padding:6px 12px;">
                    <i class=""><img src="<?php echo base_url(); ?>assets/front/img/location.png" style="width:20px;height:20px;"></i>
					</a>
                  </div>
                </div>
                <!-- /.input group -->
              </div></form>
				</div>
            </div>
            </div>
			<div class="container ">
                    <div class="row mt-4">
					<?php if(isset($doct_list) && count($doct_list)>0){ ?>
					<?php foreach($doct_list as $li){ ?>
                        <div class="gallery_product  col-md-4 mt-100  ">
                            <div class="our-doctors">
                                <div class="pic">
                                    <img src="<?php echo base_url('assets/profile_pic/'.$li['profile_pic']); ?>">
                                </div>
                                <div class="team-content">
                                    <h3 class="title text-center"><?php echo isset($li['name'])?$li['name']:''; ?></h3>
                                    <div class="post text-center"><?php echo isset($li['specialization'])?$li['specialization']:''; ?> </div>
                                    <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> <?php echo isset($li['hos_name'])?$li['hos_name']:''; ?></div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php echo isset($li['course'])?$li['course']:''; ?></div>
                                    
                                    <div class="post mt-2"><i class="fa fa-clock-o" aria-hidden="true"></i>
										<?php echo isset($li['mor_f_t'])?$li['mor_f_t']:''; ?> 
												- 
										<?php echo isset($li['mor_t_t'])?$li['mor_t_t']:''; ?> 
                                        <br>
                                        <span class="ml-5"> <?php echo isset($li['aft_f_t'])?$li['aft_f_t']:''; ?> - 
										<?php echo isset($li['aft_t_t'])?$li['aft_t_t']:''; ?> </span>
                                    </div>
									<div class="post mt-2 ml-5"> <b>consultation fee :</b> ₹ <?php echo isset($li['c_fee'])?$li['c_fee']:''; ?></div>

                                </div>
                                <div class="text-center">
                                    <a href="<?php echo base_url('slotbooking/index/'.base64_encode($li['d_id'])); ?>" class="btn btn-sm btn-theme"> Book Appointment</a>
                                </div>
                            </div>
                        </div>
						<?php } ?>
					<?php }else{ ?>
					<div>No data available. Please try again</div>
					<?php } ?>
					
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End Here-->

        <!-- Testimonial Section End -->
    </div>
<script>
function get_location_wise(id){ 
   if(id!=''){
	  document.getElementById('myform').submit(); 
   }
}
</script>