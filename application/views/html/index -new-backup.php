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
      <div class="">
         <video width="100%" height="400" controls>
            <source src="<?php echo base_url(); ?>assets/front/video/app.mp4" type="video/mp4">
            <source src="<?php echo base_url(); ?>assets/front/video/app.ogg" type="video/ogg">
         </video>
      </div>
      <?php } ?>
   </div>
</section>
<?php } ?>
<div id="main">
   <?php if(isset($all_doctor_list) && count($all_doctor_list)>0){ ?>
   <section id="about-us" class="about-section py-5">
      <div class="section-padding">
         <div class="container custom-curousel">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="ml-5 py-0" style="margin-bottom:20px;">Top Specialities in <span style="color:#4cb235">Tirupati</span></h3>
               </div>
               <div class="col-md-12">
                  <div id="Carousel" class="carousel slide">
                     <!-- Carousel items -->
                     <div class="carousel-inner min-heigh-cus">
                        <div class="item active">
                           <div class="row">
                              <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="<?php echo base_url('contactus/department_doctors'); ?>" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/pediatricians.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="General Physician" alt="General Physician">
                                       <h4 class="py-2 font-20">Pediatrician</h4>
                                    </a>
                                    <p >Fever, Stomach Issues, Vomiting,Cough, Headache/Migraine</a></p>
                                 </div>
                              </div>
							  <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="#" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/dermatologist.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="Dermatologist" alt="Dermatologist"><h4 class="py-2 font-20">Dermatologist</h4></a>
								<p >Acne, Hair Fall, Dark Circles</p>
                                 </div>
                              </div>
							   <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="#" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/gynecologist.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="Gynecologist" alt="Gynecologist"><h4 class="py-2 font-20">Gynecologist</h4></a>
								<p >PCOD, Period Issues, UTI, Pregnancy Care, Abdominal Pain</p>
                                 </div>
                              </div>
							   <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="#" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/dermatologist.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="Dermatologist" alt="Dermatologist"><h4 class="py-2 font-20">Gastroenterologist</h4></a>
								<p >Constipation, Stomach/Abdominal Pains, Vomiting, Acidity/Gas, Diarrhea</p>
                                 </div>
                              </div>
                              
                           </div>
                           <!--.row-->
                        </div>
						<div class="item ">
                           <div class="row">
                              <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="<?php echo base_url('contactus/department_doctors'); ?>" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/pediatricians.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="General Physician" alt="General Physician">
                                       <h4 class="py-2 font-20">Pediatrician</h4>
                                    </a>
                                    <p >Fever, Stomach Issues, Vomiting,Cough, Headache/Migraine</a></p>
                                 </div>
                              </div>
							  <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="#" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/dermatologist.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="Dermatologist" alt="Dermatologist"><h4 class="py-2 font-20">Dermatologist</h4></a>
								<p >Acne, Hair Fall, Dark Circles</p>
                                 </div>
                              </div>
							   <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="#" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/gynecologist.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="Gynecologist" alt="Gynecologist"><h4 class="py-2 font-20">Gynecologist</h4></a>
								<p >PCOD, Period Issues, UTI, Pregnancy Care, Abdominal Pain</p>
                                 </div>
                              </div>
							   <div class="col-md-3 ">
                                 <div class="thumbnail ">
                                    <a href="#" class=""><img src="<?php echo base_url(); ?>assets/front/img/dep/dermatologist.png" alt="Image" style="max-width:100%;"></a>
                                    <a href="#" title="Dermatologist" alt="Dermatologist"><h4 class="py-2 font-20">Gastroenterologist</h4></a>
								<p >Constipation, Stomach/Abdominal Pains, Vomiting, Acidity/Gas, Diarrhea</p>
                                 </div>
                              </div>
                              
                           </div>
                           <!--.row-->
                        </div>
						
                        
                      
                     </div>
                     <!--.carousel-inner-->
                     <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                     <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                  </div>
                  <!--.Carousel-->
               </div>
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
                        <p>Picking From Your Doorstep</p>
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
                        <p>Droping At Your Doorstep</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php if(isset($associate_hos) && count($associate_hos)>0){ ?>
   <section class="clients-section section-padding mt-4">
      <div class="container">
         <div class="clearfix">&nbsp;</div>
		  <div class="row">
               <div class="col-md-12">
                  <header class="page-header section-header text-center">
                     <h1 class="h-bold">Our  <span>Associate </span> Hospitals</h1>
                     <span class="line text-center"></span>
                     <p>
                        Why choose MedArogya?
                     </p>
                  </header>
               </div>
            </div>
         <div class="row">
         
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