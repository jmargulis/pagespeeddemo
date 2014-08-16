<?php
$bMinify = true;
if($bMinify)
{
	require_once("min/config.php");
	$groupsSources = require_once("min/groupsConfig.php");
	require_once("min/utils.php");

	$jsBuild = new Minify_Build($groupsSources['MyCode.js']);
	$cssBuild = new Minify_Build($groupsSources['MyStyles.css']);
}
?>
<!DOCTYPE html>
<!-- saved from url=(0064)http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/ -->
<html lang="en-US" class=" js flexbox flexboxlegacy canvas canvastext draganddrop rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients csstransitions generatedcontent video audio localstorage"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Coffee | </title>
<meta name="description" content=" | ">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/themes/themeWoo/favicon.ico" type="image/x-icon">
<link rel="pingback" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/xmlrpc.php">
<link rel="alternate" type="application/rss+xml" title="Coffee" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/feed/">
<link rel="alternate" type="application/atom+xml" title="Coffee" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/feed/atom/">
<?php if(!$bMinify) { ?>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css">
<link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="Coffee » Feed" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/feed/">
<link rel="alternate" type="application/rss+xml" title="Coffee » Comments Feed" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="Coffee » Home Comments Feed" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/home/feed/">
<?php if(!$bMinify) { ?>
<link rel="stylesheet" id="contact-form-7-css" href="css/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="magnific-popup-css" href="css/magnific-popup.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce_frontend_styles-css" href="css/woocommerce.css" type="text/css" media="all">
<?php } ?>
<style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>
<?php if(!$bMinify) { ?>
<script type="text/javascript" src="js/comment-reply.min.js"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/jflickrfeed.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<?php } ?>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 3.6">
<link rel="canonical" href="./index_files/index.html">
 
<meta name="generator" content="WooCommerce 2.0.14">
<?php if(!$bMinify) { ?>
<script src="js/jquery.mobile.customized.min.js" type="text/javascript"></script>
<script type="text/javascript">
		jQuery(function(){
			jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
		});
</script>
<script type="text/javascript">
		// Init navigation menu
		jQuery(function(){
		// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
				animation: {
					opacity: "show",
					height: "show"
				}, // used to animate the sub-menu open
				speed: "normal", // animation speed 
				autoArrows: false, // generation of arrow mark-up (for submenu)
				disableHI: true // to disable hoverIntent detection
			});

		//Zoom fix
		//IPad/IPhone
			var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
				ua = navigator.userAgent,
				gestureStart = function () {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
				},
				scaleFix = function () {
					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
						document.addEventListener("gesturestart", gestureStart, false);
					}
				};
			scaleFix();
		})
