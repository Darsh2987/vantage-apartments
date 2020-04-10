<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="UTF-8">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.css">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<script type="text/javascript"> var ABSPATH = "<?php bloginfo('template_url'); ?>"; </script>

		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>

	<body>

		<!-- Header - logo, Phone Number, Email, Hamburger Icon and Nav -->
		<header>
			<div class="header-content">

				<div class="header-logo-and-contact">
					<div class="header-logo-and-hamburger">

						<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/images/va-logo-white.png" alt="vantage-logo">

						<!--Mobile Menu Icon -->
						<img class="house-icon" src="<?php echo get_template_directory_uri(); ?>/images/house-icon.png" alt="house-icon">
					</div>
				
					<div class="header-contact-and-nav">
						<div class="header-contact-info">
							<div class="header-phone-number">
								<img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" alt="phone-icon">
								<p>020 3773 4899</p>
							</div>

							<div class="header-email">
								<img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" alt="email-icon">
								<a href="mailto:res@vantageapartments.com">e:info@vantageapartments</a>
							</div>
						</div>

						<nav class="nav">
							<ul>
								<li class="nav-phone">020 3773 4899</li>
								<li class="nav-email"><a href="mailto:res@vantageapartments.com">e:info@vantageapartments</a></li>
								<li>Home</li>
								<li>Locations</li>
								<li>News</li>
								<li>FAQs</li>
								<li>Contact</li>
							</ul>
						</nav>
					</div>

				</div>
			</div>
		</header>


		<!-- main -->