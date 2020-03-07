 <fieldset class="scheduler-border">
				<?php if(isset($mrng_times) && count($mrng_times)>0){ ?>
               <legend class="scheduler-border">Start Time</legend>
               <div class="row">
                  <div class="col-md-1" style="width:100px;padding:0">
                     <img style="width:50px;float:right" src="<?php echo base_url(); ?>assets/front/img/moning.png" alt="mrng" class="img-responsive">
                  </div>
                  <div style="margin-top:12px;padding:0" class="col-md-10 text-left">
                     <h4>Morning <?php echo count($mrng_times); ?> Slots</h4>
                  </div>
               </div>
			   
               <div class="col-md-12 py-4" style="">
			   <?php foreach($mrng_times as $sli){ ?>
					   <?php if($sli['status']!=0){ ?>
						  <label class="col-md-1.5">
							 <input type="radio" id="aslot_time" name="aslot_time" value="<?php echo $sli['time']; ?>">
							 <div class="slot-time-days-comp">
								<?php echo $sli['time']; ?>
							 </div>
						  </label>
					   <?php }else{ ?>
						<label class="col-md-1.5">
							 <input type="radio" id="slot_time" name="slot_time" value="<?php echo $sli['time']; ?>" >
							 <div class="slot-days-avail">
								<?php echo $sli['time']; ?>
							 </div>
						  </label>
					   <?php } ?>
			   <?php } ?>
               
               </div>
			   
			   <?php } ?>
               <div class="clearfix" style="border-bottom:1px solid #ddd;margin:10px 0px;">&nbsp;</div>
               <div class="row">
                  <div class="col-md-1" style="width:100px;padding:0">
                     <img style="width:40px;float:right" src="<?php echo base_url(); ?>assets/front/img/evng.png" alt="mrng" class="img-responsive">
                  </div>
                  <div style="margin-top:8px;padding:0" class="col-md-10 text-left">
                     <h4>Evening <?php echo count($after_times); ?> Slots</h4>
                  </div>
               </div>
               <div class="col-md-12 py-4">
			   <?php foreach($after_times as $ali){ ?>
					   <?php if($ali['status']==1){ ?>
						 <label class="col-md-1.5">
							  <input type="radio" id="aslot_time" name="aslot_time" value="<?php echo $ali['time']; ?>" >
							 <div class="slot-time-days-comp">
								<?php echo $ali['time']; ?>
							 </div>
						  </label>
					   <?php }else{ ?>
						<label class="col-md-1.5"> 
							 <input type="radio" id="slot_time" name="slot_time" value="<?php echo $ali['time']; ?>" >
							 <div class="slot-days-avail">
								<?php echo $ali['time']; ?>
							 </div>
						  </label>
					   <?php } ?>
				<?php } ?>
                
               </div>
            </fieldset>

