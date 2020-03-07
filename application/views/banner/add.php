<div class="content-wrapper">
   <section class="content-header mb-4">
      <h1>
         Add Banner
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url('banners/index'); ?>"><i class="fa fa-list"></i> list</a></li>
         <li class="active">Add</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
            <div class=" ">
               <div style="padding:20px;">
                  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('Banners/addpost'); ?>" enctype="multipart/form-data">
				  	<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						 <div class="row">
                          
						   <div class="form-group col-md-6">
                              <label class="col-lg-4 control-label">Image</label>
                              <div class="col-md-8">
                                 <input type="file" class="form-control" name="image" />
                              </div>
                           </div>
						  </div>
                     
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                           <div class="col-lg-6 text-center">
                              <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add</button>
                           </div>
                        </div>
                  </form>
                  <div class="clearfix">&nbsp;</div>
                  </div>
               </div>
               <!-- /.box -->
            </div>
         </div>
         <!--/.col (right) -->
      </div>
      <!-- /.row -->
   </section>
</div>
<script type="text/javascript">
$(document).ready(function() {
		 //Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });
	    $('#defaultForm').bootstrapValidator({
			fields: {
	            place: {
				   validators: {
					   notEmpty: {
							message: 'Display Place is required'
						}
					}
				},image: {
				   validators: {
					   notEmpty: {
							message: 'Image is required'
						},
						regexp: {
							regexp: "(.*?)\.(png|jpeg|jpg|Png|Jpeg|gif)$",
							message: 'Uploaded file is not a valid. Only png,jpeg,gif files are allowed'
						}
					}
				}
	        }
	    });
	
	});
</script>

