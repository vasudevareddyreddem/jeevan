<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/style.css">
  
  	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/custom.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/AdminLTE.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/css/blue.css">
</head>
<body class="login-page login-bg">
<div class="login-box  ">
  <div class="login-logo">
    <a href="#"><b style="color:#fff;">Forgot Password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Forgot Password</p>
	 <form action="<?php echo base_url('admin/forgotpost'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button  type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
        </div>
      </div>
    </form>
</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/back/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/back/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/back/js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
