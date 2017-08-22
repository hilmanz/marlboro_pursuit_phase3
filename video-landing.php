
<div id="videoPage">
	<div class="videoPage">
    	<a class="skipBtn whiteBtn" href="index.php?menu=landing">Skip This</a>
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
				BV.show('video/MB_Retail.mp4', {altSource:'video/MB_Retail.ogv'});
            }
	    });
        </script>
    </div><!-- END .videoPage -->
</div><!-- END #videoPage -->