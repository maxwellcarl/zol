<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="news-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="news-post-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>

		<h3 class="news-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		
		<div class="meta">
			<span class="date"><?php the_time('F j, Y'); ?></span>
		</div>
		
		<p><?php the_excerpt(); ?></p>
		
	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
