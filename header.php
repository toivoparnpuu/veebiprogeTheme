<head>
<?php wp_head(); ?>
</head>

</html>
<header>
    <h1><?php echo get_bloginfo('name');?> <h1>
    <?php wp_nav_menu(array('theme_location' => 'links-menu'));?>
</header>