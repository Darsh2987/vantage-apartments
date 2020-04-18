<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="UTF-8">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(); ?></title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"> -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<script type="text/javascript"> var ABSPATH = "<?php bloginfo('template_url'); ?>"; </script>

		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>

	<body>

		<!-- Header - logo, Phone Number, Email, Hamburger Icon and Nav -->
		<header id="header">
			<div class="header-content">

				<div class="header-logo-and-contact">
					<div class="header-logo-and-mobile-nav-icon">

						<div class="header-logo">
							<a href="<?php echo site_url('/home/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/va-logo-green-trans.png" alt="vantage-logo"></a>
						</div>

						<!--Mobile Menu Icon -->
						<div class="mobile-nav-icon">
							<i class="far fa-building"></i>
						</div>
					</div>
				
					<div class="header-contact-and-nav">
						<div class="header-contact-info">

							<div class="header-phone-number">
								<p><i class="fas fa-phone-alt"></i>020 3773 4899</p>
							</div>

							<div class="header-email">
								<p><a href="mailto:res@vantageapartments.com"><i class="far fa-envelope"></i>res@vantageapartments.com</a>
							</div>
						</div>

						<nav id="header-main-nav" class="header-main-nav">
							<ul class= "main-nav">
								<li class="nav-phone"><i class="fas fa-phone-alt"></i>020 3773 4899</li>
								<li class="nav-email"><a href="mailto:res@vantageapartments.com"><i class="far fa-envelope"></i>res@vantageapartments.com</a></li>
								<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
							</ul>

							<?php wp_nav_menu( array( 'menu' => 'location-nav' ) ); ?>
							<?php wp_nav_menu(array('menu' => 'privacy-policy')); ?>
						</nav>
					</div>

				</div>
			</div>
		</header>


		<!-- main -->