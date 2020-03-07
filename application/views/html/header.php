<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Online Doctor Appointment | Medargoya</title>
<meta name="description" content="We at Med Arogya has developed the best software to book online doctor appointment in Tirupati and surronding areas. This is very helpful for medical care seekers, as they can book online doctor/hospital/laboratory appointment at anytime and anywhere. We offer 10% - 50% discount through health cards issued by Med Arogya">
<meta name="keywords" content="Medarogya Online doctor appointment Doctor Appointment App Dr Appointment Online doctor's appointment book doctor  appointment online OP online appointment Online OP  Online OP booking app">
<link rel="icon" href="<?php echo base_url(); ?>assets/front/img/fav.png">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/bootstrapValidator.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/suggestion-box.min.css" rel="stylesheet">

<!-- Animate -->
<link href="<?php echo base_url(); ?>assets/front/css/animate.min.css" rel="stylesheet">

<!-- Main CSS -->
<link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="stylesheet">

<!-- responsive stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/responsive.css">

<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/front/css/custom.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151904879-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151904879-1');
</script>
	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1531905423631808');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1531905423631808&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
 <nav class="web-sidebar-menu web-slide-from-left">
      <div class="nano">
        <div class="content">
          <nav class="responsive-menu" >
            <span class="wa-close"><i class="fa fa-close"></i></span>
            <ul>
              <li class="active"><a href="<?php echo base_url(''); ?>">Home</a></li>
			 
			  <li><a href="<?php echo base_url('hospitals/alllist'); ?>">Doctor Consultation</a></li>
			  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Specialities
        <span class="caret pull-right" style="margin-top:10px;font-size:25px;"></span></a>
        <ul class="dropdown-menu">
          <li>
			 <div class=" row cust-icon">
				<?php if(isset($specif_list) && count($specif_list)>0){ ?>
						<?php foreach($specif_list as $li){ ?>
						<div class="col-md-4">
							<a href="<?php echo base_url('specialities/index/'.base64_encode($li['s_id'])); ?>"><img src="<?php echo base_url('assets/specialization/'.$li['icon']); ?>" title="<?php echo $li['name']; ?>" alt="<?php echo $li['image']; ?>">&nbsp;<?php if(strlen($li['name'])>12){echo substr($li['name'], 0, 12).'..';}else{ echo $li['name'];}  ?></a>
						</div>
						<?php } ?>
					<?php } ?> 
             </div>
		  </li>
          
        </ul>
      </li>
			  <li><a href="<?php echo base_url('comingsoon/index/1'); ?>">Diagnostics</a></li>
			  <li><a href="<?php echo base_url('comingsoon/index/1'); ?>">Pharmacy</a></li>
			  <?php if($this->session->userdata('huser_details')){ ?>
						<?php if($u_d['profile_pic']!=''){ ?>
						<li><a href="<?php echo base_url('userprofile'); ?>" class="has-submenu cust-fa"><img src="<?php echo base_url('assets/profile_pic/'.$u_d['profile_pic']); ?>" style="width:40px;height:40px;border-radius:50%"> Profile</a>
						<?php }else{ ?>
						<li><a href="<?php echo base_url('userprofile'); ?>" class="has-submenu cust-fa"><img src="<?php echo base_url(); ?>assets/front/img/dummy-user.png" style="width:40px;height:40px;"> Profile</a>
						<?php } ?>
				    
				  <?php }else{ ?>
					<li><a href="<?php echo  base_url('login'); ?>" class="has-submenu cust-fa"><img src="<?php echo base_url(); ?>assets/front/img/dummy-user.png" style="width:40px;height:40px;"> Profile</a>
				  <?php } ?>
			
            </ul>
          </nav>
        </div>
      </div>
    </nav>
