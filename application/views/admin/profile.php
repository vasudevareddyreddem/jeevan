 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
						<?php if($u_d['profile_pic']!=''){ ?>
								<img src="<?php echo base_url('assets/profile_pic/'.$h_details['profile_pic']); ?>" class="profile-user-img img-responsive img-circle" alt="User Image">
							<?php }else{ ?>
								<img src="<?php echo base_url(); ?>assets/back/img/user.png" class="profile-user-img img-responsive img-circle" alt="User Image">
							<?php } ?>
              <h3 class="profile-username text-center"><?php echo isset($u_d['name'])?$u_d['name']:''; ?></h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo isset($u_d['email'])?$u_d['email']:''; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Moible	</b> <a class="pull-right"><?php echo isset($u_d['mobile'])?$u_d['mobile']:''; ?></a>
                </li>
				<li class="list-group-item">
                  <a href="<?php echo base_url('profile/changepassword'); ?>" class="">Change Password</a>
                  <a href="<?php echo base_url('dashboard/logout'); ?>" class="pull-right">Sign Out</a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Information</h3>
              <a href="<?php echo base_url('profile/edit'); ?>" class=" pull-right btn btn-primary btn-sm"> Edit</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-user margin-r-5"></i> Name</strong>
				<p class="h4">
               <?php echo isset($u_d['name'])?$u_d['name']:''; ?>
              </p>
				<hr>  
			  <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
				<p class="h4">
               <?php echo isset($u_d['email'])?$u_d['email']:''; ?>
              </p>
			  <hr>  
			  <strong><i class="fa fa-mobile margin-r-5"></i> Mobile</strong>
			  <p class="h4">
               <?php echo isset($u_d['mobile'])?$u_d['mobile']:''; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo isset($u_d['address'])?$u_d['address']:''; ?></p>

            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

