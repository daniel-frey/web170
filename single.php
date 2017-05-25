<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<div class="row">
	<div class="column">
		<div class="col col-1 pad-20">
			<h1><?php the_title(); ?></h1>
			<?php if (has_post_thumbnail()): ?>
			<div class="wrap-image"><?php the_post_thumbnail('large'); ?></div>
			<?php endif; ?>
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php  endwhile; endif; ?>
single.php
<?php get_footer(); ?>
