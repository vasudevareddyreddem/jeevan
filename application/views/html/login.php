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
	<a href="<?php echo base_url(); ?>">
	<div class="text-center" style="margin:0 auto;">
		<img class="logo-stye" style =" " src="<?php echo base_url(); ?>assets/front/img/logo.png" >
	</div></a>
	<div class=" " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg show ">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form action="<?php echo base_url('login/loginpost'); ?>" method="post"role="form" class="form-horizontal">
                                					<?php $csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
					); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

								<div class="form-group">
                                    <label for="email" class="col-sm-4 control-label">
                                        Email/Mobile</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email/Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-4 control-label">
                                        Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="<?php echo base_url('login/forgotpassword'); ?>">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form action="<?php echo base_url('login/registerpost'); ?>" method="post" role="form" class="form-horizontal">
                                					<?php $csrf = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
					); ?>
					<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />

								<div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" />
                                    </div>
                                </div> 
								<div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                       Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="confirmpwd" name="confirmpwd" placeholder="Confirm Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <a href="<?php echo base_url('login'); ?>" type="button" class="btn btn-default btn-sm">
                                            Cancel</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h5 style="margin-bottom:15px;">
                                    Sign in with</h5>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="javascript:void(0);" onclick="fbLogin();" class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                </div>
                            </div> 
							<div class="col-md-12 mt-2">
                                <div class="btn-group btn-group-justified">
                                     <a href="<?php echo base_url('auth_oa2/session/google'); ?>" class="btn btn-danger">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i> Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
<!-- Facebook Login starts -->
<script>
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '2226857630661954', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.2' // use graph api version 2.8
    });
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //getFbUserData(); //display user data
        }
    });
};

// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        location.href = "<?php echo base_url('login');?>";
    });
}

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            getFbUserData(); // Get and display the user profile data
        } else { 
            alert('User cancelled login or did not fully authorize.');
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {fields: 'id,name,first_name,last_name,email,picture,gender,birthday'},
    function (response) {
        //document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        //console.log(response.id);
        $.ajax({
			url: "<?php echo base_url('login/checkfacebooklogin');?>",
			type: 'POST',
			data: {'id': response.id,'email': response.email,'name': response.name },
			dataType: 'json',
			success: function (resultdata) {
				//alert(resultdata.url);return false;
				if(resultdata.msg == 1){
                  location.reload();
				}else if(resultdata.msg == 2){
					window.location=resultdata.url;
				}else{
					alert('technical problem will occurred. Please try again.');
				}
				
			}
		});
    });
}
</script>