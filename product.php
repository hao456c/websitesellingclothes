r<?php
$id=$_GET["id"];
include("login.php");
$o=new login;
?>
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/product.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:43:09 GMT -->
<head>
<meta charset="utf-8">
<title>Webmarket HTML Template - Product Page</title>
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
<a href="index.php" class="gray-link" onClick="">Logout</a>
&nbsp;
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
<li class="dropdown">
<a href="index-2.php" class="dropdown-toggle"> Home </a>
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
<p class="items">CART</p>
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
 
 
 
<div class="darker-stripe">
<div class="container">
<div class="row">
<div class="span12">
<ul class="breadcrumb">
<li>
<a href="index-2.php">Webmarket</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="shop.php">Shop</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="#">Horsefeathers</a>
</li>
<li><span class="icon-chevron-right"></span></li>
<li>
<a href="product.php">Horsefeathers Shot Surfers T-shirt</a>
</li>
</ul>
</div>
</div>
</div>
</div>
 
 
 
<div class="container">
<div class="push-up top-equal blocks-spacer">
 
 
 
<div class="row blocks-spacer">
 
 
 
<?php
	if($id>0)
	$o->xuatchitietsanpham($id);
	else $o->xuatchitietsanpham(1);
	?>
 
 
 
<form action="index-2.php" method="get" class="form form-inline clearfix">
<div class="numbered">
<input type="number" name="quantity" value="1" />
<input type="hidden" name="id" value="<?php echo $id?>" />
</div>
&nbsp;

<button type="submit" id="add" class="btn btn-danger pull-right" value"Add To Cart"><i class="icon-shopping-cart"></i> &nbsp; Add To Cart</button>
</form>
<hr/>
 
 
 
<div class="share-item push-down-20">
<div class="row-fluid">
<div class="span5">
Share this item with friends:
</div>
<div class="span7">
<div class="social-networks">
 
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>
 
</div>
</div>
</div>
</div>
 
<div class="store-buttons">
<i class="icon-heart"></i> <a href="#">Add to a wishlist</a> &nbsp;&nbsp; | &nbsp;&nbsp;
<i class="icon-exchange"></i> <a href="#">Add to compare</a> &nbsp;&nbsp; | &nbsp;&nbsp;
<i class="icon-envelope-alt"></i> <a href="#">Email to a friend</a>
</div>
</div>
</div>
</div>
 
 
 
<div class="row">
<div class="span12">
<ul id="myTab" class="nav nav-tabs">
<li class="active">
<a href="#tab-1" data-toggle="tab">Details</a>
</li>
<li>
<a href="#tab-2" data-toggle="tab">SIZING CHART</a>
</li>
<li>
<a href="#tab-3" data-toggle="tab">COMMENTS</a>
</li>
<li>
<a href="#tab-4" data-toggle="tab">SHIPPING DETAILS</a>
</li>
</ul>
<div class="tab-content">
<div class="fade in tab-pane active" id="tab-1">
<h3>Product Description</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dui ante, vulputate at pellentesque eget, viverra ac dolor. Morbi interdum tortor non leo aliquam ac aliquet nulla porta. Morbi id dolor massa, ut ornare augue. Morbi tincidunt magna bibendum enim tristique tristique. Quisque a massa tellus, ac tempor magna. Sed eget ligula tellus, nec pellentesque dolor. Phasellus dictum, mauris non mollis ornare, turpis libero faucibus orci, at fringilla urna leo sodales libero. Aliquam nec lectus mauris. Morbi lectus quam, convallis vel euismod a, auctor non dui. Etiam a nisi risus.</p>
<p>Phasellus velit quam, ultrices et hendrerit vitae, suscipit nec dui. Sed at ligula vitae ligula pellentesque dictum. Duis lobortis auctor ipsum vel placerat. Phasellus nisi odio, ornare eget faucibus et, accumsan nec mauris. per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dui ante, vulputate at pellentesque eget, viverra ac dolor.Etiam a nisi risus.</p>
<h1>Heading H1 30px</h1>
<h2>Heading H2 26px</h2>
<h3>Heading H3 20px</h3>
<h4>Heading H4 18px</h4>
<h5>Heading H5 15px</h5>
<p>Phasellus velit quam, ultrices et hendrerit vitae, suscipit nec dui. Sed at ligula vitae ligula pellentesque dictum. Duis lobortis auctor ipsum vel placerat. Phasellus nisi odio, ornare eget faucibus et, accumsan nec mauris. per conubia nostra, per inceptos himenaeos.</p>
</div>
<div class="fade tab-pane" id="tab-2">
<p>
Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
</p>
</div>
<div class="fade tab-pane" id="tab-3">
<p>
Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
</p>
</div>
<div class="fade tab-pane" id="tab-4">
<p>
Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. Another text here ...
</p>
</div>
</div>
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
<input type="text" class="input-block-level" name="inputEmail" placeholder="Username" required>
</div>
</div>
<div class="control-group">
<label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
<div class="controls">
<input type="password" class="input-block-level" name="inputPassword" placeholder="Password" required>
</div>
</div>
<div class="control-group">
<div class="controls">
<label class="checkbox">
<input type="checkbox">
Remember me
</label>
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

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/product.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:43:12 GMT -->
</html>
