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
<header class="main-header clear" role="banner">
	<div class="container">


		<div class="menu-pullout-btn">
			<!-- <div class="navigate-txt">Navigate.</div> -->
			<div class="btn-bar"></div>
			<div class="btn-bar"></div>
			<div class="btn-bar"></div>
		</div>

		<a href="/" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo2white.png">
		</a>

		<div class="social-header">
			<div class="pull-left" style="margin-right: 15px; margin-top: 5px;">
				<a target="_blank" href="https://www.instagram.com/zolcannabis/">@zolcannabis</a>
				<a target="_blank" href="https://www.instagram.com/zolcannabis/">#zol</a>
			</div>
			<div class="pull-right">
				<a target="_blank" href="https://www.instagram.com/zolcannabis/">
					<img class="insta-logo" width="30" src="<?php echo get_template_directory_uri(); ?>/img/ints-white.png">
				</a>
			</div>
		</div>


	</div>
</header>

<!-- banner  sections -->
<? if ( is_page_template( 'template-homepage.php' ) ): ?><!-- homepage -->
	
	<div id="homecaro" class="carousel homepage-slider slide" data-ride="carousel" data-interval="false">
		<?php $row = 1; if( have_rows('homepage_slider') ): ?>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		  <?php while( have_rows('homepage_slider') ): the_row();
				$img = get_sub_field('img');
				$vid = get_sub_field('video_field');
				$txt = get_sub_field('slide_text');
				$callout_txt = get_sub_field('callout_text');
				?>
				<?php if( $img ): ?>
		    	<div class="item <?php if($row == 1) { echo 'active'; } ?>" style="background: url('<?php echo $img; ?>') top center; background-size: cover;">	
		    		<?php if( $callout_txt ): ?>
		    			<div class="callout-txt middle waypoint">
		    				<h1><?php echo $callout_txt; ?></h1>
		    			</div>
		    		<?php endif; ?>	
		    		<?php if( $txt ): ?>
		    			<div class="slide-text">
		    				<?php echo $txt; ?>
		    			</div>
		    		<?php endif; ?>
		    	</div>
		    <?php else: ?>
		    	<div class="item <?php if($row == 1) { echo 'active'; } ?>">
		    		<div class="vid-wrap"><?php echo $vid; ?></div>
		    		<?php if( $callout_txt ): ?>
		    			<div class="callout-txt middle waypoint">
		    				<h1><?php echo $callout_txt; ?></h1>
		    			</div>
		    		<?php endif; ?>	
		    		<?php if( $txt ): ?>
		    			<div class="slide-text">
		    				<?php echo $txt; ?>
		    			</div>
		    		<?php endif; ?>
		    	</div>
		    <?php endif; ?>

		  <?php $row++; endwhile; ?>
		  </div>
		<?php endif; ?>

	  <!-- Controls -->
	  <div class="slider-controls">
		  <a class="left pull-left" href="#homecaro" role="button" data-slide="prev">
		    <img width="20" src="<?php echo get_template_directory_uri(); ?>/img/leftarrow.png">
		  </a>
		  <a class="right pull-right" href="#homecaro" role="button" data-slide="next">
		    <img width="20" src="<?php echo get_template_directory_uri(); ?>/img/rightarrow.png">
		  </a>
		</div>


		<div id="mouse-icon" class="ease">
	    <div id="scroll-wheel"></div>
	  </div>

	</div>


<? elseif ( is_404() ): ?>

	
	<!-- funny 404 image here ? -->


<? elseif ( is_home() ): ?><!-- blog page (news) -->

	<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
  ?>
	<div class="banner">
		<img src="<?php echo $thumb_url[0]; ?>" class="page-banner-img">
	</div>

<? elseif ( is_single() ): ?><!-- single blog page (news) -->


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
