<div class="content-wrapper">
   <section class="content-header mb-4">
      <h1>
         Update Terms and conditions and Privacy Policy
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <!-- general form elements -->
            <div class=" ">
               <div style="padding:20px;">
                  <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('terms/addpost'); ?>" enctype="multipart/form-data">
				  	<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						 <div class="row">
						 <div class="form-group col-md-12"><label>Terms and conditions </label></div>
                           <div class="form-group col-md-12">
                                 <textarea  class="form-control" id="editor1" name="termsandconditions" placeholder="Enter Name" /> <?php echo isset($details['termsandconditions'])?$details['termsandconditions']:'Coming Soon'; ?></textarea>
                           </div>
                           </div> 
						   <div class="row">
                           <div class="form-group col-md-12"><label>Privacy Policy </label><div>
                           <div class="form-group col-md-12">
                                 <textarea  class="form-control" id="editor2" name="privacypolicy" placeholder="Enter Name" /> <?php echo isset($details['privacypolicy'])?$details['privacypolicy']:'Coming Soon'; ?></textarea>
                           </div>
                           </div>
						   
                     
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                           <div class="col-lg-6 text-center">
                              <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Update</button>
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
<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
$(function () {
 CKEDITOR.replace('editor1');
 $(".textarea").wysihtml5();
});$(function () {
 CKEDITOR.replace('editor2');
 $(".textarea").wysihtml5();
});
$(document).ready(function() {
		 //Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });
	    $('#defaultForm').bootstrapValidator({
			fields: {
	            name: {
				   validators: {
					   notEmpty: {
							message: 'Name is required'
						}
					}
				},image: {
				   validators: {
						regexp: {
						regexp: "(.*?)\.(png|Png|jpg|jpeg||Jpg|Jpeg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,gif files are allowed'
						}
					}
				},msg: {
				   validators: {
					   notEmpty: {
							message: 'Message is required'
						}
					}
				}
	        }
	    });
	
	});
</script>

