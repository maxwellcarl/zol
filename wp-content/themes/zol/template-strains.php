<?php 
/* Template Name: Strain Finder Page */
get_header(); ?>

<section class="main-content cf">
	<div class="container">

		<h1>Our Strains</h1>



		<?php
			$args = array('post_type' => 'strains', 'posts_per_page' => 20);
			$loop = new WP_Query($args);
			while ($loop->have_posts()) : $loop->the_post(); ?>

			<div class="row cf" >
				<div class="col-md-4 col-md-offset-1">
					<?php the_title( '<h2>', '</h2>' ); ?>
				  <div class="strain-img waypoint blur-in up">
				  	<?php the_post_thumbnail(); ?>
				  </div>
				</div>
				<div class="col-md-6">
					<p><?php the_content(); ?></p>
				</div>
			</div>

			<?php endwhile; ?>
		<?php wp_reset_query(); ?>


	</div>
</section>


<?php get_footer(); ?>
