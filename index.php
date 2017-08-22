<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
    <?php include('meta.php'); ?>
</head>
<?php 
if($_GET['menu']=='register'){ ?>
<body id="registerPage">
<?php }else if($_GET['menu']=='register2'){?>
<body id="registerPage">
<?php  }else if($_GET['menu']=='register3'){?> 
<body id="registerPage">
<?php  }else if($_GET['menu']=='register3a'){?>
<body id="registerPage">
<?php  }else if($_GET['menu']=='register3b'){?>
<body id="registerPage">
<?php  }else if($_GET['menu']=='landing'){?>
<body id="landing">
<?php  }else if($_GET['menu']=='video'){?>
<body id="videoPage">
<?php  }else if($_GET['menu']=='video-small'){?>
<body id="videoPage">
<?php  }else if($_GET['menu']=='video-landing'){?>
<body id="videoPage" class="videoLanding">
<?php  }else if($_GET['menu']=='dyo-shirt'){?>
<body id="dyoshirtPage">
<?php  }else if($_GET['menu']=='dyo-shirt-winner'){?>
<body id="dyoshirtPage">
<?php  }else if($_GET['menu']=='my-account'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='games'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='game1'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='game2'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='game-play1'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='game-play2'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='this-or-that'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='gift'){?>
<body id="myaccountPage">
<?php  }else if($_GET['menu']=='the-pursuit'){?>
<body id="the-pursuit">
<?php  }else if($_GET['menu']=='the-pursuit-detail'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='the-pursuit-learnmore'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='join-pursuit'){?>
<body id="join-pursuit">
<?php  }else if($_GET['menu']=='prize'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='grand-prize'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='mscape'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='mscape-photos'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='mscape-videos'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='mscape-itinerary'){?>
<body id="the-pursuit-detail">
<?php  }else if($_GET['menu']=='news-home'){?>
<body id="news-page">
<?php  }else if($_GET['menu']=='news'){?>
<body id="news-page">
<?php  }else if($_GET['menu']=='news-landing'){?>
<body id="news-page">
<?php  }else if($_GET['menu']=='past-event'){?>
<body id="news-page">
<?php  }else if($_GET['menu']=='upcoming-event'){?>
<body id="news-page">
<?php }else{ ?>
<body>
<?php }?>
	<div id="body" class="wrapper">
		<?php 
        if($_GET['menu']=='register'){
            include("register.php");
        }else if($_GET['menu']=='register2'){ 
            include("register2.php");
        }else if($_GET['menu']=='register3'){ 
            include("register3.php");
        }else if($_GET['menu']=='register3a'){ 
            include("register3a.php");
        }else if($_GET['menu']=='register3b'){ 
            include("register3b.php");
        }else if($_GET['menu']=='landing'){ 
            include("landing.php");
        }else if($_GET['menu']=='video'){ 
            include("video.php");
        }else if($_GET['menu']=='video-small'){ 
            include("video-small.php");
        }else if($_GET['menu']=='video-landing'){ 
            include("video-landing.php");
        }else if($_GET['menu']=='trackingcode'){ 
            include("trackingcode.php");
        }else if($_GET['menu']=='dyo-shirt'){ 
            include("dyo-shirt.php");
        }else if($_GET['menu']=='dyo-shirt-winner'){ 
            include("dyo-shirt-winner.php");
        }else if($_GET['menu']=='my-account'){ 
            include("my-account.php");
		}else if($_GET['menu']=='this-or-that'){ 
			include("this-or-that.php");
        }else if($_GET['menu']=='the-pursuit'){ 
            include("the-pursuit.php");
        }else if($_GET['menu']=='the-pursuit-detail'){ 
            include("the-pursuit-detail.php");
        }else if($_GET['menu']=='the-pursuit-learnmore'){ 
            include("the-pursuit-learnmore.php");
        }else if($_GET['menu']=='join-pursuit'){ 
            include("join-pursuit.php");
        }else if($_GET['menu']=='prize'){ 
            include("prize.php");
        }else if($_GET['menu']=='grand-prize'){ 
            include("grand-prize.php");
        }else if($_GET['menu']=='mscape'){ 
            include("mscape.php");
        }else if($_GET['menu']=='mscape-photos'){ 
            include("mscape-photos.php");
        }else if($_GET['menu']=='mscape-videos'){ 
            include("mscape-videos.php");
        }else if($_GET['menu']=='mscape-itinerary'){ 
            include("mscape-itinerary.php");
        }else if($_GET['menu']=='news-home'){ 
            include("news-home.php");
        }else if($_GET['menu']=='news-landing'){ 
            include("news-landing.php");
        }else if($_GET['menu']=='news'){ 
            include("news.php");
        }else if($_GET['menu']=='past-event'){ 
            include("past-event.php");
        }else if($_GET['menu']=='upcoming-event'){ 
            include("upcoming-event.php");
        }else if($_GET['menu']=='games'){ 
            include("games.php");
        }else if($_GET['menu']=='game1'){ 
            include("game1.php");
        }else if($_GET['menu']=='game2'){ 
            include("game2.php");
        }else if($_GET['menu']=='game-play1'){ 
            include("game-play1.php");
        }else if($_GET['menu']=='game-play2'){ 
            include("game-play2.php");
        }else if($_GET['menu']=='gift'){ 
            include("gift.php");
        }else{ 
            include("home.php");
        }?>
	</div><!-- END .wrapper -->
    <?php include('footer.php'); ?>
</body>
</html>