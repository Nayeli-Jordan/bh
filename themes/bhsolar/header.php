<!DOCTYPE html>
<!-- Importante agregar el prefijo para cuando dice que og no se está usando -->
<html prefix="og: http://ogp.me/ns#" lang="es">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Meta robots -->
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />

		<!-- Facebook, Twitter metas -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/share.png">
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/share.png" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="210" />
		<meta property="og:image:height" content="110" />
		<meta property="fb:app_id" content="" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@" />

		<!-- Google+ -->
		<link rel="publisher" href="https://plus.google.com/+">

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Google font(s) -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Rancho|Open+Sans:400" rel="stylesheet"> -->

		<!--Style-->
		<link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/styles.css" media="screen,projection, print" />

		<!-- Canonical URL -->
		<link rel="canonical" href="<?php echo site_url(); ?>" />

		<!-- Sitemap Google Verify -->
		<meta name="google-site-verification" content="" />

		<!-- Noscript -->
		<noscript>Tu navegador no soporta JavaScript!</noscript>
		<?php wp_head(); ?>

		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/95e8587d777bd062626dfc68e/5fa51db18c9bd31a7d28f5cba.js");</script>
	</head>
	<body>
		<div id="popUp" class="modal">
			<div class="exit-modal"></div>
			<div class="modal-content">
				<div class="modal-body">
					<em class="icon-cancel close-modal"></em>
					<div class="row">
						<div class="col s12 bg-image hide-on-med-and-up"></div>
						<div class="col s12 m8 text-center content-newsletter">
							<p class="font-strong uppercase margin-bottom-10">¡Quiero un panel de regalo!</p>
							<p class="margin-bottom-20"><a href="<?php echo SITEURL ?>condiciones" target="_blank" class="text-underline">Obtén un panel de regalo</a> en la contratación de tu servicio</p>
							<?php include (TEMPLATEPATH . '/template/newsletter.php'); ?>
							<br>
							<?php include (TEMPLATEPATH . '/template/redes.php'); ?>
						</div>
						<div class="col s12 m4 bg-image hide-on-sm-and-down"></div>
					</div>
				</div>
			</div>
		</div>
		<header class="js-header relative">
			<div id="top-add">
				<p class="bounceIn"><a href="<?php echo SITEURL; ?>#section-contacto">Calcula tu ahorro</a> al usar paneles solares</p>
				<em id="close-add" class="icon-cancel cursor-pointer color-primary-dark-hover"></em>	
			</div>
		</header>
		<div class="[ main-body ]">