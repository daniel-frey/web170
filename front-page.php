<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="https://flyinglionbrewing.com/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:700|Muli" rel="stylesheet">
		<link rel="stylesheet" href="stylesheet.css"/>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<!-- begin wp head -->
<?php wp_head(); ?>
<!-- end wp head -->
</head>
<body <?php body_class(); ?>>
	<header class="row" id="header">
        <div class="row">
            <div class="column">
            	                <a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_directory'); ?>/img/flyinglionbrewing2.svg" alt="Flying Lion Brewing" id="logo"></a>
                                <div id="menu" class="hamburger">
					<span id="line1"></span>
					<span id="line2"></span>
					<span id="line3"></span>
                </div>
        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav')); ?>
            </div>
        </div>
	</header>
    <div id="content" class="content">
<?php  // $thispage = get_the_ID(); // ?>
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
</div>
<div id="spread"></div>
	<div id="footer" class="content">
		<footer class="row">
			<div class="column">
				<div class="col col-2">
					<div class="col col-2-3 ralign pad-20">
						<h3>Always Welcome</h3>
						<ul>
							<li>Families</li>
							<li>Dogs</li>
							<li>Food</li>
						</ul>
						<ul id="social">
							<li><a href="https://www.facebook.com/flyinglionbrewing" target="_blank" id="facebook"></a></li>
							<li><a href="https://www.instagram.com/flyinglionbrewing/" target="_blank" id="instagram"></a></li>
							<li><a href="https://twitter.com/flyinglionbeer" target="_blank" id="twitter"></a></li>
						</ul>
					</div>
					<div class="col col-3 ralign pad-20">
						<h3>Hours</h3>
						<ul>
							<li>Mo<span>4-12</span></li>
							<li>Tu<span>4-12</span></li>
							<li>We<span>4-12</span></li>
							<li>Th<span>4-12</span></li>
							<li>Fr<span>4-12</span></li>
							<li>Sa<span>12-12</span></li>
							<li>Su<span>12-10</span></li>
						</ul>
					</div>
				</div>
				<div class="col col-2 pad-20">
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.6072227055984!2d-122.28629114792076!3d47.555972779079354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906a0ec2545e91%3A0xff44a02ac33ba0bc!2sFlying+Lion+Brewing!5e0!3m2!1sen!2sus!4v1487011348474" width="100%" height="190" frameborder="0" style="border:0" allowfullscreen></iframe>
						<p>5041 Rainier Avenue S, Seattle, WA 98118</p>
						<p><a href="tel:2066599912">206-659-9912</a></p>
					</div>
				</div>
			</div>
		</footer>
	</div>
<!-- begin wp footer -->
<?php wp_footer(); ?>
<!-- end wp footer -->
</body>
</html>

