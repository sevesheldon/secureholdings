<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon_main.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/unslider-master/dist/css/unslider.css">
        
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>


        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css">

	</head>
	<body <?php body_class(); ?>>
		
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
						
							<!-- <h1 class="inset-text">Secure Holdings</h1> -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo2.jpg" alt="logo">

						</a>

					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">

						<?php html5blank_nav(); ?>

							<div class="socials" id="socials-header">

								<a target="_blank" href="https://www.facebook.com/john.sheldon.127">

									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Facebook.png" alt="facebook" class="social-icon">

								</a>

								<a target="_blank" href="https://www.linkedin.com/in/johnjsheldon">
									
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/Linkedin.png" alt="linkedin" class="social-icon">
								
								</a>

							</div>

					</nav>

					<!-- /nav -->

					

			</header>

			<h2 class="tagline">Simple Solutions. Honest Answers. Fair Prices.</h2>
			<!-- /header -->
