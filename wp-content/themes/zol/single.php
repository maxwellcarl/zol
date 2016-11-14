<?php get_header(); ?>

	<section class="content-block blog cf">

		<div class="col-md-6 col-md-offset-2">
			<?php get_template_part('loopsingle'); ?>
			<?php get_template_part('pagination'); ?>
		</div>

		<div>
			<?php get_sidebar(); ?>
		</div>

	</section>




<?php get_footer(); ?>
