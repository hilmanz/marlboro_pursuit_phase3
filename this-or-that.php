<?php include('widget/navigation.php'); ?>
<div id="thisorthatPage">
	<div class="thisorthatPage">
        <ul class="columns-content clearfix">
            <li class="col-sidebar">
                <div class="titlePaper">
                    <h1><span class="red">THIS</span> <span class="black">OR</span> <span class="red">THAT</span></h1>
                </div><!-- END .titlePaper -->
                <div class="sideBar">
                    <div class="be-marlboro"></div>
                </div><!-- END .sideBar -->
            </li><!-- END .col-sidebar -->
            <li class="col-main">
            	<div class="centerButton">
                <h1>THIS WEEK'S DECISION</h1>
            	<a class="whiteBtns showPopup" href="#popup-pose-image-upload">Pose</a>
                <h2>OR</h2>
            	<a class="whiteBtns showPopup" href="#popup-play-image-upload">Play</a>
                </div>
            </li><!-- END .col-main -->
        </ul>
    </div><!-- END .dyoshirtPages -->
</div><!-- END #dyoshirtPages -->
<?php include('widget/popup_play_image_upload.php'); ?>
<?php include('widget/popup_pose_image_upload.php'); ?>