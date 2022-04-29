<head>
<?php wp_head(); ?>
</head>
<header>
    <h1><?php echo get_bloginfo('name');?> <h1>
    <?php wp_nav_menu(array('theme_location' => 'links-menu', 'menu_class' => 'myNavList'));?>
    <?php wp_nav_menu(array('theme_location' => 'extra-menu', 'menu_class' => 'myNavListCss'));?>
</header>
</html>
