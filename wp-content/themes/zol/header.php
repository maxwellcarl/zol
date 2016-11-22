<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">
<link rel="icon" href="http://www.yoursite.com/favicon.ico?v=2" />


<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logofulldark-notagline.pngv=2" />

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


</header>
<div class="menu-pullout-overlay"></div>



<div id="wrapper"><!-- open site wrapper -->





<!-- header -->
<header class="main-header clear" role="banner">
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


		<div class="social-header pull-right">
			<div class="pull-left hidden-xs" style="margin-right: 15px; margin-top: 5px;">
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

		<div class="tagline">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tag-black.png">
		</div>

		<?php get_template_part('includes/homeslider'); ?>

		<div id="mouse-icon" class="ease">
	    <div id="scroll-wheel"></div>
	  </div>

	</div>
</div>

<div class="visible-xs">
	<header class="header-mobile">

		<div class="tagline">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tag-black.png">
		</div>

		<!-- 
		<div class="menu-pullout-btn">
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/img-nug2.png">
		</div>

		-->

		<div class="slider-nug middle">
			<img src="<?php echo get_template_directory_uri(); ?>/img/img-nug2.png">
		</div>

		<div id="mouse-icon" class="ease">
	    <div id="scroll-wheel"></div>
	  </div>


	</header>
</div>


<? elseif ( is_404() ): ?>

	
	<!-- funny 404 image here ? -->


<? elseif ( is_home() ): ?><!-- blog page (news) -->

	<div class="banner">
		<img src="<?php echo get_template_directory_uri(); ?>/img/basic.jpg" class="page-banner-img">
		<h1 class="page-title vertical waypoint fade-in"> Cannabis Blog</h1>
		<h2 class="page-title2 vertical waypoint fade-in"><div style="opacity:.8">Latest news from Zol Cannabis</div></h2>
	</div>


<? elseif ( is_archive() ): ?><!-- blog page (news) -->

	<div class="banner">
		<img src="<?php echo get_template_directory_uri(); ?>/img/newsletterbg2.jpg" class="page-banner-img">
		<h1 class="page-title vertical waypoint fade-in"> Post Archives</h1>
		<h2 class="page-title2 vertical waypoint fade-in"><div style="opacity:.8"><?php single_cat_title('Category:  '); ?></div></h2>
	</div>


<? elseif ( is_single() ): ?><!-- single blog page (news) -->

	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner" style="background: url('<?php echo $thumb_url[0]; ?>') no-repeat center center; background-size: cover;">
		<?php if( get_field('page_header') ): ?>
			<h1 class="page-title vertical waypoint fade-in"> <?php the_field('page_header'); ?></h1>
		<?php endif; ?>
			<h2 class="page-title2 vertical waypoint fade-in"><div style="opacity:.8"><span class="author">Posted by: <?php the_author(); ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="date"><?php the_time('F j, Y'); ?></span></div>
			</h2>
	</div>

<? else: ?><!-- all pages -->
	
	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner" style="background: url('<?php echo $thumb_url[0]; ?>') no-repeat center center; background-size: cover;">
		

		<?php if( get_field('page_header') ): ?>
			<h1 class="page-title vertical waypoint fade-in"> <?php the_field('page_header'); ?></h1>
		<?php endif; ?>
		<?php if( get_field('page_subheader') ): ?>
			<h2 class="page-title2 vertical waypoint fade-in"><div style="opacity:.8"><?php the_field('page_subheader'); ?></div></h2>
		<?php endif; ?>
	</div>


<? endif; ?>


<!-- wrapper -->
<div class="wrapper">
