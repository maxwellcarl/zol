<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>

		<h3 class="blog-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		
		<div class="blog-post-meta">
			<span class="author">Posted by: <?php the_author(); ?></span><span class="date"> On Date: <?php the_time('F j, Y'); ?></span>
		</div>
		
		<div class="blog-post-content">
			<?php the_content(); ?>	
		</div>

		<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?> wtf</div>
		<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?> wtf</div>


		
	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
