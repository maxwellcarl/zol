<?php get_header(); ?>

	<section class="content-block margin">

		<h3><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>

		<?php get_template_part('loop'); ?>

		<?php get_template_part('pagination'); ?>

	</section>

<?php get_footer(); ?>
