<?php 
/* Template Name: Strain Finder Page */
get_header(); ?>

<section class="main-content cf">
	<div class="container">

		<h3 style="text-align:center; margin-bottom: 0;">Select Your Mood:</h3>
		<div class="strain-finders">
			<div class="block block1">
				<a href="#strain-1" data-toggle="elementscroll" class="block-tab btn">Uplifting / Energetic</a>
				<img width="200" src="<?php echo get_template_directory_uri(); ?>/img/strain-party.gif">
			</div>
			<div class="block block2">
				<a  href="#strain-2" data-toggle="elementscroll"  class="block-tab btn">Relaxation / Pain Relief</a>
				<img width="200" src="<?php echo get_template_directory_uri(); ?>/img/strain-sleep.gif">
			</div>
			<div class="block block3">
				<a href="#strain-3" data-toggle="elementscroll"  class="block-tab btn">Just Chilling</a>
				<img width="200" src="<?php echo get_template_directory_uri(); ?>/img/strain-chill.gif">
			</div>
		</div>

		<?php
			$args = array('post_type' => 'strains', 'posts_per_page' => 20);
			$loop = new WP_Query($args);
			$row = 1;
			while ($loop->have_posts()) : $loop->the_post(); ?>

			<div class="row cf" style="margin-bottom: 120px;">
				<div class="col-md-4 col-md-offset-1" id="strain-<?php echo $row ?>">
					<h1 style="font-family: 'brush'; position: absolute; width: 100%; z-index: 100; font-size: 36px;"><?php the_title(); ?></h1>
				  <div class="strain-img waypoint blur-in up" style="max-width: 300px; margin: 0 auto; display: block;">
				  	<?php the_post_thumbnail(); ?>
				  </div>


					<!-- <figure>
						<svg viewBox="0 0 63.6619772368 63.6619772368">
							<circle class="pie1" cx="31.8309886184" cy="31.8309886184" r="15.9154943092"/>
							<circle class="pie2" cx="31.8309886184" cy="31.8309886184" r="15.9154943092"/>
							<circle class="pie3" cx="31.8309886184" cy="31.8309886184" r="15.9154943092"/>
							<circle class="pie4" cx="31.8309886184" cy="31.8309886184" r="15.9154943092"/>
						</svg>
					</figure> -->

				</div>
				<div class="col-md-6">
					<p><?php the_content(); ?></p>
				</div>
			</div>

			<?php $row++; endwhile; ?>
		<?php wp_reset_query(); ?>


	</div>
</section>


<?php get_footer(); ?>
