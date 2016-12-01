
</div><!-- /wrapper -->



<section class="insta">
	<div class="tags" style="position:relative; text-align:center;">
		#zol
	</div>

	<h6 style="margin-top: 10px auto;"><img src="<?php echo get_template_directory_uri(); ?>/img/ints.png" width="25">&nbsp;&nbsp;<a href="https://www.instagram.com/zolcannabis/" target='_blank'>ZOLCANNABIS</a></h6>

  <div id="instafeed"></div>
</section>


<section class="sub-footer cf">

	<?php
		$args = array('post_type' => 'footerposts', 'posts_per_page' => 1);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post(); ?>
	
		<?php if( get_field('newsletter_img') ): ?>
		<div class="col-md-6 no-padding">
			<div class="newsletter-bg" style="background: url('<?php the_field('newsletter_img'); ?>') center center; background-size: cover; ">
				<div class="middle waypoint fade-in">
					<img width="200" src="<?php the_field('newsletter_logo'); ?>">
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if( get_field('newsletter_signup_embed') ): ?>
			<div class="newsletter-txt  col-md-6 no-padding " style="position: relative;">
				<div class="vertical">
					<?php the_field('newsletter_signup_embed' , false, false); ?>
				</div>
			</div>
		<?php endif; ?>

	<?php endwhile; ?>
	<?php wp_reset_query(); ?>

</section>

<footer class="main-footer" role="contentinfo">
	<div class="container cf">

		<?php get_template_part('includes/footerstuff'); ?>
	
	</div>

	<div class="cube" style="margin-top: 120px;">
		  <div class="top"></div>
		  <div class="right"></div>
		  <div class="bottom"></div>
		  <div class="left"></div>
		  <div class="front"></div>
		  <div class="back"></div>
	</div>
	<p style="position:relative; text-align:center; opacity:.8;">Webdesign by <a href="http://ditigalsauna.com">digitalsauna.com</a> | <a href="http://maxwellcarlscott.com">maxwellcarlscott.com</a></p>
</footer>


<!-- copyright -->
<p class="copyright">
	&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> and <a href="http://maxwellcarlscott.com">maxwellcarlscott.com</a>
</p>




<!-- close site wrapper -->
</div>



<!-- hide for sec

<div class="age-modal">
	<div class="age-modal-content">
		<img width="200" src="<?php echo get_template_directory_uri(); ?>/img/logo2white.png" style="margin-bottom: 30px;">
		<p style="margin-bottom: 15px;">Welcome to ZOL Premium Cannabis</p>
		<h2>Are you over the age of 21?</h2>
		<div class="age-btns" style="margin: 30px 0 10px;">
			<a id="Age-Confirm" href="#" class="btn age-btn" style="margin-right: 15px;">Yes, Let me in</a>
			<a href="#" class="btn age-btn">No</a>
		</div>
		<p>* Possible disclaimer</p>
	</div>
</div>
<div class="age-modal-overlay"></div>

-->





<!-- site overlay -->
<div class="site-overlay"></div>



<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/instafeed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lib/parallax.min.js"></script>
<?php wp_footer(); ?>





<script type="text/javascript">
var feed = new Instafeed({
  get: 'user',
  userId: '3671136593',
  accessToken: '1453825839.ba4c844.22eb3dcb13444ef4936549d4de569d44',
  resolution: 'standard_resolution',
  limit: 12
});
feed.run();


// ADD WAYPOINTS FUNCTION
$( document ).ready(function() {
	var viewport = $(window),
	setVisible = function (e) {
	    var viewportTop = viewport.scrollTop() - 30,
	        viewportBottom = viewport.scrollTop() + viewport.height() - 30;
	    $('.waypoint').each(function () {
	        var self = $(this),
	            top = self.offset().top,
	            bottom = top + self.height(),
	            topOnScreen = top >= viewportTop && top <= viewportBottom,
	            bottomOnScreen = bottom >= viewportTop && bottom <= viewportBottom,
	            elemVisible = topOnScreen || bottomOnScreen;
	        self.toggleClass('visible', elemVisible);
	    });
	};
	viewport.scroll(setVisible);
	setVisible();
});

</script>



<!-- analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-67401412-1', 'auto');
ga('send', 'pageview');

</script>

</body>
</html>
