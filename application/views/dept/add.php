<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Add Department 
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Add Department</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
				
					<div style="padding:20px;">
						<form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('department/addpost'); ?>">
							
								<div class=" row ">
						<div class=" col-md-6 ">
							 <table class="table table-bordered table-hover" id="tab_logic">
								<thead>
									<tr >
										<th class="text-center bg-primary">
											S.no
										</th>
										<th class="text-center bg-primary">
										   Department Name
										</th>
									</tr>
								</thead>
								<tbody>
									<tr id='addr0'>
										<td class="text-center">
										1
										</td>
										<td >
										<div class="form-group col-md-12">
										<div class="">
											<input type="text" class="form-control" name="d_name[]" placeholder="Enter Department name" />
											</div>
										</div>
									   
										</td>
									</tr>
									<tr id='addr1'></tr>
								</tbody>
							</table>
						</div>
						</div>
						<div  class=" row">
						<div  class=" col-md-6 clearfix">
							 <a id="add_row" class="btn btn-primary pull-left text-white btn-xs">Add row</a> <a id='delete_row' class="pull-right btn btn-danger text-white btn-xs">Delete row</a>
						</div>
						</div>
								
							
						<div class="clearfix">&nbsp;</div>
							
							<div class="form-group">
								<div class="col-lg-6 ">
							
									<button type="submit" class="btn btn-primary btn-block" name="signup" value="Sign up">Add</button>
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
 <script type="text/javascript">
	      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><div class='form-group col-md-12'><div class=''><input name='d_name[]' type='text' placeholder='Enter Department Name' class='form-control input-md mt-2'  /></div></div> </td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });
</script>
</div>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#defaultForm').bootstrapValidator({
	 fields: {
	            'd_name[]': {
	                validators: {
	                    notEmpty: {
	                        message: 'Department Name is required'
	                    }
	                }
	            }
	        }
	    });
	});
</script>
