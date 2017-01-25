<?php 
/* Template Name: Contact */ 
get_header(); ?>

<section class="main-content cf">
	<div class="container">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<div class="col-md-4 col-md-offset-1">
				<?php the_content(); ?>
			</div>
			<div class="col-md-6">
				<div class="contact-page-form">
					<?php echo do_shortcode( '[contact-form-7 id="189" title="Contact form 2"]' ); ?>
				</div>
			</div>

		<?php endwhile; ?>
		<?php else: ?>
			<!-- nothing -->
		<?php endif; ?>

	</div>
</section>



<?php get_footer(); ?>
