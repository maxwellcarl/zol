
<?php
	$args = array('post_type' => 'footerposts', 'posts_per_page' => 1);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>

		<div class="col-sm-3">
			<h4>Links / Resources</h4>
		</div>
		<div class="col-sm-3">
			<h4>Contact</h4>
			<a style="font-size: 11px;" href="http://maxwellcarlscott.com">maxwellcarlscott.com</a>

		</div>
		<div class="col-sm-6 site-map">
			<h4>Site Map</h4>
			<?php
			  $args = array(
			  'orderby' => 'post_title',
			  'order' => 'ASC',
				'post_type' => 'page',
				'showposts' => 1000,
				'caller_get_posts' => 1
			  ); 
			$pages = get_posts($args);
			      foreach($pages as $page) {
			          $out .= '<li>';
			          $out .=  '<a href="'.get_permalink($page->ID).'" title="'.wptexturize($page->post_title).'">'.wptexturize($page->post_title).'</a></li>';
			      }
			    $out = '<ul class="page_post">' . $out . '</ul>';
			    echo $out;
			?>
		</div>
		

	<?php endwhile; ?>
<?php wp_reset_query(); ?>
