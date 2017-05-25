<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>
        <?php bloginfo('description'); ?> |
        <?php bloginfo('name'); ?>
    </title>
    <link rel="shortcut icon" href="https://flyinglionbrewing.com/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:700|Muli" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
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
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'nav')); ?>
            </div>
        </div>
    </header>
    <div id="content" class="content">