<body>

  <div class="web-sidebar-menu-container" id="web-sidebar-menu-container">
    <div class="web-sidebar-menu-push">
      <div class="web-sidebar-menu-overlay"></div>
      <div class="web-sidebar-menu-inner">
        <!--Header Section Start Here -->
        <header class="header-section" id="home" >
         
          
          <div class="navbar navbar-static-top">
            <div class="container">
              <div class="navbar-header">
                <a  class="navbar-brand col-md-12 " href="<?php echo base_url(); ?>">
                  <img  src="<?php echo base_url(); ?>assets/front/img/logo.png" alt="Medspace Softtech" class="img-responsive">
                </a> 
                <div class="header-right-toggle pull-right hidden-md hidden-lg">
                  <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
                </div>
              </div>
              <nav class="main-navigation text-left pull-right hidden-xs hidden-sm">
                <ul class="nav navbar-nav">
                 
				 
				  <li class="text-center <?php if($this->uri->segment(1)=='hospitals'){ echo "active";} ?>"> <a href="<?php echo base_url('hospitals/alllist'); ?>"> <i class="fa fa-user-md green-col" aria-hidden="true"></i> Hospitals <div class="label-nav">Book an appointment</div></a> 
				  </li>
				   <li class="dropdown mega-dropdown"><a href=""  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog green-col" aria-hidden="true"></i> Specialities
				   <div class="label-nav text-center">List of Specialities</div></a>
				 <div class="dropdown-menu mega-dropdown-menu row cust-icon">
					<?php if(isset($specif_list) && count($specif_list)>0){ ?>
						<?php foreach($specif_list as $li){ ?>
						<div class="col-md-4">
							<a href="<?php echo base_url('specialities/index/'.base64_encode($li['s_id'])); ?>"><img src="<?php echo base_url('assets/specialization/'.$li['icon']); ?>" title="<?php echo $li['name']; ?>" alt="<?php echo $li['image']; ?>">&nbsp;<?php if(strlen($li['name'])>12){echo substr($li['name'], 0, 12).'..';}else{ echo $li['name'];}  ?></a>
						</div>
						<?php } ?>
					<?php } ?>
					
				</div>
                  </li>
				
				  <li class="text-center <?php if($this->uri->segment(1)=='pharmacy'){ echo "active";} ?>">  <a href="<?php echo base_url('comingsoon/index/1'); ?>"> <i class="fa fa-plus green-col" aria-hidden="true"></i> Pharmacy <div class="label-nav">Medicines & health products</div></a> </li>
				   <li class="text-center <?php if($this->uri->segment(1)=='comingsoon' && $this->uri->segment(3)=='3'){ echo "active";} ?>">  <a href="<?php echo base_url('comingsoon/index/3'); ?>">  <i class="fa fa-flask green-col" aria-hidden="true"></i> Diagnostics <div class="label-nav">Book tests & checkups</div></a> </li>
				  <!-- <li class="btn btn-default btn-xs"> <a href="login.php" > Login / Signup</a></li>-->
				  <?php if($this->session->userdata('huser_details')){ ?>
						<?php if($u_d['profile_pic']!=''){ ?>
						<li><a href="<?php echo base_url('userprofile'); ?>" class="has-submenu cust-fa"><img src="<?php echo base_url('assets/profile_pic/'.$u_d['profile_pic']); ?>" style="width:40px;height:40px;border-radius:50%"></a>
						<?php }else{ ?>
						<li><a href="<?php echo base_url('userprofile'); ?>" class="has-submenu cust-fa"><img src="<?php echo base_url(); ?>assets/front/img/dummy-user.png" style="width:40px;height:40px;"></a>
						<?php } ?>
				    
				  <?php }else{ ?>
					<li><a href="<?php echo  base_url('login'); ?>" class="has-submenu cust-fa"><img src="<?php echo base_url(); ?>assets/front/img/dummy-user.png" style="width:40px;height:40px;"></a>
				  <?php } ?>
                   
                  </li> 
                  
                </ul>
              </nav>
            </div>
          </div>
        </header>
	   <?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
