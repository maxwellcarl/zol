<?php get_header(); ?>

<section class="main-content cf">
	<div class="container cf">


		<div class="col-sm-9">
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</div>

		<div class="col-sm-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</section>

<?php get_footer(); ?>
