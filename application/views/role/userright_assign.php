
<?php 

if(count($menulist)>0){
	foreach($menulist as $li){
	$r_ids[]=$li['m_m_id'];
	}

}else{
$r_ids[]=array();
}	?>
<?php foreach($m_list as $li){ ?>
<div class="checkbox">
<label>
<?php if(in_array($li['m_m_id'],$r_ids)){ ?>
<input type="checkbox" checked name="role_options[]" value="<?php echo $li['m_m_id']; ?>"><?php echo $li['m_menu_name']; ?>
<?php }else{ ?>
<input type="checkbox" name="role_options[]" value="<?php echo $li['m_m_id']; ?>"><?php echo $li['m_menu_name']; ?>
<?php } ?>
</label>
</div>
<?php } ?>
<?php exit;?>