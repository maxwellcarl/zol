<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png?v=2" />

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oswald:300,400,700" rel="stylesheet">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">

<!--[if IE]>
    <link href="/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

<?php wp_head(); ?>


<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
  assets: '<?php echo get_template_directory_uri(); ?>',
  tests: {}
});

</script>



</head>
<body <?php body_class(); ?>>




<!-- header pullout menu -->
<header class="menu-pullout">

	<a href="#" class="menu-close-btn"></a>

	<div class="desktop-menu">
		<nav class="primary-nav" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>
	</div>

	<div class="cube cube-menu">
	  <div class="top"></div>
	  <div class="right"></div>
	  <div class="bottom"></div>
	  <div class="left"></div>
	  <div class="front"></div>
	  <div class="back"></div>
	</div>

</header>
<div class="menu-pullout-overlay"></div>



<div id="wrapper"><!-- open site wrapper -->





<!-- header -->
<header class="main-header clear hidden-xs" role="banner">
	<div class="container">


		<div class="menu-pullout-btn">
			<!-- <div class="navigate-txt">Navigate.</div> -->
			<div class="btn-bar"></div>
			<div class="btn-bar"></div>
			<div class="btn-bar"></div>
		</div>

		<a href="/" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logofulldark-notagline.png">
		</a>
		<a href="/" class="logo-scrolled">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logofulldark-notagline.png">
		</a>

		<div class="tagline">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tag-white.png">
		</div>

		<div class="social-header">
			<div class="pull-left" style="margin-right: 15px; margin-top: 5px;">
				<a target="_blank" href="https://www.instagram.com/zolcannabis/">@zolcannabis</a>
				<a target="_blank" href="https://www.instagram.com/zolcannabis/">#zol</a>
			</div>
			<div class="pull-right">
				<a target="_blank" href="https://www.instagram.com/zolcannabis/">
					<img class="insta-logo" width="30" src="<?php echo get_template_directory_uri(); ?>/img/ints.png">
				</a>
			</div>
		</div>


	</div>
</header>

<!-- banner  sections -->
<? if ( is_page_template( 'template-homepage.php' ) ): ?><!-- homepage -->
	
<div class="hidden-xs">


		<?php get_template_part('includes/homeslider'); ?>


		<div id="mouse-icon" class="ease">
	    <div id="scroll-wheel"></div>
	  </div>

	</div>
</div>

<div class="visible-xs">
	<header class="header-mobile">

		<div class="menu-pullout-btn">
			<!-- <div class="navigate-txt">Navigate.</div> -->
			<div class="btn-bar"></div>
			<div class="btn-bar"></div>
			<div class="btn-bar"></div>
		</div>

		<div class="social-mobile">
			<a href="#">
				<span class='zocial-facebook'></span>
			</a>
			<a href="#">
				<span class='zocial-youtube'></span>
			</a>
			<a href="#">
				<span class='zocial-linkedin'></span>
			</a>
			<a href="#">
				<span class='zocial-twitter'></span>
			</a>

		</div>

		<a href="/" class="logo-mobile">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-main-dark.png">
		</a>

		<div class="img-nug waypoint blur-in up">
			<img src="<?php echo get_template_directory_uri(); ?>/img/img-nug.png">
		</div>

	</header>
</div>


<? elseif ( is_404() ): ?>

	
	<!-- funny 404 image here ? -->


<? elseif ( is_home() ): ?><!-- blog page (news) -->


	<div class="banner">
		<img src="<?php echo get_template_directory_uri(); ?>/img/newsletterbg2.jpg" class="page-banner-img">
		<div class="blog-title">
			<h1>Blog</h1>
		</div>
	</div>

<? elseif ( is_single() ): ?><!-- single blog page (news) -->

	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner">
		<img src="<?php echo $thumb_url[0]; ?>" class="page-banner-img">
	</div>

<? else: ?><!-- all pages -->
	
	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner">
		<img src="<?php echo $thumb_url[0]; ?>" class="page-banner-img">
	</div>


<? endif; ?>


<!-- wrapper -->
<div class="wrapper">
