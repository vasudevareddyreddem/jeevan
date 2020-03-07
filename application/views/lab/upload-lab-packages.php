<div class="content-wrapper">
<section class="content-header mb-4">
  <h1>
	 Package Add
  </h1>
  <ol class="breadcrumb">
	 <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li class="active">Package Add </li>
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

                            <div id="tab1" class="container tab-pane <?php if(isset($tab) && $tab ==''){ echo " active"; } ?>"><br>
                                <form class="pad30 form-horizontal" action="<?php echo base_url('lab/testpackagepost'); ?>" method="post" id="add_package_name" name="add_package_name">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Test Package Name</label>
                                            <input type="text" class="form-control" name="test_package_name" id="test_package_name" placeholder="Enter Package Name">
                                        </div>
										</div>

                                        <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Test Type</label>
                                            <select class="form-control" name="test_type" id="test_type" onchange="get_lab_names_list(this.value);" >
                                                <option value="">Select Tests</option>
                                                <?php if(isset($test_type_lists) && count($test_type_lists)>0){ ?>
                                                <?php foreach($test_type_lists as $lis){ ?>
                                                <option value="<?php echo $lis['test_type']; ?>">
                                                    <?php echo $lis['test_type']; ?>
                                                </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div> 

										<div class="form-group col-md-6">
                                            <label>Test Names</label>
                                            <select class="form-control select2" name="test_name[]" id="test_name" multiple="multiple">
                                                <option value="">Select Tests</option>
                                                <?php if(isset($test_lists) && count($test_lists)>0){ ?>
                                                <?php foreach($test_lists as $lis){ ?>
                                                <option value="<?php echo $lis['l_id']; ?>">
                                                    <?php echo $lis['test_name']; ?>
                                                </option>
                                                <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </div>
										</div>
										<div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Discount</label>
                                            <input type="text" class="form-control" name="discount" id="discount" placeholder="Enter Discount">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Amount</label>
                                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                                        </div>
                                        </div>
										<div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Instructions</label>
                                            <input type="text" class="form-control" name="instruction" id="instruction" placeholder="Enter Instructions">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Sample Pickup Charges</label>
                                            <input type="text" class="form-control" name="delivery_charge" id="delivery_charge" placeholder="Enter Sample Pickup Charges" value="">
                                        </div>
                                        </div>
										<div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Time taken for uploading of reports</label>
                                            <input type="text" class="form-control" name="reports_time" id="reports_time" placeholder="Enter Time taken for uploading of reports in hrs" value="">
                                        </div>
                                        </div>
										
                                        <div class="clearfix">&nbsp;</div>
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Upload</button>
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
    $(document).ready(function() {
        $('#add_package_name').bootstrapValidator({


            fields: {
                test_package_name: {
                    validators: {
                        notEmpty: {
                            message: 'Package Name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9. ]+$/,
                            message: 'Package Name can only consist of alphanumeric, space and dot'
                        }
                    }
                },
                'test_name[]': {
                    validators: {
                        notEmpty: {
                            message: 'Test Name is required'
                        }
                    }
                },
                test_duartion: {
                    validators: {
                        notEmpty: {
                            message: 'Estimated Duration is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Estimated Duration wont allow <> [] = % '
                        }
                    }
                },
				test_type: {
                    validators: {
                        notEmpty: {
                            message: 'Test Type is required'
                        }
                    }
                },
                discount: {
                    validators: {
                        notEmpty: {
                            message: 'Discount is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]+$/,
                            message: 'Discount can only consist of digits, space and dot'
                        }
                    }
                },
                delivery_charge: {
                    validators: {
                        notEmpty: {
                            message: 'Sample pickup charges is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]+$/,
                            message: 'Sample Pickup Charges can only consist of digits, space and dot'
                        }
                    }
                },
                reports_time: {
                    validators: {
                        notEmpty: {
                            message: 'Time taken for uploading of reports is required'
                        },
                        regexp: {
                            regexp: /^[0-9.: ]+$/,
                            message: 'Time taken for uploading of reports can only consist of digits, space and dot'
                        }
                    }
                },
                instruction: {
                    validators: {
                        notEmpty: {
                            message: 'Instructions is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Instructions wont allow <> [] = % '
                        }
                    }
                },
                amount: {
                    validators: {
                        notEmpty: {
                            message: 'Amount is required'
                        },
                        regexp: {
                            regexp: /^[0-9. ]+$/,
                            message: 'Amount can only consist of digits, space and dot'
                        }
                    }
                }
            }
        })

    });
</script>