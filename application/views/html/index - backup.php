<style>
.custom-curousel .carousel {
    margin-bottom: 0;
    padding: 0 40px 30px 40px;
}
/* The controlsy */
.carousel-control {
	left: -12px;
    height: 40px;
	width: 40px;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    margin-top: 90px;
	text-align:center;
	line-height:28px;
}
.carousel-control.right {
	right: -12px;
}
/* The indicators */
.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: -10px;
	margin-right: -19px;
}
/* The colour of the indicators */
.carousel-indicators li {
	background: #cecece;
}
.carousel-indicators .active {
background: #428bca;
}
</style>

<?php if(isset($banners) && count($banners)>0){ ?>
<section style="margin-top:80px;">
   <div class="row">
		<div class="col-md-7" style="padding:0;margin-top:30px;">      
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <?php $cnt=1;foreach($banners as $li){ ?>
               <?php if($cnt==1){ ?>
               <li data-target="#myCarousel" data-slide-to="<?php echo $cnt; ?>" class="active"></li>
               <?php }else{ ?>
               <li data-target="#myCarousel" data-slide-to="<?php echo $cnt; ?>"></li>
               <?php } ?>           
               <?php $cnt++;} ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner cover-bg-img">
               <?php $cnt=1;foreach($banners as $li){ ?>
               <?php if($cnt==1){ ?>
               <div class="item active">
                  <img src="<?php echo base_url('assets/banners/'.$li['b_img']); ?>" alt="<?php echo $li['b_org_img']; ?>" style="width:100%;">
               </div>
               <?php }else{ ?>
               <div class="item">
                  <img src="<?php echo base_url('assets/banners/'.$li['b_img']); ?>" alt="<?php echo $li['b_org_img']; ?>" style="width:100%;">
               </div>
               <?php } ?>           
               <?php $cnt++;} ?>
            </div>
            
         </div>
      </div>
	   <div class="col-md-5" style="padding-left:3px;margin-top:30px;">
			<?php if(isset($offers_list) && count($offers_list)>0){ ?>     
				
						<div id="myCarousel1" class="carousel slide " data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators" style="bottom:60px;">
						<?php $cnt=1;foreach($offers_list as $li){ ?>
							<?php if($cnt==1){ ?>
						  <li data-target="#myCarousel1" data-slide-to="<?php echo $cnt; ?>" class="active"></li>
						  <?php }else{ ?>
						  <li data-target="#myCarousel1" data-slide-to="<?php echo $cnt; ?>"></li>
						  <?php } ?>
						<?php $cnt++;} ?>
						 
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						<?php $cnt=1;foreach($offers_list as $li){ ?>
							<?php if($cnt==1){ ?>
							  <div class="item active campion-slid">
											<?php if($li['c_img']!=''){ ?>
											  <img  style="width:100%;"src="<?php echo base_url('assets/campaign/'.$li['c_img']); ?>" class="img-responsive" alt="<?php echo isset($li['name'])?$li['name']:''; ?>" />
											<?php }else{ ?>
												<img  style="width:100%;" src="<?php echo base_url(); ?>assets/hospital_img/dummy_hos.png" class="img-responsive" alt="Hospitals" />
											<?php } ?>
								 <div class="py-2 text-center">
								<a href="<?php echo base_url('offer/details/'.base64_encode($li['c_id'])); ?>" class="btn btn-primary btn-success"> Book Now</a>
								</div>
							  </div>
							<?php }else{ ?>

								  <div class="item campion-slid">
										<?php if($li['c_img']!=''){ ?>
											  <img  style="width:100%;"src="<?php echo base_url('assets/campaign/'.$li['c_img']); ?>" class="img-responsive" alt="<?php echo isset($li['name'])?$li['name']:''; ?>" />
											<?php }else{ ?>
												<img  style="width:100%;" src="<?php echo base_url(); ?>assets/hospital_img/dummy_hos.png" class="img-responsive" alt="Hospitals" />
											<?php } ?>
									 <div class="py-2 text-center">
									<a href="<?php echo base_url('offer/details/'.base64_encode($li['c_id'])); ?>" class="btn btn-primary btn-success"> Book Now</a>
									</div>
								  </div>
							<?php } ?>
						<?php $cnt++;} ?>
						</div>	
					</div>			
		<?php }else{  ?>
		
			<div class="">Bayapu  own content</div>
		
		<?php } ?>
		</div>
</section>
<?php } ?>
<div id="main">
   <?php if(isset($associate_hos) && count($associate_hos)>0){ ?>
   <section class="clients-section section-padding mt-4">
      <div class="container">
         <div class="clearfix">&nbsp;</div>
         <div class="row">
            <div class="col-md-12">
               <header class="page-header section-header">
                  <h3 >Our Associate Hospitals</h3	>
                
               </header>
            </div>
           
            <div class="col-md-12">
               <ul id="logo" class="owl-carousel owl-theme associ-hos">
                  <?php foreach($associate_hos as $li){ ?>
                  <li class="item">
                     <a href="<?php echo base_url('hospitals/details/'.base64_encode($li['h_id'])); ?>"><img src="<?php echo base_url('assets/profile_pic/'.$li['logo']); ?>" alt="<?php echo $li['logo']; ?>" class="img-responsive"></a>
                  </li>
                  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <?php if(isset($our_hos) && count($our_hos)>0){ ?>
   <section class="blog-news">
      <div class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <br>
                  <header class="page-header section-header text-center">
                     <h1 class="h-bold"> Our <span> Hospitals</span></h1>
                     <span class="line text-center"></span>
                     <p>
                        Our services represent Ability to schedule web page designing with front-end and developing back-end php scripting to web applications.
                     </p>
                  </header>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="row">
                     <div class="col-md-9">
                        <h3>
                           &nbsp;
                        </h3>
                     </div>
                     <div class="col-md-3">
                        <!-- Controls -->
						<?php if(isset($our_hos) && count($our_hos)>3){ ?>
                        <div class="controls pull-right hidden-xs">
                           <a class="left fa fa-chevron-left btn btn-theme" href="#carousel-example-generic"
                              data-slide="prev"></a><a class="right fa fa-chevron-right btn-theme btn" href="#carousel-example-generic"
                              data-slide="next"></a>
                        </div>
						<?php } ?>
                     </div>
                  </div>
                  <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                           <div class="row hosp-sec">
						   <?php foreach($our_hos  as $li){ ?>
                              <div class="col-sm-4">
                                 <a href="<?php echo base_url('hospitals/details/'.base64_encode($li['h_id'])); ?>">
                                    <div class="col-item">
                                       <div class="photo">
									   <?php if($li['img_name']!=''){ ?>
                                          <img src="<?php echo base_url('assets/hospital_img/'.$li['img_name']); ?>" class="img-responsive" alt="MS Hospitals" />
									   <?php }else{ ?>
											<img src="<?php echo base_url(); ?>assets/hospital_img/dummy_hos.png" class="img-responsive" alt="MS Hospitals" />
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
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 text-right py-4">
                     <a class="btn btn-theme" href="<?php echo base_url('hospitals/alllist'); ?>">See All Hospitals</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <?php if(isset($all_doctor_list) && count($all_doctor_list)>0){ ?>
   <section id="about-us" class="about-section">
      <div class="section-padding">
	  <div class="container custom-curousel">
    <div class="row">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                 
		</div>
	</div>
</div>
         <div class="container">
            <div class="clearfix"> &nbsp;</div>
            <div class="row">
               <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h1 class="gallery-title text-center">Doctors List</h1>
               </div>
               <div align="center">
                  <button class="btn btn-default filter-button" data-filter="all">All</button>
				  <?php foreach($all_departments_list as $dli){ ?>
                  <button class="btn btn-default filter-button" data-filter="<?php echo str_replace(" ","",$dli['department']); ?>"><?php echo $dli['department']; ?> </button>
				  <?php } ?>
              
               </div>
               <br/>
               <?php foreach($all_doctor_list as $dli){ ?>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter <?php echo str_replace(" ","",$dli['department']); ?>">
                  <div class="our-team">
                     <div class="pic">
					 <?php if($dli['profile_pic']!=''){ ?>
                         <img src="<?php echo base_url('assets/profile_pic/'.$dli['profile_pic']); ?>">
					 <?php }else{ ?>
						<img src="<?php echo base_url('assets/profile_pic/doc.png'); ?>">
					 <?php } ?>
                     </div>
                     <div class="team-content">
                        <h3 class="title text-center"><?php echo $dli['name']; ?> </h3>
                        <div class="post text-center"><?php echo $dli['department']; ?> </div>
                        <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo $dli['course']; ?> </div>
                        <div class="post mt-2"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $dli['mor_f_t']; ?> - <?php echo $dli['mor_t_t']; ?>
                           <br>
                           <span class="ml-5"> <?php echo $dli['aft_f_t']; ?> - <?php echo $dli['aft_t_t']; ?></span>
                        </div>
                        <div class="post mt-2"> <b>consultation fee :</b> ₹ <?php echo $dli['c_fee']; ?></div>
                     </div>
                     <div class="text-center">
                        <a href="<?php echo base_url('slotbooking/index/'.base64_encode($dli['d_id'])); ?>" class="btn btn-sm btn-theme"> Book Appointment</a>
                     </div>
                  </div>
               </div>
			   <?php } ?>
              
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <!-- Featured-item Section End Here-->
   <!-- Cat-One Section Start Here-->
   <section class="cat-one">
      <div class="section-padding">
         <div class="container">
            <div class="clearfix">&nbsp; </div>
            <div class="row">
               <div class="col-md-12">
                  <header class="page-header section-header text-center">
                     <h1 class="h-bold">Why choose <span>MedArogya</span></h1>
                     <span class="line text-center"></span>
                     <p>
                        Why choose MedArogya?
                     </p>
                  </header>
               </div>
            </div>
            <div class="row pb-4">
               <div class="our_standards_proces">
                  <div class="process-row ">
                     <div class="process-step wow fadeInRight animated" data-wow-duration="1000ms" data-wow-delay="1000ms">
                        <div class="process-icon">
                           <span>1</span>
                           <img src="<?php echo base_url(); ?>assets/front/img/p1.png" alt="Book Appointment" title="Book Appointment">
                        </div>
                        <p>Book Appointment</p>
                     </div>
                     <div class="process-step wow fadeInRight animated" data-wow-duration="1200ms" data-wow-delay="1200ms">
                        <div class="process-icon">
                           <span>2</span>
                           <img src="<?php echo base_url(); ?>assets/front/img/p2.png" alt="Pickuping From Doorstep" title="Pickuping From Doorstep">
                        </div>
                        <p>Pickuping From Doorstep</p>
                     </div>
                     <div class="process-step wow fadeInRight animated" data-wow-duration="1400ms" data-wow-delay="1400ms">
                        <div class="process-icon">
                           <span>3</span>
                           <img src="<?php echo base_url(); ?>assets/front/img/p3.png" alt="Receiving Person At Hospital" title="Receiving Person At Hospital">
                        </div>
                        <p>Receiving Person At Hospital</p>
                     </div>
                     <div class="process-step wow fadeInRight animated" data-wow-duration="1600ms" data-wow-delay="1600ms">
                        <div class="process-icon">
                           <span>4</span>
                           <img src="<?php echo base_url(); ?>assets/front/img/p4.png" alt="Consultation" title="Consultation">
                        </div>
                        <p>Doctor Consultation</p>
                     </div>
                     <div class="process-step wow fadeInRight animated" data-wow-duration="1800ms" data-wow-delay="1800ms">
                        <div class="process-icon">
                           <span>5</span>
                           <img src="<?php echo base_url(); ?>assets/front/img/p5.png" alt="Delivery" title="Delivery">
                        </div>
                        <p>Droping To Doorstep</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php if(isset($testimonials) && count($testimonials)>0){ ?>
   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                  <ol class="carousel-indicators">
				   <?php $cnt=1;foreach($testimonials as $li){ ?>
						<?php if($cnt==1){ ?>
							<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="<?php echo base_url('assets/testimonials/'.$li['image']); ?>" alt="">
							</li>
						 <?php }else{ ?>
							 <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="<?php echo base_url('assets/testimonials/'.$li['image']); ?>" alt="">
							</li>
						 <?php } ?>
				   <?php } ?>
                   
                  </ol>
                  <div class="carousel-inner text-center" style="height:200px;">
                     <!-- Quote 1 -->
					 <?php $cnt=1;foreach($testimonials as $li){ ?>
					 <?php if($cnt==1){ ?>
                     <div class="item active">
                        <blockquote>
                           <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">
                                 <p><?php echo isset($li['message'])?$li['message']:''; ?></p>
                                 <small><?php echo isset($li['name'])?$li['name']:''; ?></small>
                              </div>
                           </div>
                        </blockquote>
                     </div>
					 <?php }else{ ?>
					  <!-- Quote 2 -->
                     <div class="item">
                        <blockquote>
                           <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">
                                 <p><?php echo isset($li['message'])?$li['message']:''; ?></p>
                                 <small><?php echo isset($li['name'])?$li['name']:''; ?></small>
                              </div>
                           </div>
                        </blockquote>
                     </div>
					 <?php } ?>
                    
					<?php $cnt++; } ?>
                    
                  </div>
                  <!-- Bottom Carousel Indicators -->
                  <!-- Carousel Buttons Next/Prev -->
                  <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                  <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php } ?>
   <section class="blog-news py-4">
      <div class="container py-4">
         <div class="col-md-6">
            <img src="<?php echo base_url(); ?>assets/front/img/app-image.png" class="img-responsive" style="height:350px;margin:0 auto;">
         </div>
         <div class="col-md-6">
            <div class="content-app">
               <h3 style="margin:0">Download the MedArogya app</h3>
               <p>Book appointments and health checkups
                  and consult doctors online
               </p>
            </div>
            <form action="<?php echo base_url('home/sendlink'); ?>" method="post">
               <?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
										<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

			   <div class="row">
                  <div class="col-md-2 col-xs-2" style="padding:0">
                     <select style="height:48px;border-right:0;border-radius: 4px 0px 0px 4px;" class="form-control">
                        <option value="+91">+91</option>
                     </select>
                  </div>
                  <div class="col-md-7 col-xs-6" style="padding:0">
                     <input style="height:48px;border-radius: 0px 4px 4px 0px;" type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Phone Number " required>
                  </div>
                  <div class="col-md-3 col-xs-4">
                     <button type="submit" class="bnt btn-theme">Send Link</button>
                  </div>
				</div>
                  <div class="row">
                  <div class="col-md-12 mt-4">
                     <img style="width:150px;margin:0 auto;" src="<?php echo base_url(); ?>assets/front/img/playstore.png" class="img-responsive">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>
</div>

<script>
   $(document).ready(function() {
   
       $(".filter-button").click(function() {
           var value = $(this).attr('data-filter');
   
           if (value == "all") {
               //$('.filter').removeClass('hidden');
               $('.filter').show('1000');
           } else {
               //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
               //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
               $(".filter").not('.' + value).hide('3000');
               $('.filter').filter('.' + value).show('3000');
   
           }
       });
   
       if ($(".filter-button").removeClass("active")) {
           $(this).removeClass("active");
       }
       $(this).addClass("active");
   
   });
</script>

