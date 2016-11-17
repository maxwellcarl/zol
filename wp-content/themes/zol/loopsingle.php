<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1 class="blog-post-title">
			<?php the_title(); ?></a>
		</h1>

		<div class="blog-post-meta">
			<span class="author">Posted by: <?php the_author(); ?></span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="date"><?php the_time('F j, Y'); ?></span>
		</div>
		<div class="blog-meta-share">
			<span style="float:left; opacity: .5; margin-right: 5px; " class="share-txt">SHARE: &nbsp;</span><?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
		</div>
		
		<div class="blog-post-content">
			<?php the_content(); ?>
		</div>


		
	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
