<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="news-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="post-title"><?php the_title(); ?></h1>
		<div class="post-meta">
			<span class="date"><?php the_time('F j, Y'); ?></span>
			<div>
				Share:
				<a href='#'> 
					<span class='post-social-item zocial-facebook'></span>
				</a>
				<a href='#'> 
					<span class='post-social-item zocial-twitter'></span>
				</a> 
			</div>
		</div>
		<p><?php the_content(); ?></p>
		
	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
