<ul class="list-group search-data myList1"  style="">
			<?php if(isset($hos_list) && count($hos_list)>0){ ?>
				<?php foreach($hos_list as $li){ ?>
					<a href="<?php echo base_url('hospitals/details/'.base64_encode($li['id'])); ?>"><li class="list-group-item"> <?php echo $li['name']; ?></li></a>
				<?php } ?>
			<?php } ?>
			<?php if(isset($doct_list) && count($doct_list)>0){ ?>
				<?php foreach($doct_list as $li){ ?>
					<a href="<?php echo base_url('slotbooking/index/'.base64_encode($li['id'])); ?>"><li class="list-group-item"> <?php echo $li['name']; ?></li></a>
				<?php } ?>
			<?php } ?>
			
			<?php if(count($hos_list)==0 &&  count($doct_list)==0 ){ ?>
				<li class="list-group-item">No data found</li>
			<?php } ?>
 </ul> 