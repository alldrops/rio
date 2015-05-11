<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html>
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.js"></script>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<title><?php wp_title( '| Rio Brazilian Steakhouse', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/app.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/respond.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/ie.css">
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,100,100italic,300italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="container">
		<?php include("inc/mobile-navigation.php") ?>

		<div class="content-wrap">
			<div class="content">
				<?php include('inc/site-header.php') ?>