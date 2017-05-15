<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<?php flb_list_child_pages(); ?>
<?php the_content();?>
<?php  endwhile; endif; ?>
page.php
<?php get_footer(); ?>
