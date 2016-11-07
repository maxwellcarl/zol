<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<!-- <div class="sidebar-book">
		<a href="/book-now" class="sidebar-btn btn-square">Book Now</a>
	</div> -->

	<div class="mailchimp sidebar">
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="//swim-city.us11.list-manage.com/subscribe/post?u=3b66191a700b033d3c5226f84&amp;id=848a6b7e86" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
			
		<div class="mc-field-group">
			<h4>Newsletter Signup</h4>
			<input type="email" placeholder="Enter Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_3b66191a700b033d3c5226f84_848a6b7e86" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		   	</div>
		</form>
		</div>

		<!--End mc_embed_signup-->
	</div>

</aside>
<!-- /sidebar -->
