

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
            <div class="col-md-8 m-t-10 hospital-deatails">
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
               <!--<div>
                  <strong> Distance:</strong> <?php echo isset($h_details['distance'])?number_format($h_details['distance'] ,2):'0'; ?> Km  
               </div>-->
               <div>
                  <strong> Directions:</strong> <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $h_details['lat']; ?>,<?php echo $h_details['lng']; ?>" target="_blank" class="btn btn-theme" style="font-size:10px;padding:5px">Get Directions</a> 
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix">&nbsp;</div>
   </div>
</section>
<div id="main" class="mt-4">
   <!-- About Us Section Start Here-->
   <?php if(isset($h_doctors) && count($h_doctors)>0){ ?>
   <section id="about-us" class="about-section">
      <div class="section-padding">
         <div class="container">
            <div class="row">
               <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h1 class="gallery-title text-center">Doctors List</h1>
               </div>
               <div align="center">
                  <button class="btn btn-default filter-button" data-filter="all">All</button>
				  <?php foreach($h_doctors as $dli){ ?>
                  <button class="btn btn-default filter-button" data-filter="<?php echo str_replace(" ","",$dli['department']); ?>"><?php echo $dli['department']; ?> </button>
				  <?php } ?>
                </div>
               <br/>
			   <?php foreach($h_doctors as $dli){ ?>
               <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter <?php echo str_replace(" ","",$dli['department']); ?>">
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
   <!-- About Us Section End Here-->
   <!-- Testimonial Section End -->
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

