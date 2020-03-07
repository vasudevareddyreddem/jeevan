<style>

@-webkit-keyframes scaleAnimation {
    0% {
        opacity: 0;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes scaleAnimation {
    0% {
        opacity: 0;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
    }
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@-webkit-keyframes drawCircle {
    0% {
        stroke-dashoffset: 151px;
    }
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes drawCircle {
    0% {
        stroke-dashoffset: 151px;
    }
    100% {
        stroke-dashoffset: 0;
    }
}

@-webkit-keyframes drawCheck {
    0% {
        stroke-dashoffset: 36px;
    }
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes drawCheck {
    0% {
        stroke-dashoffset: 36px;
    }
    100% {
        stroke-dashoffset: 0;
    }
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

#successAnimationCircle {
    stroke-dasharray: 151px 151px;
    stroke: #ffc600;
}

#successAnimationCheck {
    stroke-dasharray: 36px 36px;
    stroke: #ffc600;
}

#successAnimationResult {
    fill: #ffc600;
    opacity: 0;
}

#successAnimation.animated {
    -webkit-animation: 1s ease-out 0s 1 both scaleAnimation;
    animation: 1s ease-out 0s 1 both scaleAnimation;
}

#successAnimation.animated #successAnimationCircle {
    -webkit-animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCircle, 0.3s linear 0.9s 1 both fadeOut;
    animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCircle, 0.3s linear 0.9s 1 both fadeOut;
}

#successAnimation.animated #successAnimationCheck {
    -webkit-animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCheck, 0.3s linear 0.9s 1 both fadeOut;
    animation: 1s cubic-bezier(0.77, 0, 0.175, 1) 0s 1 both drawCheck, 0.3s linear 0.9s 1 both fadeOut;
}

#successAnimation.animated #successAnimationResult {
    -webkit-animation: 0.3s linear 0.9s both fadeIn;
    animation: 0.3s linear 0.9s both fadeIn;
}

</style>
<div class="header-space"></div>

    
    <section>
		<div class="container">
		
		
<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Appointment  Booked Successfully</h2>
        <div class="icon" >
            <div class="success" >
               <img  style="width:100px;" src="<?php echo base_url(); ?>assets/front/img/success.gif">
            </div>
        </div>
        <h3>Dear, <?php echo isset($ap_d['pname'])?$ap_d['pname']:''; ?></h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for Booking, if you any enquiries please contact our Medargoya Contact Person</p>
		<div class="text-center">
		<?php if($ap_d['profile_pic']!=''){ ?>
			<img style="height:80px;width:80px;border-radius:50%;border:2px solid #ddd;" src="<?php echo base_url('assets/profile_pic/'.$ap_d['profile_pic']); ?>">
		<?php }else{ ?>
				<img style="height:80px;width:80px;border-radius:50%;border:2px solid #ddd;" src="<?php echo base_url(); ?>assets/front/img/contact-person.png">
		<?php } ?>
			<div> <?php echo isset($ap_d['name'])?$ap_d['name']:''; ?></div>
			<div> <?php echo isset($ap_d['mobile'])?$ap_d['mobile']:''; ?></div>
		</div>
      
    <br><br>
        </div>
        
	</div>
</div>
		</div>
    </section>
  
  
	
       