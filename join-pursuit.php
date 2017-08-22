<?php include('widget/navigation.php'); ?>
<div id="pursuitPage">
	<div class="pursuitPage">
        <ul class="columns-content clearfix">
            <li class="col-sidebar">
                <div class="titlePaper">
                    <h1><span class="black">THE</span><span class="red">PURSUIT</span></h1>
                </div><!-- END .titlePaper -->
                <div class="sideBar">
                    <div class="entry">
                       	<h6>Life is about making choices and there are only two that will move you forward - yes, and sometimes, no. Maybe won't get you anywhere.</h6>
<h6>So it is with The Pursuit - a game where your choice moves you forward.</h6>
<h6>Complete the phrase DON'T BE A MAYBE by accomplishing tasks asked by Marlboro. Choose whether you will cash in your letters and reap the rewards soon, or wait and get a chance to win something even better - a trip to a breathtaking destination to watch a Formula 1 race.</h6>
                        <div class="row"><a class="readmore rblack" href="index.php?menu=join-pursuit">Join the Pursuit</a></div>
                        <div class="row"><a class="readmore rblack" href="index.php?menu=the-pursuit-detail">Learn More</a></div>
                        <div class="row"><a class="readmore rblack" href="index.php?menu=prize">What You Can Win</a></div>
                        <div class="row"><a class="readmore rblack" href="index.php?menu=grand-prize">See the Grand Prize</a></div>
                    </div><!-- END .entry -->
                    <div class="be-marlboro"></div>
                </div><!-- END .sideBar -->
            </li><!-- END .col-sidebar -->
            <li class="col-main">
            	<div id="joinPursuit">
                    <ul class="columns-2 clearfix">
                        <li class="col2">
                            <div id="text-collection">
                                <span class="red">D</span>
                                <span class="red">O</span>
                                <span class="red">N</span>
                                <span class="red">'</span>
                                <span class="red">T</span>
                                <span class="space"></span>
                                <span>B</span>
                                <span>E</span><br />
                                <span>A</span>
                                <span class="space"></span>
                                <span>M</span>
                                <span>A</span>
                                <span>Y</span>
                                <span>B</span>
                                <span>E</span>
                            </div><!-- END #text-collection -->
                            <div id="text-collected-container">
                                <div id="text-collected">
                                    <h6 class="clue-text">HunT for the letters by completing the tasks</h6>
                                </div><!-- END #text-collected -->
                                <div class="row">
                                    <a class="whiteBtns showPopup" href="#popup-trading-floor">Open Trading Floor</a>
                                </div><!-- END .row -->
                            </div><!-- END #text-collected-container -->
                    	</li><!-- END .col2 -->
                        <li class="col2">
                        	<div id="userBox">
                                <div class="authorBox">
                                    <a class="thumb-user fl" href="#"><img src="content/thumb_user.jpg" /></a>
                                    <h3 class="username fl">ROBB</h3>
                                </div>
                                <div class="accordion">
                                    <h3 class="icon_title icon_tasklist">Task List</h3>
                                    <?php include('widget/task_list.php'); ?>
                                    <h3 class="icon_title icon_message">Messages</h3>
                                    <?php include('widget/message_box.php'); ?>
                                    <h3 class="icon_title icon_request">Trade Requests</h3>
                                    <?php include('widget/trade_request.php'); ?>
                                    <h3 class="icon_title icon_task">Accomplished Tasks</h3>
                                    <?php include('widget/accomplished_tasks.php'); ?>
                                    <h3 class="icon_title icon_update">The Pursuit Updates</h3>
                                    <?php include('widget/pursuit_updates.php'); ?>
                                    <h3 class="icon_title icon_player">The Pursuit Players</h3>
                                    <?php include('widget/pursuit_players.php'); ?>
                                </div><!-- END .accordion -->
                            </div><!-- END #userBox -->
                        </li><!-- END .col2 -->
                    </ul><!-- END .columns-2 -->
                </div><!-- END #joinPursuit -->
            </li><!-- END .col-main -->
        </ul>
    </div><!-- END .dyoshirtPages -->
</div><!-- END #dyoshirtPages -->
 <?php include('widget/popup_trading_floor.php'); ?>
 <?php include('widget/popup_post_trade.php'); ?>
 <?php include('widget/popup_post_trade_message.php'); ?>
 <?php include('widget/popup_trade_open.php'); ?>
 <?php include('widget/popup_trade_confirm.php'); ?>
 <?php include('widget/popup_trade_success.php'); ?>
 <?php include('widget/popup_task.php'); ?>
 <?php include('widget/popup_get_letter.php'); ?>
 <?php include('widget/popup_message_black.php'); ?>
