
<?php
	$args = array('post_type' => 'footerposts', 'posts_per_page' => 1);
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>


		<div class="col-sm-4">
			<h4>Social Media</h4>
			<a style="font-size: 11px;" href="https://www.instagram.com/zolcannabis/">@zolcannabis</a>
		</div>
		<div class="col-sm-4">
			<h4>Contact</h4>
			<a style="font-size: 11px;" href="mailto:info@zolcannabis.com">info@zolcannabis.com</a>

		</div>
		<div class="col-sm-4 site-map">
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

		<div class="col-sm-12">
			<img style="display:block; margin: 60px auto 0px; opacity: .1;" width="120" src="<?php echo get_template_directory_uri(); ?>/img/logofullwhite.png">
		</div>
		

	<?php endwhile; ?>
<?php wp_reset_query(); ?>
