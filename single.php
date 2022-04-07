<?php 
get_header();
the_title();
the_content();
?>
<p>Kõrgus: <?php echo(get_post_meta(get_the_ID(), $key = 'height', $single = true)); ?> </p>
<?php
get_footer();
?>