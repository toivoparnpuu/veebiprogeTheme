<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
<body>
<h1><?php echo get_bloginfo('name');?> <h1>
<header>
    <?php wp_nav_menu(array('theme_location' => 'links-menu', 'menu_class' => 'myNavList'));?>
    <?php wp_nav_menu(array('theme_location' => 'extra-menu', 'menu_class' => 'myNavListCss'));?>
</header>
