<div class="content-wrapper">
<section class="content-header mb-4">
  <h1>
	 Package Lists
  </h1>
  <ol class="breadcrumb">
	 <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li class="active">Package Lists</li>
  </ol>
</section>
   <section class="content">
      <div class="container card bg-white">
      <div class="row">

       <div class="col-md-12">
                <div class="card bg-white">
                  <div class="card-body">
                        

                        <!-- Tab panes -->
                        <div class="tab-content">

                           
                            <div id="tab2" class="container tab-pane active"><br>
                                <div class="table-responsive">
                                    <?php if(isset($packages_test_lists) && count($packages_test_lists)>0){ ?>
                                    <table id="lablist" class="display table table-striped" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Test Package Name</th>
                                                <th>Test Name</th>
                                                <th>MRP</th>
                                                <th>Discount</th>
                                                <th>Amount</th>
                                                <th>Percentage</th>
                                                <th>Date & Time</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($packages_test_lists as $list){ ?>
                                            <tr>
                                                <td>
                                                    <?php echo isset($list['test_package_name'])?$list['test_package_name']:''; ?>
                                                </td>
                                                <td>
                                                    <?php if(isset($list['package_test_list']) && count($list['package_test_list'])>0){ ?>
                                                    <?php foreach($list['package_test_list'] as $li){ ?>
                                                    <?php 
											echo isset($li['test_name'])?$li['test_name']:'';
											echo '<br>';

											?>
                                                    <?php } ?>
                                                    <?php } ?>

                                                </td>
                                                <td>
                                                    <?php echo isset($list['amount'])?$list['amount']:''; ?>
                                                </td>
                                                <td>
                                                    <?php echo isset($list['discount'])?$list['discount']:''; ?>
                                                </td>
                                                <td>
                                                    <?php echo isset($list['amount'])?$list['amount']-$list['discount']:''; ?>
                                                </td>
                                                <td>
                                                    <?php echo isset($list['percentage'])?$list['percentage']:''; ?>
                                                </td>
                                                <td>
                                                    <?php echo isset($list['created_at'])?$list['created_at']:''; ?>
                                                </td>
                                                <td>
                                                    <?php if($list['status']==1){ echo "Active";}else{ echo "Deactive";} ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('lab/packageedit/'.base64_encode($list['l_t_p_id'])); ?>"><button class="btn btn-xs btn-primary">Edit</button></a>&nbsp;
                                                    <a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['l_t_p_id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" data-toggle="modal" data-target="#myModal"><button class="btn btn-xs btn-info">
                                                            <?php if($list['status']==0){ echo "Active"; }else{  echo "Deactive"; } ?></button></a>&nbsp;
                                                    <a href="javascript;void(0);" onclick="admindelete('<?php echo base64_encode(htmlentities($list['l_t_p_id'])); ?>');adminstatus2('<?php echo $list['status'];?>')" data-toggle="modal" data-target="#myModal"><button class="btn btn-xs btn-danger">Delete</button></a>
                                                </td>

                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
</div>



<script>

function get_lab_names_list(name){
	if(name!=''){
		jQuery.ajax({
					url: "<?php echo site_url('lab/get_test_names_list');?>",
					data: {
						t_name: name,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					$('#test_name').empty();
						temp1='<option value="" disabled>select</option>';
						$('#test_name').append(temp1); 
					  $.each(data.list, function(i, product) {
								$('#test_name').append('<option value="'+product.l_id+'">'+product.test_name+'</option>').trigger("chosen:updated"); 
							
								});
						}
				});
	}
	
}
    $(document).ready(function() {
        $('#lablist').DataTable({
            "order": [
                [5, "desc"]
            ]
        });
    });

    function admindeactive(id) {
        $(".popid").attr("href", "<?php echo base_url('lab/packagestatus'); ?>" + "/" + id);
    }

    function adminstatus(id) {
        if (id == 1) {
            $('#content1').html('Are you sure you want to Deactivate?');

        }
        if (id == 0) {
            $('#content1').html('Are you sure you want to activate?');
        }
    }

    function admindelete(id) {
        $(".popid").attr("href", "<?php echo base_url('lab/packagedeletes'); ?>" + "/" + id);
    }

    function adminstatus2(id) {

        $('#content1').html('Are you sure you want to delete?');

    }
</script>