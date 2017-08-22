<?php include('widget/navigation.php'); ?>
<div id="videoPage">
	<div class="videoPage">
    	<a class="closeVideoBtn whiteBtn" href="index.php?menu=landing">CLOSE VIDEO</a>
		<script src="js/jquery-ui-1.8.22.custom.min.js"></script>
        <script src="js/jquery.imagesloaded.min.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
    
        <!-- BigVideo -->
        <script src="js/bigvideo.js"></script>
		<script>
		$(function() {
            var BV = new $.BigVideo({useFlashForFirefox:false});
			BV.init();
		if (Modernizr.touch) {
			BV.show('images/bg_pursuit.jpg');
		} else {
			BV.show('video/MB_Retail.mp4',{altSource:'video/MB_Retail.ogv'});
			_V_("#big-video-vid_html5_api" || "#big-video-vid_flash_api").ready(function(){
			   this.addEvent("ended", function(){
				   window.open("/home", "_self");
			   });
			});
		}
		});
        </script>
    </div><!-- END .videoPage -->
</div><!-- END #videoPage -->