</script>
<?php } ?>
<?php if($bMinify) { ?>
<link href="<?= $cssBuild->uri('/m/MyStyles.css'); ?>" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,400italic&subset=latin,cyrillic" rel="stylesheet" type="text/css" />
<?php } ?>
<style type="text/css">body{background-image:url(http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/themes/themeWoo/images/main-bg.jpg);background-repeat:repeat;background-position:top center;background-attachment:scroll;}body{background-color:#F1EEE8}.header{background-color:#ffffff}</style>
<style type="text/css">h1{font:normal 24px/28px Open Sans;color:#181818;}h2{font:normal 20px/24px Open Sans;color:#181818;}h3{font:bold 17px/20px Open Sans;color:#181818;}h4{font:bold 16px/20px Open Sans;color:#181818;}h5{font:bold 14px/20px Open Sans;color:#181818;}h6{font:normal 14px/20px Open Sans;color:#181818;}.main-holder{font:normal 14px/20px Arial,Helvetica,sans-serif;color:#787878;}.logo_h__txt,.logo_link{font:normal 60px/64px Open Sans;color:#191919;}.sf-menu>li>a{font:bold 17px/53px Open Sans;color:#ffffff;}.nav.footer-nav a{font:normal 14px/20px Arial,Helvetica,sans-serif;color:#181818;}</style>
<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
	<![endif]-->
</head>
<body class="home page page-id-203 page-template page-template-page-home-php has_woocommerce has_shop" screen_capture_injected="true">
<div id="motopress-main" class="main-holder">
 
<header class="motopress-wrapper header">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="53eee0eba2d9a">
<div class="header_row_top" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="row" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-shop-nav.php" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="shop-nav"><ul id="shopnav" class="shop-menu"><li><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-login.php?action=register&redirect_to=/free_2013_wocommerce_2_0_14/" class="register-link" title="Registration">Registration</a></li><li><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-login.php?action=login&redirect_to=/free_2013_wocommerce_2_0_14/" title="Log In">Log In</a></li><li id="menu-item-1986" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1986"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/delivery/">Delivery</a></li>
<li id="menu-item-1988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1988"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/checkout/">Checkout</a></li>
<li id="menu-item-1987" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1987"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/my-account/">My Account</a></li>
</ul></div> </div>
</div>
</div>
<div class="header_row_middle" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="row" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-logo.php" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
 
<div class="logo pull-left">
<a href="./index_files/index.html" class="logo_h logo_h__img"><img src="images/logo.png" alt="Coffee" title=""></a>
<p class="logo_tagline"></p> 
</div>
 </div>
<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-search.php" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="inner_wrap">
 
<div class="search-form search-form__h">
<form id="search-header" method="get" action="./index_files/index.html" accept-charset="utf-8">
<input type="text" name="s" placeholder="search" class="search-form_it">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/#" id="search-form_is" onclick="document.getElementById(&#39;search-header&#39;).submit()"><i class="icon-search"></i></a>
</form>
</div>
 
<div id="shopping_cart-2" class="visible-all-devices cart-holder"><h3>Cart</h3><div class="widget_shopping_cart_content">No products in the cart.</div></div></div></div>
</div>
</div>
<div class="header_row_bottom" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="row" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-nav.php" data-motopress-id="520a2c647af6f" data-motopress-file="wrapper/wrapper-header.php">
 
<nav class="nav nav__primary clearfix">
<ul id="topnav" class="sf-menu sf-js-enabled"><li id="menu-item-1807" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item"><a href="./index_files/index.html">Home</a></li>
<li id="menu-item-1810" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/">About</a>
<ul class="sub-menu" style="visibility: hidden;">
<li id="menu-item-1811" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/testi/">Testimonials</a></li>
<li id="menu-item-1812" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/archives/">Archives</a></li>
<li id="menu-item-1805" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/faqs/">FAQs</a></li>
</ul>
</li>
<li id="menu-item-2001" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/">Portfolio</a>
<ul class="sub-menu" style="visibility: hidden;">
<li id="menu-item-2002" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-2/">Portfolio 2</a></li>
<li id="menu-item-2003" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/">Portfolio 3</a>
<ul class="sub-menu" style="visibility: hidden;">
<li id="menu-item-2004" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/category-1/">Category 1</a></li>
<li id="menu-item-2005" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/category-2/">Category 2</a></li>
<li id="menu-item-2006" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/category-3/">Category 3</a></li>
</ul>
</li>
<li id="menu-item-2007" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-4/">Portfolio 4</a></li>
</ul>
</li>
<li id="menu-item-1994" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/shop/">Store</a>
<ul class="sub-menu" style="visibility: hidden; display: none;">
<li id="menu-item-1996" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/coffee-beans/">Coffee beans</a></li>
<li id="menu-item-1997" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/organic-coffee/">Organic Coffee</a></li>
<li id="menu-item-1998" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/espresso/">Espresso</a></li>
<li id="menu-item-1999" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/americano/">Americano</a></li>
<li id="menu-item-2000" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/moca-madness/">Moca Madness</a></li>
</ul>
</li>
<li id="menu-item-1806" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/blog/">Blog</a></li>
<li id="menu-item-1804" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/contacts/">Contacts</a></li>
</ul><select class="select-menu"><option value="#">Navigate to...</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/" selected="selected">Home</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/">About</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/testi/">–Testimonials</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/archives/">–Archives</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/faqs/">–FAQs</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/">Portfolio</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-2/">–Portfolio 2</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/">–Portfolio 3</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/category-1/">––Category 1</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/category-2/">––Category 2</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-3/category-3/">––Category 3</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/portfolio/portfolio-4/">–Portfolio 4</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/shop/">Store</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/coffee-beans/">–Coffee beans</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/organic-coffee/">–Organic Coffee</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/espresso/">–Espresso</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/americano/">–Americano</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/moca-madness/">–Moca Madness</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/blog/">Blog</option><option value="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/contacts/">Contacts</option></select></nav> </div>
</div>
</div> </div>
</div>
</div>
</header>
<div class="motopress-wrapper content-holder clearfix">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
<div class="page_home_top">
<div class="row">
<div class="span8" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
<div id="slider-wrapper" class="slider">
<?php if(!$bMinify) { ?>
<script type="text/javascript">
//    jQuery(window).load(function() {
		jQuery(function() {
			var myCamera = jQuery('#camera53eee0ebb1449');
			if (!myCamera.hasClass('motopress-camera')) {
				myCamera.addClass('motopress-camera');
				myCamera.camera({
					alignment           : 'topCenter', //topLeft, topCenter, topRight, centerLeft, center, centerRight, bottomLeft, bottomCenter, bottomRight
					autoAdvance         : true,   //true, false
					mobileAutoAdvance   : true, //true, false. Auto-advancing for mobile devices
					barDirection        : 'leftToRight',    //'leftToRight', 'rightToLeft', 'topToBottom', 'bottomToTop'
					barPosition         : 'top',    //'bottom', 'left', 'top', 'right'
					cols                : 12,
					easing              : 'easeOutQuad',  //for the complete list http://jqueryui.com/demos/effect/easing.html
					mobileEasing        : '',   //leave empty if you want to display the same easing on mobile devices and on desktop etc.
					fx                  : 'simpleFade',    //'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft',          'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight'
													//you can also use more than one effect, just separate them with commas: 'simpleFade, scrollRight, scrollBottom'
					mobileFx            : '',   //leave empty if you want to display the same effect on mobile devices and on desktop etc.
					gridDifference      : 250,  //to make the grid blocks slower than the slices, this value must be smaller than transPeriod
					height              : '52.6%', //here you can type pixels (for instance '300px'), a percentage (relative to the width of the slideshow, for instance '50%') or 'auto'
					imagePath           : 'images/',    //he path to the image folder (it serves for the blank.gif, when you want to display videos)
					loader              : 'no',    //pie, bar, none (even if you choose "pie", old browsers like IE8- can't display it... they will display always a loading bar)
					loaderColor         : '#ffffff',
					loaderBgColor       : '#eb8a7c',
					loaderOpacity       : 1,    //0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1
					loaderPadding       : 0,    //how many empty pixels you want to display between the loader and its background
					loaderStroke        : 3,    //the thickness both of the pie loader and of the bar loader. Remember: for the pie, the loader thickness must be less than a half of the pie diameter
					minHeight           : '147px',  //you can also leave it blank
					navigation          : false, //true or false, to display or not the navigation buttons
					navigationHover     : false,    //if true the navigation button (prev, next and play/stop buttons) will be visible on hover state only, if false they will be visible always
					pagination          : true,
					playPause           : false,   //true or false, to display or not the play/pause buttons
					pieDiameter         : 33,
					piePosition         : 'rightTop',   //'rightTop', 'leftTop', 'leftBottom', 'rightBottom'
					portrait            : true, //true, false. Select true if you don't want that your images are cropped
					rows                : 8,
					slicedCols          : 12,
					slicedRows          : 8,
					thumbnails          : false,
					time                : 7000,   //milliseconds between the end of the sliding effect and the start of the next one
					transPeriod         : 1500, //lenght of the sliding effect in milliseconds

									////////callbacks

					onEndTransition     : function() {  },  //this callback is invoked when the transition effect ends
					onLoaded            : function() {  },  //this callback is invoked when the image on a slide has completely loaded
					onStartLoading      : function() {  },  //this callback is invoked when the image on a slide start loading
					onStartTransition   : function() {  }   //this callback is invoked when the transition effect starts
				});
			}
		});
//    });
</script>
<?php } ?>
<div id="camera53eee0ebb1449" class="camera_wrap camera motopress-camera" style="display: block; margin-bottom: 0px; height: 405px;"><div class="camera_fakehover"><div class="camera_src camerastarted">
<div data-src="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/uploads/2011/07/slide-11.jpg" data-link="product-category/outerwear/" data-thumb="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/uploads/2011/07/slide-11-100x50.jpg"> 
</div><div data-src="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/uploads/2011/07/slide-21.jpg" data-link="product/chadwicks-the-casual-trench/" data-thumb="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/uploads/2011/07/slide-21-100x50.jpg"> 
</div><div data-src="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/uploads/2011/07/slide-31.jpg" data-link="product-category/activewear/" data-thumb="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/wp-content/uploads/2011/07/slide-31-100x50.jpg"> 
</div></div><div class="camera_target"><div class="cameraCont"><div class="cameraSlide cameraSlide_0" style="visibility: visible; display: none; z-index: 1;"><img src="images/slide-11.jpg" class="imgLoaded" style="visibility: visible; height: 405px; margin-left: 0px; margin-right: 0px; margin-top: 0px; position: absolute; width: 770px;" data-alignment="" data-portrait="" width="770" height="405"><div class="camerarelative" style="width: 770px; height: 405px;"></div></div><div class="cameraSlide cameraSlide_1 cameracurrent" style="display: block; z-index: 999;"><img src="images/slide-21.jpg" class="imgLoaded" style="visibility: visible; margin-left: 0px; margin-right: 0px; margin-top: 0px; position: absolute; width: 770px; height: 405px;" data-alignment="" data-portrait="" width="770" height="405"><div class="camerarelative" style="width: 770px; height: 405px;"></div></div><div class="cameraSlide cameraSlide_2 cameranext" style="display: none; z-index: 1;"><img src="images/slide-31.jpg" class="imgLoaded" style="visibility: visible; height: 405px; margin-left: 0px; margin-right: 0px; margin-top: 0px; position: absolute; width: 770px;" data-alignment="" data-portrait="" width="770" height="405"><div class="camerarelative" style="width: 770px; height: 405px;"></div></div><div class="cameraSlide cameraSlide_3 cameranext" style="z-index: 1; display: none;"><div class="camerarelative" style="width: 770px; height: 405px;"></div></div></div></div><div class="camera_overlayer"></div><div class="camera_target_content"><div class="cameraContents"><div class="cameraContent" style="display: none;"><a class="camera_link" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/outerwear/" target=""></a><div class="camera_caption fadeIn" style="visibility: hidden; opacity: 1;"><div>
<a class="camera_caption_link" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/outerwear/">
<h2>Praesent</h2>
<h3>Aenean nonummy hendr</h3>
Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labo. </a>
</div></div></div><div class="cameraContent cameracurrent" style="display: block;"><a class="camera_link" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/chadwicks-the-casual-trench/" target=""></a><div class="camera_caption fadeIn" style="visibility: visible; opacity: 1;"><div>
<a class="camera_caption_link" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/chadwicks-the-casual-trench/">
<h2>Adipisicing</h2>
<h3>Ctetur adipisicing elit</h3>
Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labo. </a>
</div></div></div><div class="cameraContent" style="display: none;"><a class="camera_link" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/activewear/" target=""></a><div class="camera_caption fadeIn" style="visibility: hidden; opacity: 1;"><div>
<a class="camera_caption_link" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/activewear/">
<h2>Incididunt</h2>
<h3>Ipsum dolor sit amet conse</h3>
Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labo. </a>
</div></div></div></div></div><div class="camera_bar" style="display: none; bottom: auto; height: 3px;"><span class="camera_bar_cont" style="opacity: 1; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; background-color: rgb(235, 138, 124);"><span id="pie_1" style="opacity: 1; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; display: block; background-color: rgb(255, 255, 255);"></span></span></div></div><div class="camera_pag"><ul class="camera_pag_ul"><li class="pag_nav_0" style="position:relative; z-index:1002"><span><span>1</span></span></li><li class="pag_nav_1 cameracurrent" style="position:relative; z-index:1002"><span><span>2</span></span></li><li class="pag_nav_2" style="position:relative; z-index:1002"><span><span>3</span></span></li></ul></div><div class="camera_loader" style="display: none; visibility: visible;"></div></div> </div> 
</div>
<div class="span4" data-motopress-type="static" data-motopress-static-file="static/static-home-banner.php">
<figure class="home_page_banner"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/shop/"><img src="images/home_banner.jpg" alt=""></a></figure> </div>
</div>
</div>
<div class="row">
<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
<div id="post-203" class="post-203 page type-page status-publish hentry page instock">
<div class="row">
<div class="span4"><div class="banner-wrap top_banner"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/americano/" class="banner_main_link"><figure><img src="images/banner-1.jpg" alt=""></figure><h5>tasty <span>coffee</span></h5></a></div> </div>
<div class="span4"><div class="banner-wrap top_banner"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/coffee-beans/" class="banner_main_link"><figure><img src="images/banner-2.jpg" alt=""></figure><h5>best <span>services</span></h5></a></div> </div>
<div class="span4"><div class="banner-wrap top_banner"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/espresso/" class="banner_main_link"><figure><img src="images/banner-3.jpg" alt=""></figure><h5>breakfast <span>ideas</span></h5></a></div> </div>
</div> 
<div class="hr"></div> 
<div class="row">
<div class="span12"><div class="home_recent_products">
<h3>Featured products</h3>
<div class="woocommerce">
<ul class="products">
<li class="post-1914 product type-product status-publish hentry first sale instock">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/tommy-hilfiger-womens-pique-dot-trench-coat/">
<span class="onsale">Sale!</span>
<img width="170" height="270" src="images/tasters_choice_decaf_instant_coffee_3-170x270.png" class="attachment-shop_catalog wp-post-image" alt="tasters_choice_decaf_instant_coffee_3">
<h3>Tasters Choice Decaf Instant Coffee</h3>
<div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span><b class="rate_content">Rated 5.00 out of 5</b></div>
<span class="price"><del><span class="amount">$110.25</span></del> <ins><span class="amount">$100.50</span></ins></span>
</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/?add-to-cart=1914" rel="nofollow" data-product_id="1914" data-product_sku="" class="add_to_cart_button button product_type_simple">Add to cart</a>
</li>
<li class="post-1915 product type-product status-publish hentry featured instock">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/1915/">
<img width="170" height="270" src="images/starbucks_caffe_verona_coffee_1-170x270.png" class="attachment-shop_catalog wp-post-image" alt="starbucks_caffe_verona_coffee_1">
<h3>Starbucks Caffe Verona Coffee</h3>
<span class="price"><span class="amount">$98.50</span></span>
</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/?add-to-cart=1915" rel="nofollow" data-product_id="1915" data-product_sku="" class="add_to_cart_button button product_type_simple">Add to cart</a>
</li>
<li class="post-1916 product type-product status-publish hentry sale instock">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/michael-kors-pants-cargo-with-zipper-pockets/">
<span class="onsale">Sale!</span>
<img width="170" height="270" src="images/starbucks_breakfast_blend_coffee_1-170x270.png" class="attachment-shop_catalog wp-post-image" alt="starbucks_breakfast_blend_coffee_1">
<h3>Starbucks Breakfast Blend Coffee</h3>
<div class="star-rating" title="Rated 4.67 out of 5"><span style="width:93.4%"><strong class="rating">4.67</strong> out of 5</span><b class="rate_content">Rated 4.67 out of 5</b></div>
<span class="price"><del><span class="amount">$100.80</span></del> <ins><span class="amount">$90.25</span></ins></span>
</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/?add-to-cart=1916" rel="nofollow" data-product_id="1916" data-product_sku="" class="add_to_cart_button button product_type_simple">Add to cart</a>
</li>
<li class="post-1917 product type-product status-publish hentry featured instock">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/taverniti-womens-coutrtney-18-inch-jean/">
<img width="170" height="270" src="images/selamliques_authentic_turkish_coffee_1-170x270.png" class="attachment-shop_catalog wp-post-image" alt="selamliques_authentic_turkish_coffee_1">
<h3>Selamlique authentic Turkish coffee</h3>
<div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span><b class="rate_content">Rated 4.00 out of 5</b></div>
<span class="price"><span class="amount">$115.10</span></span>
</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/?add-to-cart=1917" rel="nofollow" data-product_id="1917" data-product_sku="" class="add_to_cart_button button product_type_simple">Add to cart</a>
</li>
<li class="post-1918 product type-product status-publish hentry instock">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/jc-rags-baby-doll-coat/">
<img width="170" height="270" src="images/heritage_traditional_fresh_roasted_coffee_1-170x270.png" class="attachment-shop_catalog wp-post-image" alt="heritage_traditional_fresh_roasted_coffee_1">
<h3>Heritage traditional fresh roasted coffee</h3>
<div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span><b class="rate_content">Rated 5.00 out of 5</b></div>
<span class="price"><span class="amount">$118</span></span>
</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/?add-to-cart=1918" rel="nofollow" data-product_id="1918" data-product_sku="" class="add_to_cart_button button product_type_simple">Add to cart</a>
</li>
<li class="post-1919 product type-product status-publish hentry last sale instock">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product/ezekiel-juniors-avril-jacket/">
<span class="onsale">Sale!</span>
<img width="170" height="270" src="images/starbucks_espresso_pods_3-170x270.png" class="attachment-shop_catalog wp-post-image" alt="starbucks_espresso_pods_3">
<h3>Starbucks Espresso Pods</h3>
<div class="star-rating" title="Rated 4.50 out of 5"><span style="width:90%"><strong class="rating">4.50</strong> out of 5</span><b class="rate_content">Rated 4.50 out of 5</b></div>
<span class="price"><del><span class="amount">$106.50</span></del> <ins><span class="amount">$95</span></ins></span>
</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/?add-to-cart=1919" rel="nofollow" data-product_id="1919" data-product_sku="" class="add_to_cart_button button product_type_simple">Add to cart</a>
</li>
</ul>
</div>
</div></div>
</div> 
<div class="sm_hr"></div> 
<div class="row">
<div class="span4"><div class="banner-wrap bottom_banner color_link"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/delivery/" class="banner_main_link"><figure><img src="images/delivery.png" alt=""></figure><h5><span>Free Shipping</span> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a></div> </div>
<div class="span4"><div class="banner-wrap bottom_banner"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/" class="banner_main_link"><figure><img src="images/phone.png" alt=""></figure><h5>Order online <span>1(800) 234-5678</span></h5><p>Hours: 8am-11pm PST M-Th; 8am-9pm PST Fri<br>
</p></a></div> </div>
<div class="span4"><div class="banner-wrap bottom_banner color_dark"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/shop/" class="banner_main_link"><figure><img src="images/gift.png" alt=""></figure><h5>SEND A GIFT</h5><p>Choose from any of our extensive range </p></a></div> </div>
</div> 
<div class="clear"></div>
 
</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="motopress-wrapper footer">
<div class="container">
<div class="row">
<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="53eee0ebc8a12">
<div class="footer-widgets">
<div class="row" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div id="product_categories-2" class="visible-all-devices "><h3>Categories</h3><ul class="product-categories"><li class="cat-item cat-item-44"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/americano/">Americano</a></li>
<li class="cat-item cat-item-45"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/coffee-beans/">Coffee beans</a></li>
<li class="cat-item cat-item-43"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/espresso/">Espresso</a></li>
<li class="cat-item cat-item-46"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/moca-madness/">Moca Madness</a></li>
<li class="cat-item cat-item-47"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/product-category/organic-coffee/">Organic Coffee</a></li>
</ul></div></div>
<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div id="nav_menu-2" class="visible-all-devices "><h3>Information</h3><div class="menu-information-menu-container"><ul id="menu-information-menu" class="menu"><li id="menu-item-1990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1990"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/">About Us</a></li>
<li id="menu-item-1989" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1989"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/delivery/">Delivery</a></li>
<li id="menu-item-1991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1991"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/testi/">Testimonials</a></li>
<li id="menu-item-1992" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1992"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/about/archives/">Archives</a></li>
<li id="menu-item-1993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1993"><a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/privacy-policy/">Privacy Policy</a></li>
</ul></div></div></div>
<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div id="recent-posts-2" class="visible-all-devices "> <h3>Recent Posts</h3> <ul>
<li>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/uncategorized/mauris-posuere/" title="Mauris posuere">Mauris posuere</a>
</li>
<li>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/sed-laoreet-imperdiet/donec-tempor-libero/" title="Donec tempor libero">Donec tempor libero</a>
</li>
<li>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/sed-laoreet-imperdiet/etiam-dictum-egestas/" title="Etiam dictum egestas">Etiam dictum egestas</a>
</li>
<li>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/phasellus-ultrices/phasellus-fringilla/" title="Phasellus fringilla">Phasellus fringilla</a>
</li>
<li>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/phasellus-ultrices/vivamus-vel-sem-at/" title="Vivamus vel sem at">Vivamus vel sem at</a>
</li>
</ul>
</div></div>
<div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div id="social_networks-2" class="visible-all-devices "><h3>Contact us</h3>  
<div class="social_message">
<i class="icon-home"></i>
<p>8901 Marmora Road, Glasgow,
D04 89GR</p>
</div>
<h3>Follow us</h3> <ul class="social social__row clearfix unstyled">
<li class="social_li">
<a class="social_link social_link__twitter" rel="tooltip" data-original-title="twitter" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/#">
<i class="icon-twitter"></i>
</a>
</li>
<li class="social_li">
<a class="social_link social_link__facebook" rel="tooltip" data-original-title="facebook" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/#">
<i class="icon-facebook"></i>
</a>
</li>
<li class="social_li">
<a class="social_link social_link__rss" rel="tooltip" data-original-title="rss" href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/#">
<i class="icon-rss"></i>
</a>
</li>
</ul>
 
</div></div>
</div>
</div>
<div class="copyright">
<div class="row" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
<div id="footer-text" class="footer-text">
<a href="./index_files/index.html" title="" class="site-name">Coffee</a> is proudly powered by <a href="http://wordpress.org/">WordPress</a> <a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/feed/" rel="nofollow" title="Entries (RSS)">Entries (RSS)</a> and <a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/comments/feed/" rel="nofollow">Comments (RSS)</a>
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/privacy-policy/" title="Privacy Policy">Privacy Policy</a>
 
</div></div>
<div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php" data-motopress-id="520a2c647a3b7" data-motopress-file="wrapper/wrapper-footer.php">
</div>
</div>
</div> </div>
</div>
</div>
</footer>
 
</div>
<div id="back-top-wrapper" class="visible-desktop">
<p id="back-top">
<a href="http://livedemo00.template-help.com/free_2013_wocommerce_2_0_14/#top"><span></span></a>
</p>
</div>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"countries":"{\"AF\":[],\"AT\":[],\"BE\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"FI\":[],\"FR\":[],\"HU\":[],\"IS\":[],\"IL\":[],\"KR\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NF\":\"Newfoundland\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"IN\":{\"AP\":\"Andra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TR\":\"Tripura\",\"UT\":\"Uttaranchal\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadar and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"MLK\":\"Melaka\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"PNG\":\"Pulau Pinang\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"KUL\":\"W.P. Kuala Lumpur\",\"LBN\":\"W.P. Labuan\",\"PJY\":\"W.P. Putrajaya\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ES\":{\"C\":\"A Coru\u00f1a\",\"VI\":\"\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\u00eda\",\"O\":\"Asturias\",\"AV\":\"\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\u00e1ceres\",\"CA\":\"C\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Guip\u00fazcoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Vizcaya\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"TH\":{\"TH-37\":\"Amnat Charoen (\u0e2d\u0e33\u0e19\u0e32\u0e08\u0e40\u0e08\u0e23\u0e34\u0e0d)\",\"TH-15\":\"Ang Thong (\u0e2d\u0e48\u0e32\u0e07\u0e17\u0e2d\u0e07)\",\"TH-14\":\"Ayutthaya (\u0e1e\u0e23\u0e30\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e2d\u0e22\u0e38\u0e18\u0e22\u0e32)\",\"TH-10\":\"Bangkok (\u0e01\u0e23\u0e38\u0e07\u0e40\u0e17\u0e1e\u0e21\u0e2b\u0e32\u0e19\u0e04\u0e23)\",\"TH-38\":\"Bueng Kan (\u0e1a\u0e36\u0e07\u0e01\u0e32\u0e2c)\",\"TH-31\":\"Buri Ram (\u0e1a\u0e38\u0e23\u0e35\u0e23\u0e31\u0e21\u0e22\u0e4c)\",\"TH-24\":\"Chachoengsao (\u0e09\u0e30\u0e40\u0e0a\u0e34\u0e07\u0e40\u0e17\u0e23\u0e32)\",\"TH-18\":\"Chai Nat (\u0e0a\u0e31\u0e22\u0e19\u0e32\u0e17)\",\"TH-36\":\"Chaiyaphum (\u0e0a\u0e31\u0e22\u0e20\u0e39\u0e21\u0e34)\",\"TH-22\":\"Chanthaburi (\u0e08\u0e31\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-50\":\"Chiang Mai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48)\",\"TH-57\":\"Chiang Rai (\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e23\u0e32\u0e22)\",\"TH-20\":\"Chonburi (\u0e0a\u0e25\u0e1a\u0e38\u0e23\u0e35)\",\"TH-86\":\"Chumphon (\u0e0a\u0e38\u0e21\u0e1e\u0e23)\",\"TH-46\":\"Kalasin (\u0e01\u0e32\u0e2c\u0e2a\u0e34\u0e19\u0e18\u0e38\u0e4c)\",\"TH-62\":\"Kamphaeng Phet (\u0e01\u0e33\u0e41\u0e1e\u0e07\u0e40\u0e1e\u0e0a\u0e23)\",\"TH-71\":\"Kanchanaburi (\u0e01\u0e32\u0e0d\u0e08\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-40\":\"Khon Kaen (\u0e02\u0e2d\u0e19\u0e41\u0e01\u0e48\u0e19)\",\"TH-81\":\"Krabi (\u0e01\u0e23\u0e30\u0e1a\u0e35\u0e48)\",\"TH-52\":\"Lampang (\u0e25\u0e33\u0e1b\u0e32\u0e07)\",\"TH-51\":\"Lamphun (\u0e25\u0e33\u0e1e\u0e39\u0e19)\",\"TH-42\":\"Loei (\u0e40\u0e25\u0e22)\",\"TH-16\":\"Lopburi (\u0e25\u0e1e\u0e1a\u0e38\u0e23\u0e35)\",\"TH-58\":\"Mae Hong Son (\u0e41\u0e21\u0e48\u0e2e\u0e48\u0e2d\u0e07\u0e2a\u0e2d\u0e19)\",\"TH-44\":\"Maha Sarakham (\u0e21\u0e2b\u0e32\u0e2a\u0e32\u0e23\u0e04\u0e32\u0e21)\",\"TH-49\":\"Mukdahan (\u0e21\u0e38\u0e01\u0e14\u0e32\u0e2b\u0e32\u0e23)\",\"TH-26\":\"Nakhon Nayok (\u0e19\u0e04\u0e23\u0e19\u0e32\u0e22\u0e01)\",\"TH-73\":\"Nakhon Pathom (\u0e19\u0e04\u0e23\u0e1b\u0e10\u0e21)\",\"TH-48\":\"Nakhon Phanom (\u0e19\u0e04\u0e23\u0e1e\u0e19\u0e21)\",\"TH-30\":\"Nakhon Ratchasima (\u0e19\u0e04\u0e23\u0e23\u0e32\u0e0a\u0e2a\u0e35\u0e21\u0e32)\",\"TH-60\":\"Nakhon Sawan (\u0e19\u0e04\u0e23\u0e2a\u0e27\u0e23\u0e23\u0e04\u0e4c)\",\"TH-80\":\"Nakhon Si Thammarat (\u0e19\u0e04\u0e23\u0e28\u0e23\u0e35\u0e18\u0e23\u0e23\u0e21\u0e23\u0e32\u0e0a)\",\"TH-55\":\"Nan (\u0e19\u0e48\u0e32\u0e19)\",\"TH-96\":\"Narathiwat (\u0e19\u0e23\u0e32\u0e18\u0e34\u0e27\u0e32\u0e2a)\",\"TH-39\":\"Nong Bua Lam Phu (\u0e2b\u0e19\u0e2d\u0e07\u0e1a\u0e31\u0e27\u0e25\u0e33\u0e20\u0e39)\",\"TH-43\":\"Nong Khai (\u0e2b\u0e19\u0e2d\u0e07\u0e04\u0e32\u0e22)\",\"TH-12\":\"Nonthaburi (\u0e19\u0e19\u0e17\u0e1a\u0e38\u0e23\u0e35)\",\"TH-13\":\"Pathum Thani (\u0e1b\u0e17\u0e38\u0e21\u0e18\u0e32\u0e19\u0e35)\",\"TH-94\":\"Pattani (\u0e1b\u0e31\u0e15\u0e15\u0e32\u0e19\u0e35)\",\"TH-82\":\"Phang Nga (\u0e1e\u0e31\u0e07\u0e07\u0e32)\",\"TH-93\":\"Phatthalung (\u0e1e\u0e31\u0e17\u0e25\u0e38\u0e07)\",\"TH-56\":\"Phayao (\u0e1e\u0e30\u0e40\u0e22\u0e32)\",\"TH-67\":\"Phetchabun (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e39\u0e23\u0e13\u0e4c)\",\"TH-76\":\"Phetchaburi (\u0e40\u0e1e\u0e0a\u0e23\u0e1a\u0e38\u0e23\u0e35)\",\"TH-66\":\"Phichit (\u0e1e\u0e34\u0e08\u0e34\u0e15\u0e23)\",\"TH-65\":\"Phitsanulok (\u0e1e\u0e34\u0e29\u0e13\u0e38\u0e42\u0e25\u0e01)\",\"TH-54\":\"Phrae (\u0e41\u0e1e\u0e23\u0e48)\",\"TH-83\":\"Phuket (\u0e20\u0e39\u0e40\u0e01\u0e47\u0e15)\",\"TH-25\":\"Prachin Buri (\u0e1b\u0e23\u0e32\u0e08\u0e35\u0e19\u0e1a\u0e38\u0e23\u0e35)\",\"TH-77\":\"Prachuap Khiri Khan (\u0e1b\u0e23\u0e30\u0e08\u0e27\u0e1a\u0e04\u0e35\u0e23\u0e35\u0e02\u0e31\u0e19\u0e18\u0e4c)\",\"TH-85\":\"Ranong (\u0e23\u0e30\u0e19\u0e2d\u0e07)\",\"TH-70\":\"Ratchaburi (\u0e23\u0e32\u0e0a\u0e1a\u0e38\u0e23\u0e35)\",\"TH-21\":\"Rayong (\u0e23\u0e30\u0e22\u0e2d\u0e07)\",\"TH-45\":\"Roi Et (\u0e23\u0e49\u0e2d\u0e22\u0e40\u0e2d\u0e47\u0e14)\",\"TH-27\":\"Sa Kaeo (\u0e2a\u0e23\u0e30\u0e41\u0e01\u0e49\u0e27)\",\"TH-47\":\"Sakon Nakhon (\u0e2a\u0e01\u0e25\u0e19\u0e04\u0e23)\",\"TH-11\":\"Samut Prakan (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e1b\u0e23\u0e32\u0e01\u0e32\u0e23)\",\"TH-74\":\"Samut Sakhon (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e32\u0e04\u0e23)\",\"TH-75\":\"Samut Songkhram (\u0e2a\u0e21\u0e38\u0e17\u0e23\u0e2a\u0e07\u0e04\u0e23\u0e32\u0e21)\",\"TH-19\":\"Saraburi (\u0e2a\u0e23\u0e30\u0e1a\u0e38\u0e23\u0e35)\",\"TH-91\":\"Satun (\u0e2a\u0e15\u0e39\u0e25)\",\"TH-17\":\"Sing Buri (\u0e2a\u0e34\u0e07\u0e2b\u0e4c\u0e1a\u0e38\u0e23\u0e35)\",\"TH-33\":\"Sisaket (\u0e28\u0e23\u0e35\u0e2a\u0e30\u0e40\u0e01\u0e29)\",\"TH-90\":\"Songkhla (\u0e2a\u0e07\u0e02\u0e25\u0e32)\",\"TH-64\":\"Sukhothai (\u0e2a\u0e38\u0e42\u0e02\u0e17\u0e31\u0e22)\",\"TH-72\":\"Suphan Buri (\u0e2a\u0e38\u0e1e\u0e23\u0e23\u0e13\u0e1a\u0e38\u0e23\u0e35)\",\"TH-84\":\"Surat Thani (\u0e2a\u0e38\u0e23\u0e32\u0e29\u0e0e\u0e23\u0e4c\u0e18\u0e32\u0e19\u0e35)\",\"TH-32\":\"Surin (\u0e2a\u0e38\u0e23\u0e34\u0e19\u0e17\u0e23\u0e4c)\",\"TH-63\":\"Tak (\u0e15\u0e32\u0e01)\",\"TH-92\":\"Trang (\u0e15\u0e23\u0e31\u0e07)\",\"TH-23\":\"Trat (\u0e15\u0e23\u0e32\u0e14)\",\"TH-34\":\"Ubon Ratchathani (\u0e2d\u0e38\u0e1a\u0e25\u0e23\u0e32\u0e0a\u0e18\u0e32\u0e19\u0e35)\",\"TH-41\":\"Udon Thani (\u0e2d\u0e38\u0e14\u0e23\u0e18\u0e32\u0e19\u0e35)\",\"TH-61\":\"Uthai Thani (\u0e2d\u0e38\u0e17\u0e31\u0e22\u0e18\u0e32\u0e19\u0e35)\",\"TH-53\":\"Uttaradit (\u0e2d\u0e38\u0e15\u0e23\u0e14\u0e34\u0e15\u0e16\u0e4c)\",\"TH-95\":\"Yala (\u0e22\u0e30\u0e25\u0e32)\",\"TH-35\":\"Yasothon (\u0e22\u0e42\u0e2a\u0e18\u0e23)\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\",\"AS\":\"American Samoa\",\"GU\":\"Guam\",\"MP\":\"Northern Mariana Islands\",\"PR\":\"Puerto Rico\",\"UM\":\"US Minor Outlying Islands\",\"VI\":\"US Virgin Islands\"}}","plugin_url":"http:\/\/livedemo00.template-help.com\/free_2013_wocommerce_2_0_14\/wp-content\/plugins\/woocommerce","ajax_url":"\/free_2013_wocommerce_2_0_14\/wp-admin\/admin-ajax.php","ajax_loader_url":"http:\/\/livedemo00.template-help.com\/free_2013_wocommerce_2_0_14\/wp-content\/plugins\/woocommerce\/assets\/images\/ajax-loader@2x.gif","i18n_select_state_text":"Select an option\u2026","i18n_required_rating_text":"Please select a rating","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_required_text":"required","i18n_view_cart":"View Cart \u2192","review_rating_required":"yes","update_order_review_nonce":"05a67743c6","apply_coupon_nonce":"93cd4a73bc","option_guest_checkout":"yes","checkout_url":"\/free_2013_wocommerce_2_0_14\/wp-admin\/admin-ajax.php?action=woocommerce-checkout","is_checkout":"0","update_shipping_method_nonce":"09e74de81e","cart_url":"http:\/\/livedemo00.template-help.com\/free_2013_wocommerce_2_0_14\/cart\/","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<?php if(!$bMinify) { ?>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/livedemo00.template-help.com\/free_2013_wocommerce_2_0_14\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/camera.min.js"></script>
<script type="text/javascript" src="js/add-to-cart.min.js"></script>
<script type="text/javascript" src="js/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/woocommerce.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.min.js"></script>
<script type="text/javascript" src="js/cart-fragments.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/custom-script.js"></script>
<script>
(function($) {
	$(window).load(function() {
		if ($('.widget_shopping_cart_content').is(':empty')) {
			$('.widget_shopping_cart_content').text('No products in the cart.');
		}
	});
})(jQuery);
</script>
<?php } ?>
<?php if($bMinify) { ?>
<script type="text/javascript" src="<?= $jsBuild->uri('/m/MyCode.js'); ?>" async></script>
<?php } ?>
</body></html>