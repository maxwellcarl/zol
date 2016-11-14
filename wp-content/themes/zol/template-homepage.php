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
					<div class="waypoint up"><h2><?php the_field('callout_block_text' , false, false); ?></h2></div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>

<section class="homepage-strainfinder">
	<div class="strainfinder-heading">
		<h2 class="strain-finder-title">Strain<br>Finder</h2>
	</div>
	<div class="container-fluid">
		<div class="row fullwidth">
			<div class="col-xs-3 no-padding strain-item">
				<div class="strain-item-text">Social<br>&amp;<br>Energetic</div>
			</div>
			<div class="col-xs-3 no-padding strain-item">
				<div class="strain-item-text">Chill<br>&amp;<br>Thoughtful</div>
			</div>
			<div class="col-xs-3 no-padding strain-item">
				<div class="strain-item-text">Somewhere<br>In<br>Between</div>
			</div>
			<div class="col-xs-3 no-padding strain-item">
				<div class="strain-item-text">See Them All</div>
			</div>
		</div>
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

		<div class="container">
			<div class="row">
				<?php

				$the_query = new WP_Query( 'post_type=post&posts_per_page=3'  );
				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
						<div class="col-md-4">
							<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2>
								<?php the_post_thumbnail(); ?>
							</a>
							<?php the_excerpt(); ?>
						</div>
					<?php }
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				} ?>
			</div>
		</div>

	<?php endwhile; ?>
	<?php else: ?>
	<!-- nothing -->
	<?php endif; ?>

	</div>
</section>


<?php get_footer(); ?>
