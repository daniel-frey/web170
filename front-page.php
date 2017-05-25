<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile; endif; ?>
<div class ="row">
    <div class="column">
        <div class="col col-2-3 pad-20">
        <?php
            $args = array('numberposts' => '4');
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent){
                echo '<div><h2>'.$recent['post_title'].'</h2>'.$recent['post_content'].'</div>';
            }
            ?>
        </div>
        
<div class ="col col-3 pad-20">
<?php get_sidebar(); ?>
</div>
    </div>
    </div>
front-page.php
<?php get_footer(); ?>