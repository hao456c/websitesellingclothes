<!DOCTYPE html>
<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["ID"]);
unset($_SESSION["quyen"]);
include("login.php");
$o=new login();
if(isset($_GET["id"])){
	$id=$_GET["id"];
	if(isset($_GET["quantity"])){
		if($_GET["quantity"]<=0)$o->addcart($id,1);
		else $o->addcart($id,$_GET["quantity"]);
	}
	else $o->addcart($id,1);
}
if(isset($_GET["idrm"])){
	
	$id=$_GET["idrm"];
	$_SESSION["cart"][$id]['id']=NULL;
}
?>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 14:57:07 GMT -->
<head>
<meta charset="utf-8">
<title>Webmarket HTML Template - Home Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ProteusThemes">
 
<script type="text/javascript">
        WebFontConfig = {
            google : {
                families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
 
<link href="stylesheets/bootstrap.css" rel="stylesheet">
<link href="stylesheets/responsive.css" rel="stylesheet">
 
<link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
 
<link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
 
<link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
 
<link href="stylesheets/main.css" rel="stylesheet">
 
<script src="js/modernizr.custom.56918.js"></script>
 
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
<link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
<link rel="shortcut icon" href="images/apple-touch/57.png">
</head>
<body class="">
<div class="master-wrapper">
 
 
 
<header id="header">
<div class="darker-row">
<div class="container">
<div class="row">
<div class="span4">
<div name="loginne" <?php	
						   session_start();
 							if(isset($_SESSION["username"])&& isset($_SESSION["password"])) {
	 						if($o->confirmlogin($_SESSION["username"],$_SESSION["password"]))echo "style=\"display:none\"";
							else echo "style=\"display:block;\"";
 							}
	 						else echo "style=\"display:block;\"";
						   ?>>
<div class="higher-line">
Welcome! Please
<a href="#loginModal" role="button" data-toggle="modal">Login</a>
</div>
	</div>
</div>
<div class="span8">
<div class="topmost-line">
<div class="higher-line">

	</div>

</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
 
 
 
<div class="span7">
<a class="brand" href="index-2.php">
<img src="images/logo.png" alt="Webmarket Logo" width="48" height="48"/>
<span class="pacifico">Webmarket</span>
<span class="tagline">Really Cool e-Commerce HTML Template</span>
</a>
</div>
 
 
 
<div class="span5">
<div class="top-right">
<div class="icons">
<a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
<a href="skype:primozcigler?call"><span class="zocial-skype"></span></a>
<a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
<a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
<a href="#"><span class="zocial-wordpress"></span></a>
<a href="#"><span class="zocial-android"></span></a>
<a href="#"><span class="zocial-html5"></span></a>
<a href="#"><span class="zocial-windows"></span></a>
<a href="#"><span class="zocial-apple"></span></a>
</div>
</div>
</div>  
</div>
</div>
</header>
 
 
 
<div class="navbar navbar-static-top" id="stickyNavbar">
<div class="navbar-inner">
<div class="container">
<div class="row">
<div class="span9">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
 
 
 
<div class="nav-collapse collapse">
<ul class="nav" id="mainNavigation">
<li class="dropdown active">
<a href="index-2.php" class="dropdown-toggle"> Home</a>
	</li>
</ul>
 
 
 
<form class="navbar-form pull-right" action="#" method="get">
<button type="submit"><span class="icon-search"></span></button>
<input type="text" class="span1" name="search" id="navSearchInput">
</form>
</div> 
</div>
 
 
 
<div class="span3">
<div class="cart-container" id="cartContainer">
<div class="cart">
<p class="items">CART <span class="dark-clr"></span></p>
<p class="dark-clr hidden-tablet"></p>
<a href="checkout-step-1.php" class="btn btn-danger">
 
<i class="icon-shopping-cart"></i>
</a>
</div>
<div class="open-panel">

<?php 
	$o->xuatcart();
	?>

<div class="proceed">
<a href="checkout-step-1.php" class="btn btn-danger pull-right bold higher">CHECKOUT <i class="icon-shopping-cart"></i></a>
<small>Shipping costs are calculated based on location. <a href="#">More information</a></small>
</div>
</div>
</div>
</div>  
</div>
</div>
</div>
</div>  
 
 
 
<div class="fullwidthbanner-container">
<div class="fullwidthbanner">
<ul>
<li data-transition="premium-random" data-slotamount="3">
<img src="images/dummy/slides/1/slide.jpg" alt="slider img" width="1400" height="377"/>
 
<div class="caption lft ltt" data-x="570" data-y="50" data-speed="4000" data-start="1000" data-easing="easeOutElastic">
<img src="images/dummy/slides/1/baloon1.png" alt="baloon" width="135" height="186"/>
</div>
<div class="caption lft ltt" data-x="770" data-y="60" data-speed="4000" data-start="1200" data-easing="easeOutElastic">
<img src="images/dummy/slides/1/baloon3.png" alt="baloon" width="40" height="55"/>
</div>
<div class="caption lft ltt" data-x="870" data-y="80" data-speed="4000" data-start="1500" data-easing="easeOutElastic">
<img src="images/dummy/slides/1/baloon2.png" alt="baloon" width="60" height="83"/>
</div>
 
<div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
With Webmarket, the Sky Is the Limit
</div>
<div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
Take a tour on Webmarket HTML Template
</div>
<a href="features.php" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
ALL THEME FEATURES
</a>
</li> 
<li data-transition="premium-random" data-slotamount="3">
<img src="images/dummy/slides/2/slide.jpg" alt="slider img" width="1400" height="377"/>
 
<div class="caption lfb ltb" data-x="800" data-y="50" data-speed="1000" data-start="1000" data-easing="easeInOutCubic">
<img src="images/dummy/slides/2/woman.png" alt="woman" width="361" height="374"/>
</div>
 
<div class="caption lfl str" data-x="400" data-y="20" data-speed="10000" data-start="1000" data-easing="linear">
<img src="images/dummy/slides/2/plane.png" alt="aircraft" width="117" height="28"/>
</div>
 
<div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
Slider Revolution
</div>
<div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
This premium slider comes with the theme, as a bonus, for FREE!
</div>
<a href="features.php" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
AND MANY MORE ...
</a>
</li> 
<li data-transition="premium-random" data-slotamount="3">
<img src="images/dummy/slides/3/slide.jpg" alt="slider img" width="1400" height="377"/>
 
<div class="caption sfr fadeout" data-x="950" data-y="77" data-speed="1000" data-start="2500" data-easing="easeInOutCubic">
<img src="images/dummy/slides/3/phone.png" alt="phone in a hand" width="495" height="377"/>
</div>
 
<div class="caption lfl big_theme" data-x="120" data-y="120" data-speed="1000" data-start="500" data-easing="easeInOutBack">
We Are Mobile Ready
</div>
<div class="caption lfl small_theme" data-x="120" data-y="190" data-speed="1000" data-start="700" data-easing="easeInOutBack">
Try to resize the browser window. The Webmarket will look awesome no matter the device screen resolution!
</div>
<a href="icons.php" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="260" data-speed="1000" data-start="900" data-easing="easeInOutBack">
And also all the icons are retina-ready...
</a>
</li> 
<li data-transition="premium-random" data-slotamount="3">
<img src="images/dummy/slides/4/slide.jpg" alt="slider img" width="1400" height="377"/>
 
<div class="caption lft ltt" data-x="-150" data-y="0" data-speed="300" data-start="2000" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person1.png" alt="satisfied customer" width="108" height="204"/>
</div>
<div class="caption lft ltt" data-x="0" data-y="0" data-speed="300" data-start="2200" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person2.png" alt="satisfied customer" width="108" height="321"/>
</div>
<div class="caption lft ltt" data-x="500" data-y="0" data-speed="300" data-start="2400" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person3.png" alt="satisfied customer" width="108" height="139"/>
</div>
<div class="caption lft ltt" data-x="720" data-y="0" data-speed="300" data-start="2600" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person4.png" alt="satisfied customer" width="108" height="191"/>
</div>
<div class="caption lft ltt" data-x="940" data-y="0" data-speed="300" data-start="2800" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person5.png" alt="satisfied customer" width="108" height="139"/>
</div>
<div class="caption lft ltt" data-x="1200" data-y="0" data-speed="300" data-start="3000" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person6.png" alt="satisfied customer" width="108" height="179"/>
</div>
<div class="caption lft ltt" data-x="1350" data-y="0" data-speed="300" data-start="3200" data-easing="easeInOutCubic">
<img src="images/dummy/slides/4/person7.png" alt="satisfied customer" width="108" height="133"/>
</div>
 
<div class="caption lfl big_theme" data-x="120" data-y="140" data-speed="1000" data-start="500" data-easing="easeInOutBack">
Over 1000 Satisfied Customers
</div>
<div class="caption lfl small_theme" data-x="120" data-y="210" data-speed="1000" data-start="700" data-easing="easeInOutBack">
Take a look at our profile page on the <a href="http://themeforest.net/user/ProteusThemes" target="_blank">ThemeForest</a>!
</div>
<a href="http://support.proteusthemes.com/" class="caption lfl btn btn-primary btn_theme" data-x="120" data-y="280" data-speed="1000" data-start="900" data-easing="easeInOutBack">
We provide support
</a>
</li> 
</ul>
<div class="tp-bannertimer"></div>
</div>
 
 
 
<div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
<div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
</div>  
 
 
 
<div class="container">
<div class="row">
<div class="span12">
<div class="push-up over-slider blocks-spacer">
 
 
 
<div class="row">
<div class="span4">
<a href="#" class="btn btn-block banner">
<span class="title"><span class="light">SUMMER</span> SALE</span>
<em>up to 60% off on all shoes</em>
</a>
</div>
<div class="span4">
<a href="#" class="btn btn-block colored banner">
<span class="title"><span class="light">FREE</span> SHIPPING</span>
<em>on orders over $69</em>
</a>
</div>
<div class="span4">
<a href="#" class="btn btn-block banner">
<span class="title"><span class="light">NEW</span> PRODUCTS</span>
<em>for running on lorem ipsum dolor</em>
</a>
</div>
</div>  
</div>
</div>
</div>
 
 
 
<div class="row featured-items blocks-spacer">
<div class="span12">
 
 
 
<div class="main-titles lined">
<h2 class="title">Products</h2>
<div class="arrows">
<a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
<a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
</div>
</div>
</div>
<div class="span12">
 
 
 
<div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
<div class="slide">
<div class="row">
 
 
<?php
	$o->xuatsanpham();
?>  
  
</div>
</div>
</div>  
</div>
</div>
</div>  
 
 
</div>  
 
 

 
 
 
<div class="darker-stripe blocks-spacer more-space latest-news with-shadows">
<div class="container">
 
 
 
<div class="row">
<div class="span12">
<div class="main-titles center-align">
<h2 class="title">
<span class="clickable icon-chevron-left" id="tweetsLeft"></span> &nbsp;&nbsp;&nbsp;
<span class="light">Latest</span> News &nbsp;&nbsp;&nbsp;
<span class="clickable icon-chevron-right" id="tweetsRight"></span>
</h2>
</div>
</div>
</div>  
 
 
 
<div class="row">
<div class="span12">
<div class="carouFredSel" data-nav="tweets" data-autoplay="false">
 
 
 
<div class="slide">
<div class="row">
<div class="span6">
<div class="news-item">
<div class="published">12. July, 2013</div>
<h6><a href="#">Title of the Latest News</a></h6>
<p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
</div>
</div>
<div class="span6">
<div class="news-item">
<div class="published">18. July, 2013</div>
<h6><a href="#">Another Amusing News</a></h6>
<p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
</div>
</div>
</div>
</div>  
 
 
 
<div class="slide">
<div class="row">
<div class="span6">
<div class="news-item">
<div class="published">12. July, 2013</div>
<h6><a href="#">Title of the Latest News</a></h6>
<p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
</div>
</div>
<div class="span6">
<div class="news-item">
<div class="published">18. July, 2013</div>
<h6><a href="#">Another Amusing News</a></h6>
<p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
</div>
</div>
</div>
</div>  
</div>
</div>
</div>  
</div>
</div>  
 
 
 
<div class="container blocks-spacer-last">
 
 
 
<div class="row">
<div class="span12">
<div class="main-titles lined">
<h2 class="title"><span class="light">Our</span> Brands</h2>
<div class="arrows">
<a class="clickable  icon-chevron-left" id="brandsLeft"></a>
<a class="clickable  icon-chevron-right" id="brandsRight"></a>
</div>
</div>
</div>
</div>  
 
 
 
<div class="row">
<div class="span12">
<div class="brands  carouFredSel" data-nav="brands" data-autoplay="true">
<a href="http://www.proteusthemes.com/"><img src="images/dummy/brands/brands_01.jpg" alt="" width="203" height="104"/></a>
<a href="http://www.proteusthemes.com/"><img src="images/dummy/brands/brands_02.jpg" alt="" width="203" height="104"/></a>
<a href="http://www.proteusthemes.com/"><img src="images/dummy/brands/brands_03.jpg" alt="" width="203" height="104"/></a>
<a href="http://www.proteusthemes.com/"><img src="images/dummy/brands/brands_04.jpg" alt="" width="203" height="104"/></a>
<a href="http://www.proteusthemes.com/"><img src="images/dummy/brands/brands_05.jpg" alt="" width="203" height="104"/></a>
<a href="http://www.proteusthemes.com/"><img src="images/dummy/brands/brands_06.jpg" alt="" width="203" height="104"/></a>
</div>
</div>
</div>  
</div>  
 
 
 
<footer>
 
 
 
<div class="foot-light">
<div class="container">
<div class="row">
<div class="span4">
<h2 class="pacifico">Webmarket &nbsp; <img src="images/webmarket.png" alt="Webmarket Cart" class="align-baseline"/></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt vestibulum risus et gravida. Etiam vel augue ligula, blandit malesuada nisi. Quisque a augue nisi. Nullam interdum convallis </p>
</div>
<div class="span4">
<div class="main-titles lined">
<h3 class="title">Facebook</h3>
</div>
<div class="bordered">
<div class="fill-iframe">
<div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>
</div>
</div>
<div class="span4">
<div class="main-titles lined">
<h3 class="title"><span class="light">Newsletters</span> Signup</h3>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam tincidunt vestibulum risus et gravida.</p>
 
<div id="mc_embed_signup">
<form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
<div class="mc-field-group">
<input type="email" value="" placeholder="Enter your e-mail address" name="EMAIL" class="required email" id="mce-EMAIL">
<input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>
</form>
</div>
 
</div>
</div>
</div>
</div>  
 
 
 
<div class="foot-dark">
<div class="container">
<div class="row">
 
 
 
<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Main</span> Navigation</h3>
</div>
<ul class="nav bold">
<li><a href="#">Home</a></li>
<li><a href="#">Pages</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Shortcodes</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
 
 
 
<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Second</span> Navigation</h3>
</div>
<ul class="nav">
<li><a href="#">Lorem Ipsum Dolor Sit</a></li>
<li><a href="#">Amet Webmarket Signup</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">Latest Tweets Sometging</a></li>
<li><a href="#">Ipsum Sit Lorem Amet</a></li>
</ul>
</div>
 
 
 
<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Third</span> Navigation</h3>
</div>
<ul class="nav">
<li><a href="#">Lorem Ipsum Dolor Sit</a></li>
<li><a href="#">Amet Webmarket Signup</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">Latest Tweets Sometging</a></li>
<li><a href="#">Ipsum Sit Lorem Amet</a></li>
</ul>
</div>
 
 
 
<div class="span3">
<div class="main-titles lined">
<h3 class="title"><span class="light">Fourth</span> Navigation</h3>
</div>
<ul class="nav">
<li><a href="#">Lorem Ipsum Dolor Sit</a></li>
<li><a href="#">Amet Webmarket Signup</a></li>
<li><a href="#">Brands</a></li>
<li><a href="#">Latest Tweets Sometging</a></li>
<li><a href="#">Ipsum Sit Lorem Amet</a></li>
</ul>
</div>
</div>
</div>
</div>  
 
 
 
<div class="foot-last">
<a href="#" id="toTheTop">
<span class="icon-chevron-up"></span>
</a>
<div class="container">
<div class="row">
<div class="span6">
&copy; Copyright 2013. Images of products by <a target="_blank" href="http://www.horsefeathers.eu/">Horsefeathers</a>.
</div>
<div class="span6">
<div class="pull-right">Webmarket HTML Template by <a href="http://www.proteusthemes.com/">ProteusThemes</a></div>
</div>
</div>
</div>
</div>  
</footer>  
 
 
 
 
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="loginModalLabel"><span class="light">Login</span> To Webmarket</h3>
</div>
<div class="modal-body">
<form method="post" action="#">
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputEmail">Username</label>
<div class="controls">
<input type="text" class="input-block-level" id="inputEmail" placeholder="Username" name="inputEmail" required >
</div>
</div>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
<div class="controls">
<input type="password" class="input-block-level" id="inputPassword" name="inputPassword" placeholder="Password" required>
</div>
</div>
<button type="submit" class="btn btn-primary input-block-level bold higher" id="logindb" name="logindb" value="SIGN IN">
SIGN IN
</button>
	<?php
		switch($_REQUEST["logindb"]){
			case "SIGN IN":
				{
				$o->connect();
				$username=$_REQUEST["inputEmail"];
				$password=$_REQUEST["inputPassword"];
				$o->checklogin($username,$password);
				break;
				}
		}
	?>
</form>
<p class="center-align push-down-0">
<a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Forgot your password?</a>
</p>
</div>
</div>
 
 
<div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="forgotPassModalLabel"><span class="light">Forgot</span> your password?</h3>
</div>
<div class="modal-body">
<form method="post" action="#">
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
<div class="controls">
<input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
</div>
</div>
<p class="center-align">OR</p>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
<div class="controls">
<input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
</div>
</div>
<button type="submit" class="btn btn-primary input-block-level bold higher">
SEND ME A NEW PASSWORD
</button>
</form>
</div>
</div>
</div>  
 
 
 
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../connect.facebook.net/en_US/all.php#xfbml=1&appId=126780447403102";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
 
<script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.php"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>
 
<script src="js/underscore/underscore-min.js" type="text/javascript"></script>
 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
 
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
 
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
 
<script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>
 
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
 
<script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>
 
<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>
 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
<script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>
 
<script src="js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:10:09 GMT -->
</html>
