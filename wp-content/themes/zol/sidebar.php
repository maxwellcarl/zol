<!-- sidebar -->
<aside class="sidebar" role="complementary">


	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget tag-cloud">
		<h4>Tag Cloud</h4>
		<?php wp_tag_cloud( 'number=10&orderby=count' ); ?>
	</div>

	<!-- <div class="sidebar-book">
		<a href="/book-now" class="sidebar-btn btn-square">Book Now</a>
	</div> -->


</aside>
<!-- /sidebar -->
