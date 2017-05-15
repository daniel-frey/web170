<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile; endif; ?>
<div class ="row">
    <div class="column">
        <div class="col col-1 pad-20">
        <?php
            $args = array('numberposts' => '4');
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent){
                echo '<div><h2>'.$recent['post_title'].'</h2>'.$recent['post_content'].'</div>';
            }
            ?>
        </div>
        
    </div>
</div>
front-page.php
<?php get_footer(); ?>