<footer class="main-footer">
	<div class="pull-right hidden-xs"> <b>by</b> Vbss</div> <strong>Clinic software system </strong>
</footer>
<script src="<?php echo base_url(); ?>assets/back/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/back/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/jquery.inputmask.extensions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/bootstrap-colorpicker.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/back/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/back/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/back/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/back/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url(); ?>assets/back/js/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/icheck.min.js"></script>
<script>
	$(function () {
	    //Initialize Select2 Elements
	    $(".select2").select2();
	
	    //Datemask dd/mm/yyyy
	    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	    //Datemask2 mm/dd/yyyy
	    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
	    //Money Euro
	    $("[data-mask]").inputmask();
	
	    //Date range picker
	    $('#reservation').daterangepicker();
	    //Date range picker with time picker
	    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
	    //Date range as a button
	    $('#daterange-btn').daterangepicker(
	        {
	          ranges: {
	            'Today': [moment(), moment()],
	            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	            'This Month': [moment().startOf('month'), moment().endOf('month')],
	            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	          },
	          startDate: moment().subtract(29, 'days'),
	          endDate: moment()
	        },
	        function (start, end) {
	          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	        }
	    );
	
	    //Date picker
	    $('.datepicker').datepicker({
	      autoclose: true
	    });
	
	    //iCheck for checkbox and radio inputs
	    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	      checkboxClass: 'icheckbox_minimal-blue',
	      radioClass: 'iradio_minimal-blue'
	    });
	    //Red color scheme for iCheck
	    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
	      checkboxClass: 'icheckbox_minimal-red',
	      radioClass: 'iradio_minimal-red'
	    });
	    //Flat red color scheme for iCheck
	    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
	      checkboxClass: 'icheckbox_flat-green',
	      radioClass: 'iradio_flat-green'
	    });
	
	    //Colorpicker
	    $(".my-colorpicker1").colorpicker();
	    //color picker with addon
	    $(".my-colorpicker2").colorpicker();
	
	   
	  });
</script>
<script>
	$(function () {
	    $("#example1").DataTable();
	    $('#example2').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false
	    });
	  });
</script>
<script>
	$(function () {
	    //Add text editor
	    $("#compose-textarea").wysihtml5();
	  });
</script>
</body>
</html>