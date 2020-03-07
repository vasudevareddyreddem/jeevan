<style>
	.navbar{
		background-image: linear-gradient(45deg, #fff 30%, #003f7f 30%);
    min-height: 70px !important;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.08);
}

.navbar-nav li a {
    color: #fff;
    font-size: 16px;
    padding: 5px 10px;
    transition: all 0.5s ease;
    font-weight: 500;
    opacity: 1;
    text-align: center;
}
	.label-nav {
    font-size: 10px;
    color: #fff;
}

.razorpay-payment-button{
		 background:#5cb85c;
		 color:#fff;
		 padding:7px;
		 border:none;
		 border-radius:3px;
		 margin-top:5px;
		 float:right;
		 
	 }
</style>
<div class="header-space sm_hide"></div>

    <div id="main" class="mt-4">
        <!-- About Us Section Start Here-->
        <section  class="">
			<div class="section-padding mt-4">
				<div class="container py-4">
				<div class="row">
				<div class="col-md-7">
				<h3 style="margin-bottom:5px;margin-top:20px;">Payment Conformation</h3>
				<table class="table table-bordered mt-4" style="width:100%">
					<tr>
						<th>Doctor Name</th>	
						<td><?php echo isset($doct_da['name'])?$doct_da['name']:''; ?></td>
					</tr>
					<tr>
						<th>Hospital Name</th>	
						<td><?php echo isset($doct_da['hos_name'])?$doct_da['hos_name']:''; ?></td>
					</tr>
					<tr>
						<th>Patient Name</th>	
						<td><?php echo isset($a_data['s_name'])?$a_data['s_name']:''; ?></td>
					
					</tr>
					
					<tr>
						<th>Time slot</th>	
						<td>
						<?php echo isset($a_data['a_date'])?date("d-m-Y", strtotime($a_data['a_date'])):''; ?>
						<?php echo isset($a_data['time'])?$a_data['time']:''; ?>
						</td>
					
					</tr>
					<tr>
						<th>Type of Vist</th>	
						<td><?php echo isset($a_data['procedure'])?$a_data['procedure']:''; ?></td>
					
					</tr>
					<tr>
						<th>Consultation Fee</th>	
						<td>₹ <?php echo isset($a_data['consultation_fee'])?$a_data['consultation_fee']:''; ?></td>
					
					</tr>
				</table>
				</div>
				<div class="col-md-5">
					<h3 style="margin-bottom:5px;margin-top:20px;"> Payment Details</h3>
					<table class="table table-bordered mt-4" style="width:100%">
					<tr>
						<th>Amount</th>	
						<td>₹ <?php echo isset($a_data['consultation_fee'])?$a_data['consultation_fee']:''; ?></td>
					</tr>
					<tr>
						<th>Coupon code -(MEDAROGYA)</th>	
						<td>₹ <?php echo isset($a_data['discount'])?$a_data['discount']:''; ?></td>
					</tr>
					<tr>
						<th>Garand Total</th>	
						<td>₹ <?php echo isset($a_data['tatol_fee'])?$a_data['tatol_fee']:''; ?></td>
					</tr>
					
				</table>
				<div>
				
				<form id="paymentform" name="paymentform" action="<?php echo base_url('slotbooking/confirmpost'); ?>" method="POST">
							<?php $csrf = array(
								'name' => $this->security->get_csrf_token_name(),
								'hash' => $this->security->get_csrf_hash()
						); ?>
						<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
							<!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
							<input type="hidden" name="s_name" value="<?php echo isset($a_data['s_name'])?$a_data['s_name']:''; ?>">
							<input type="hidden" name="s_email" value="<?php echo isset($a_data['s_email'])?$a_data['s_email']: ''; ?>">
							<input type="hidden" name="s_mobile" value="<?php echo isset($a_data['s_mobile'])?$a_data['s_mobile']:''; ?>">
							<input type="hidden" name="s_age" value="<?php echo isset($a_data['s_age'])?$a_data['s_age']:''; ?>">
							<input type="hidden" name="s_gender" value="<?php echo isset($a_data['s_gender'])?$a_data['s_gender']:''; ?>">
							<input type="hidden" name="procedure" value="<?php echo isset($a_data['procedure'])?$a_data['procedure']:''; ?>">
							<input type="hidden" name="c_id" value="<?php echo isset($a_data['c_id'])?$a_data['c_id']:''; ?>">
							<input type="hidden" name="d_id" value="<?php echo isset($a_data['d_id'])?$a_data['d_id']:''; ?>">
							<input type="hidden" name="h_id" value="<?php echo isset($a_data['h_id'])?$a_data['h_id']:''; ?>">
							<input type="hidden" name="a_date" value="<?php echo isset($a_data['a_date'])?$a_data['a_date']:''; ?>">
							<input type="hidden" name="time" value="<?php echo isset($a_data['time'])?$a_data['time']:''; ?>">
							<input type="hidden" name="consultation_fee" value="<?php echo isset($a_data['consultation_fee'])?$a_data['consultation_fee']:''; ?>">
							<input type="hidden" name="discount" value="<?php echo isset($a_data['discount'])?$a_data['discount']:''; ?>">
							<input type="hidden" name="tatol_fee" value="<?php echo isset($a_data['tatol_fee'])?$a_data['tatol_fee']:''; ?>">
							<div class="col-md-12  text-center">
								<button type="submit" class="btn btn-success bnt-success">Confirm</button>
							</div>
				</form>
				</div>
				</div>
				</div>
				
				</div>
			</div>
		</section>
	</div>