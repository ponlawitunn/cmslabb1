<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <div id="header">
            <div id="headerimg">
            <h1>
                <a href="<?php echo get_option('home'); ?>">
                <?php bloginfo('name'); ?></a>
            </h1>
                <div class="description">
                    <?php bloginfo('description'); ?>
                </div>
            </div>
        </div>