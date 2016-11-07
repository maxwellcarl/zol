<?php get_header(); ?>

	<section class="content-block blog cf">

		<div class="col-sm-12">
			<h1><?php wp_title(''); ?></h1>
		</div>
		<div class="col-sm-9">

			<?php get_template_part('loopsingle'); ?>

			<?php get_template_part('pagination'); ?>
		</div>

		<div class="col-sm-3">
			<?php get_sidebar(); ?>
		</div>

	</section>

<script>
(function ($, root, undefined) {
$(function () {
'use strict';

	var sidebar_distance = $('.sidebar').offset().top,
	$window = $(window);
	$window.scroll(function() {
	  if ( $window.scrollTop() >= sidebar_distance ) {
	    $('.sidebar').addClass('sticky');
	  } else {
	  	$('.sidebar').removeClass('sticky');
	  }
	});
});	
})(jQuery, this);
</script>


<?php get_footer(); ?>
