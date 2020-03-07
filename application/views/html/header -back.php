<!DOCTYPE html>
<html lang="en-US">
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
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Online Doctor Appointment | Medargoya</title>
<meta name="description" content="#">
<meta name="keywords" content="#">
<link rel="icon" href="<?php echo base_url(); ?>assets/front/img/fav.png">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/bootstrapValidator.css" rel="stylesheet">
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151904879-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151904879-1');

https://www.googletagmanager.com/gtag/js?id=UA-151904879-1"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MN54VSJ');</script>
<!-- End Google Tag Manager -->
</head>
<style>

</style>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN54VSJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="web-sidebar-menu-container" id="web-sidebar-menu-container">
    <div class="web-sidebar-menu-push">
      <div class="web-sidebar-menu-overlay"></div>
      <div class="web-sidebar-menu-inner">
        <!--Header Section Start Here -->
        <header class="header-section" id="home" >
           <div class="top-header">
            <div class="container">
			<form>
 <div class="row">

<div class=" col-md-2 col-xs-4 " style="position:relative;padding:0px;margin-top:5px;">
	<select style="border-radius:5px 0px 0px 5px;border-right:0px;border:0.8px solid #ddd;" onchange="get_location_wise(this.value);" class="form-control myInput " id="loc_add"  type="text"  placeholder="Location	">
		<option class="list-group-item" value=""><?php echo $this->session->userdata('c_city'); ?></option>
		<?php if(isset($city_ist) && count($city_ist)>0){ ?>
			<?php foreach($city_ist as $li){ ?>
				<option class="list-group-item" value="<?php echo $li['city']; ?>"><?php echo $li['city']; ?></option>
			<?php } ?>
		<?php } ?>
	  </select>
</div>
<a href="javascript:void(0);"  onclick="get_location();" >
<div class=" col-md-1 col-xs-1 locaton-section" style="border-radius:0px 5px 5px 0px">
	<img style="width:20px;" class="img-responsive" src="<?php echo base_url(); ?>assets/front/img/location.png" alt="location">
</div>
</a>
<div class=" col-md-4 col-xs-4" style="position:relative;padding:0px;margin-left:30px;margin-top:5px;">
	<input style="border-radius:5px 0px 0px 5px; border:0.8px solid #ddd;;" class="form-control myInput1 " onkeyup="get_hospitalsearch(this.value);"   type="text" placeholder="Search for Doctors, Hospitals	">
		<span id="home_search">
		  
	  </span>
