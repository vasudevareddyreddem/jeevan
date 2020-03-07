<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Online Doctor Appointment | Medargoya</title>
<meta name="description" content="#">
<meta name="keywords" content="#">
<link rel="icon" href="img/fav.png">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
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

</head>
<style>
.nav-tabs {
    margin-bottom: 15px;
}
.sign-with {
    
    padding:0px  20px;
}
div#OR {
    height: 30px;
    width: 30px;
    border: 1px solid #C2C2C2;
    border-radius: 50%;
    font-weight: bold;
    line-height: 28px;
    text-align: center;
    font-size: 12px;
    float: right;
    position: absolute;
    right: -16px;
    top: 40%;
    z-index: 1;
    background: #DFDFDF;
}



</style>
<body class="bg-login">
	<div class="text-center">
		<a href="<?php echo base_url('login'); ?>"><img class="logo-stye"  src="<?php echo base_url(); ?>assets/front/img/logo.png" ></a>
	</div>
	<div class=" " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg show ">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">
                    Forgot password </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            
                            <div class="tab-pane active" id="Registration">
                                <form action="<?php echo base_url('login/forgotpost'); ?>" method="post" role="form" class="form-horizontal">
                               <?php $csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
					); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Email/Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter  Email/Mobil"  value=""  required>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                           Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                     
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


 <script src="<?php echo base_url(); ?>assets/front/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/wow.min.js"></script>
 
  <script src="<?php echo base_url(); ?>assets/front/js/smooth-scroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.countTo.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/jquery.plugin.min.js"></script> 
  <script src="<?php echo base_url(); ?>assets/front/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/nanoscroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/front/js/script.js"></script>
      
</body>

</html>