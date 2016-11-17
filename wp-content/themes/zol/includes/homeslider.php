

<div id="homecaro" class="carousel homepage-slider slide" data-ride="carousel" data-interval="false">
<?php $row = 1; if( have_rows('homepage_slider') ): ?>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php while( have_rows('homepage_slider') ): the_row();
		$img = get_sub_field('img');
		$vid = get_sub_field('video_field');
		$txt = get_sub_field('slide_text');
		$callout_txt = get_sub_field('callout_text');
		?>
		<?php if( $img ): ?>
    	<div class="item <?php if($row == 1) { echo 'active'; } ?>" style="background: url('<?php echo $img; ?>') top center; background-size: cover;">	
    		<?php if( $callout_txt ): ?>
    			<div class="callout-txt middle waypoint">
    				<h1><?php echo $callout_txt; ?></h1>
    			</div>
    		<?php endif; ?>	
    		<?php if( $txt ): ?>
    			<div class="slide-text">
    				<?php echo $txt; ?>
    			</div>
    		<?php endif; ?>
    	</div>
    <?php else: ?>
    	<div class="item <?php if($row == 1) { echo 'active'; } ?>">
    		<div class="vid-wrap"><?php echo $vid; ?></div>
    		<?php if( $callout_txt ): ?>
    			<div class="callout-txt middle waypoint">
    				<h1><?php echo $callout_txt; ?></h1>
    			</div>
    		<?php endif; ?>	
    		<?php if( $txt ): ?>
    			<div class="slide-text">
    				<?php echo $txt; ?>
    			</div>
    		<?php endif; ?>
    	</div>
    <?php endif; ?>

  <?php $row++; endwhile; ?>
  </div>
<?php endif; ?>
<!-- Controls -->
<div class="slider-controls">
  <a class="left pull-left" href="#homecaro" role="button" data-slide="prev">
    <img width="20" src="<?php echo get_template_directory_uri(); ?>/img/leftarrow.png">
  </a>
  <a class="right pull-right" href="#homecaro" role="button" data-slide="next">
    <img width="20" src="<?php echo get_template_directory_uri(); ?>/img/rightarrow.png">
  </a>
</div>