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
        <br><br> <h2 style="color:#0fad00">Page is under Construction</h2>
        <div class="icon" >
            <div class="success" >
               <img  style="width:400px;" src="<?php echo base_url(); ?>assets/front/img/comingsoon.gif">
            </div>
        </div>
       
        <p style="font-size:20px;color:#5C5C5C;">Thank you. The page is under Construction  .  </p>
		
      
    <br><br>
        </div>
        
	</div>
</div>
		</div>
    </section>
  
  
	
       