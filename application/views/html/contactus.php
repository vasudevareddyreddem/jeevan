 <div class="header-space"></div>
 <div class="header-space"></div>
       <div id="main">
          <!-- Contact Section Start Here -->
          <section id="contact-us" class="contact-section section-padding">
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                    <header class="page-header section-header text-center">
                      <h1 class="h-bold">Contact <span>Us</span></h1>
                      <span class="line text-center"></span> 
                    </header>
                  </div>
                </div>
            </div>
            <div class="container form-section">
              <div class="row">
			  <div class="form col-md-6  wow fadeInRight" data-wow-duration="1.5s" data-wow-offset="10">
                  <img src="<?php echo base_url(); ?>assets/front/img/contactus-img.jpg" class="img-responsive">
				 <form  class="form-horizontal" action="<?php echo base_url('contactus/post'); ?>" method="post">
					<?php $csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
					); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

                   
				   <div class="form-group">
                      <div class="col-sm-12">
					  <input class="form-control" type="text" name="name" placeholder="Enter Name" value=""  required="" >
                       
					 </div>
                    </div>
					<div class="form-group">
                      <div class="col-sm-12">
					  <input type="text" placeholder="Enter Mobile" name="mobile" value="" class="form-control" required="">
					</div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                      <input type="email" placeholder="Enter Email" name="email" value="" class="form-control" required="">
					 </div>
                    </div>
					
                    <div class="form-group">
                      <div class="col-sm-12">
					     <input class="form-control" type="text" name="subject" value="" placeholder="Subject" required="">
					  </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 ">
					  <textarea class="form-control custom-control"  rows="2" name="message" placeholder="Enter Your message" required=""></textarea>
				   </div>
                    </div>
					 
					 
                    <div class="form-group">
                      <div class="col-sm-11">
					   <input type="submit" name="submit" class="btn-theme btn" value="SUBMIT"  />
                    </div>
                    </div>
                  </form>
                </div>
                <div class="contact-detail col-md-6 col-xs-12 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="10">
                
                  <ul class="contact-detail">
                    <li>
                     
                      <p><i class="fa fa-phone"></i><span class="">+91 7997999108 | 7997999105  </p>
                    </li>
					   <li>
                      
                      <p><i class="fa fa-envelope-o"></i><span class=""> info@medargoya.com</span>  </p>
                    </li>
					<li>
					<br>
						<h5 style="margin-bottom: 16px;">Registered Office:</h5>
						<p><i class="fa fa-map-marker"></i> 20-5-6 ,Sanjay Gandhi Colony, Near Lela Mahal circle, Tirupati Rd, Sanjay Gandhi Colony, Akkarampalle, Tirupati, Andhra Pradesh 517501</p> 
						<br>
					
					</li>
					
                 
					
                  </ul>
				 
                </div>
				
				
				
                
              </div>
            </div>
			</section>
			<section>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.265222987843!2d79.42562037157813!3d13.641623971682021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c546a5c2550a750!2sGauthami%20High%20School!5e0!3m2!1sen!2sin!4v1570163628411!5m2!1sen!2sin" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</section>
            </div>
        

        
       