</div>
<a href="">
<div class=" col-md-1 col-xs-3 serch-section" style="">
	<i class="fa fa-search" aria-hidden="true"></i>
	</div>
	</a>
					
				
               <div class="social-links col-md-4 pull-right">
                 <ul class="social-icons hidden-xs pull-right">
                   <li> <a href="https://www.facebook.com/Medarogya/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                   <li> <a href="https://twitter.com/MedArogya" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                   <li> <a href="https://www.youtube.com/channel/UCuFpRJnEfOhlARRK8jXPDtQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a> </li>
                   <li> <a href="https://www.linkedin.com/company/online-doctor-appointment/about/" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                   <li> <a href="https://www.instagram.com/online_doctor_appointment/" target="_blank"><i class="fa fa-instagram"></i></a> </li>
                  
                 </ul>
               </div>
              </div>
			  </form>
            </div>
          </div>
          
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
				
				<div class="col-md-4">
					<a><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/gyne.png" title="Gynecologist" alt="Gynecologist">Gynecologist</a>
				</div>
				<div class="col-md-4">
					<a><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/gpnew.png" title="General Physician" alt="General Physician">General Physician</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/ortho.png" title="Orthopedician" alt="Orthopedician">Orthopedician</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/diet.png" title="Dietitian" alt="Dietitian">Dietitian</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/pedia.png" title="Pediatrician" alt="Dietitian">Pediatrician</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/derma.png" title="Dermatologist" alt="Dermatologist">Dermatologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/psych.png" title="Psychiatrist" alt="Psychiatrist"> Psychiatrist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/andro.png" title="Andrologist" alt="Andrologist"> Andrologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/diabetes.png" title="Diabetologist" alt="Diabetologist"> Diabetologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/urology.png" title="Urologist" alt="Urologist"> Urologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/gastro.png" title="Gastroenterologist" alt="Gastroenterologist"> Gastroenterologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/general-surgeon.png" title="General Surgeon" alt="General Surgeon"> General Surgeon</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/general-surgeon.png" title="Endocrinologist" alt="Endocrinologist"> Endocrinologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/endoo.png" title="Endocrinologist" alt="Endocrinologist"> Endocrinologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/dentist.png" title="Dentist" alt="Dentist"> Dentist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/cardio.png" title="Cardiologist" alt="Cardiologist"> Cardiologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/pulmanologist.png" title="Pulmonologist" alt="Pulmonologist"> Pulmonologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/fertility.png" title="Fertility Specialist" alt="Fertility Specialist"> Fertility Specialist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/cancer.png" title="Oncologist" alt="Oncologist"> Oncologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/neuro-surgeon.png" title="Neurosurgeon" alt="Neurosurgeon"> Neurosurgeon</a>
				</div>	
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/nepro.png" title="Nephrologist" alt="Nephrologist"> Nephrologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/neuro.png" title="Neurologist" alt="Neurologist"> Neurologist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/sports.png" title="Sports Medicine" alt="Sports Medicine"> Sports Medicine</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/cosmotologist.png" title="Cosmetologist" alt="Cosmetologist"> Cosmetologist</a>
				</div>	
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/psych.png" title="Psychotherapist" alt="Psychotherapist"> Psychotherapist</a>
				</div>
				<div class="col-md-4">
					<a  ><img src="https://dg0qqklufr26k.cloudfront.net/wp-content/themes/Divi/images/psych.png" title="Psychiatrist" alt="Psychiatrist"> Psychiatrist</a>
				</div>
           
            
			</div>
                  </li>
				
				  <li class="text-center <?php if($this->uri->segment(1)=='comingsoon' && $this->uri->segment(3)=='2'){ echo "active";} ?>">  <a href="<?php echo base_url('comingsoon/index/2'); ?>"> <i class="fa fa-plus green-col" aria-hidden="true"></i> Pharmacy <div class="label-nav">Medicines & health products</div></a> </li>
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
	   <script>
	   <?php if($this->session->userdata('c_city')==''){ ?>
		$(document).ready(function(){
			if(navigator.geolocation){
				navigator.geolocation.getCurrentPosition(showPosition);
			}else{ 
				$('#loc_add').html('Geolocation is not supported by this browser.');
			}
		});
	<?php } ?>

function showPosition(position) {
	$('#refresh').show();
	var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'<?php echo base_url('home/location'); ?>',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(data){
			var obj = JSON.parse(data);
			$('#refresh').hide();
            if(data.msg=1){
				$("#loc_add").val(obj.city);
				 location.reload(); 
            }else{
                $("#loc_add").val('Not Available');
            }
        }
    });
}
function get_location_wise(val) {
	if(val!=''){
		jQuery.ajax({
			type:'POST',
			url:'<?php echo base_url('home/citywise'); ?>',
			data: {
				city: val,
			},
			success:function(data){
					 location.reload(); 
			}
		});
	}
}
function get_location(){
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else { 
			$('#loc_add').html('Geolocation is not supported by this browser.');
	}
	  
}
function get_hospitalsearch(val){
	$('#home_search').empty();	
	if(val!=''){
		jQuery.ajax({
					url: "<?php echo base_url('slotbooking_ajax/home_search');?>",
					data: {
						search: val,
					},
					dataType: 'HTML',
					type: 'POST',
					success: function (data) {
							 $('#home_search').empty();						
							 $('#home_search').append(data);						
						
					}
			});
	}
}
jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})
</script>