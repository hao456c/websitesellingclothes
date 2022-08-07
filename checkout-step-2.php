<?php
	include("login.php");
	$p=new login;
	session_start();
 	if(isset($_SESSION["username"])&& isset($_SESSION["password"])) {
	 $p->confirmlogin($_SESSION["username"],$_SESSION["password"]);
 	}
 	else{
	 header("location:../project3/index-2.php");
	}
?>
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:57:12 GMT -->
<head>
<meta charset="utf-8">
<title>Webmarket HTML Template - Checkout Step 2</title>
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
<body class=" checkout-page">
<div class="master-wrapper">
<div class="container">
<div class="row">
 
 
 
<section class="span12">
<div class="checkout-container">
<div class="row">
<div class="span10 offset1">
 
 
 
<header>
<div class="row">
<div class="span2">
<a href="index-2.php"><img src="images/logo-bw.png" alt="Webmarket Logo" width="48" height="48"/></a>
</div>
<div class="span6">
<div class="center-align">
<h1><span class="light">Billing</span> &amp; Shipping Address</h1>
</div>
</div>
<div class="span2">
<div class="right-align">
<img src="images/buttons/security.jpg" alt="Security Sign" width="92" height="65"/>
</div>
</div>
</div>
</header>
 
 
 
<div class="checkout-steps">
<div class="clearfix">
<div class="step done">
<div class="step-badge"><i class="icon-ok"></i></div>
<a href="checkout-step-1.php">Shopping Cart</a>
</div>
<div class="step active">
<div class="step-badge">2</div>
Shipping Address
</div>
<div class="step">
<div class="step-badge">3</div>
Confirm &amp; Pay
</div>
</div>
</div>  
 
 
 
<form action="#" method="post" class="form-horizontal form-checkout">
<div class="control-group">
<label class="control-label" for="firstName">First Name<span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="firstName" name="firstname" class="span4" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="lastName">Last Name<span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="lastName" name="lastname"  class="span4" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="telephone">Telephone<span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="phone" name="phone" class="span4" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="addr1">Address <span class="red-clr bold">*</span></label>
<div class="controls">
<input type="text" id="addr1" name="addr" class="span4" required>
</div>
</div>
<hr/>
<p class="right-align">
In the next step you will be able to review and confirm the order &nbsp; &nbsp;
<button type="submit" name="confirm" value="CONTINUE" class="btn btn-primary higher bold">CONTINUE</button>
<?php	
		switch($_REQUEST["confirm"]){
			case "CONTINUE":
				{
				$lastname=$_REQUEST["firstname"];
				$firstname=$_REQUEST["lastname"];
				$address=$_REQUEST["addr"];
				$phone=$_REQUEST["phone"];
				$p->checkconfirm($lastname,$firstname,$address,$phone);
				break;
				}
		}
	?>
	</form>
</p>
</div>
</div>
</div>
</section>  
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

<!-- Mirrored from www.proteusthemes.com/themes/webmarket-html/checkout-step-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Aug 2015 15:57:14 GMT -->
</html>
