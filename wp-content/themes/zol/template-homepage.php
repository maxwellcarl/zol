<?php 
/* Template Name: Homepage */ 
get_header(); ?>
<section class="homepage-blocks cf">
	<div class="row fullwidth">
		<?php if( get_field('callout_block_img') ): ?>
		<div class="col-md-6 no-padding">
			<div class="block1" style="background: url('<?php the_field('callout_block_img'); ?>') center center; background-size: cover; ">
			</div>
		</div>
		<?php endif; ?>
		<?php if( get_field('callout_block_text') ): ?>
		<div class="col-md-6 no-padding">
			<div class="block2">
				<div class="middle">
					<div class="waypoint up">
						<h2><?php the_field('callout_block_text' , false, false); ?></h2>
						<a class="btn learn-more-btn">Hook It Up</a>
					</div>
					
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="homepage-strainfinder" style="margin: 0 0 90px 0;">
	<div class="strainfinder-heading" style="background: url('<?php the_field('strain_header_bg'); ?>') center center; background-size: cover; ">
		<h2 class="strain-finder-title">Strain<br>Finder</h2>
	</div>
	<div class="container-fluid">
		<div class="row fullwidth">
			<div class="col-xs-6 col-sm-3 no-padding strain-item" style="background:#eee;">
				<div class="strain-item-text">Social<br>&amp;<br>Energetic</div>
			</div>
			<div class="col-xs-6 col-sm-3 no-padding strain-item"  style="background:#ddd;">
				<div class="strain-item-text">Chill<br>&amp;<br>Thoughtful</div>
			</div>
			<div class="col-xs-6 col-sm-3 no-padding strain-item"  style="background:#ccc;">
				<div class="strain-item-text">Somewhere<br>In<br>Between</div>
			</div>
			<div class="col-xs-6 col-sm-3 no-padding strain-item"  style="background:#bbb;">
				<div class="strain-item-text">See Them All</div>
			</div>
		</div>
	</div>
</section>

<section class="homepage-about" style="padding: 30px 0 90px;">
	<div class="container">
		<?php
		// query for the about page
		$aboutcontent = new WP_Query( 'pagename=about-us' );
		while ( $aboutcontent->have_posts() ) : $aboutcontent->the_post();
		?>
		<div class="col-md-3 col-md-offset-1">
			<h2 class="section-title pull-left waypoint slide-in"><?php the_title(); ?></h2>
		</div>
		<div class="section-content col-md-7">
			<?php the_content(); ?>

			<a class="btn learn-more-btn" href="/about-us">Learn More</a>
		</div>
		<?php endwhile; 
			// reset post data (important!)
			wp_reset_postdata();
		?>
	</div>
</section>


<section class="homepage-playlists" style="padding: 30px 0 90px;">
	<div class="container">
		<div class="col-md-3 col-md-offset-1">
			<h2 class="section-title pull-left waypoint slide-in">Cannabis Playlists</h2>
		</div>
		<div class="col-md-7 playlists">
			<?php if( get_field('playlists') ): ?>
				<?php the_field('playlists' , false, false); ?>
			<?php endif; ?>

			<a class="btn learn-more-btn" href="http://soundcloud.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/sc.png" width="25" style="position: relative; right: 10px; top: -2px;">Follow Us</a>
		</div>

	</div>
</section>


<section class="homepage-news" style="padding: 30px 0 90px;">
	<div class="container">

		<div class="col-md-12 col-md-offset-0">
			<h2 class="section-title" style="float:left;">Cannabis News</h2>
		</div>
		<div class="col-md-12 col-md-offset-0">
		<div class="row" style="margin-top: 30px;">
		<?php
			$args = array('posts_per_page' => 3);
			$loop = new WP_Query($args);
			while ($loop->have_posts()) : $loop->the_post(); ?>
			<div class="col-md-4">
				    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				        <?php the_post_thumbnail('full');  ?>
				    </a>
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>

				<a class="read-more2" href="<?php the_permalink(); ?>">Read More</a>
			</div>
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		</div>
		</div>

		<!-- <a class="cf read-more2 full-blog-link" href="/blog">Full BLog</a> -->


	</div>
</section>


<section class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('parallax_window_image')?>" style="width: 100%; height: 600px ;display: block; position: relative;">
	
	<?php if( get_field('parallax_window_txt') ): ?>
	<div class="home-parallax-callout middle waypoint fade-in">
		<h1><?php the_field('parallax_window_txt' , false, false); ?></h1>
	</div>
	<?php endif; ?>
</section> 



<?php get_footer(); ?>
