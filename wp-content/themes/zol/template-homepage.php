<?php 
/* Template Name: Homepage */ 
get_header(); ?>
TEST
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
					<div class="waypoint up"><h2><?php the_field('callout_block_text' , false, false); ?></h2></div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="homepage-about">
	<div class="container">
		<?php
		// query for the about page
		$aboutcontent = new WP_Query( 'pagename=about-us' );
		while ( $aboutcontent->have_posts() ) : $aboutcontent->the_post();
		?>
		<div class="col-md-3">
			<h2 class="section-title pull-left waypoint slide-in"><?php the_title(); ?></h2>
		</div>
		<div class="section-content col-md-9">
			<?php the_content(); ?>

			<a class="btn learn-more-btn" href="/about-us">Learn More</a>
		</div>
		<?php endwhile; 
			// reset post data (important!)
			wp_reset_postdata();
		?>
	</div>
</section>

<section class="main-content cf">
	<div class="container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<div class="col-md-3">
			<h2 class="section-title pull-left waypoint slide-in">More Content????</h2>
		</div>
		<div class="section-content col-md-9">
			<?php the_content(); ?>

			<a class="btn learn-more-btn" href="/about-us">Learn More</a>
		</div>

	<?php endwhile; ?>
	<?php else: ?>
	<!-- nothing -->
	<?php endif; ?>

	</div>
</section>


<?php get_footer(); ?>
