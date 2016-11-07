<?php get_header(); ?>

<section class="main-content cf">
	<div class="container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<div class="col-sm-12">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>

		<?php endwhile; ?>
		<?php else: ?>
			<!-- nothing -->
		<?php endif; ?>

	</div>
</section>


<?php get_footer(); ?>
