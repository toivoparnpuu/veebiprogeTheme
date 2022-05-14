<?php 
get_header();
the_title();
<div class="subpagecontainter">
    the_content();
</div>
?>
<div class="subpagecontainter">
<div>Kõrgus: <?php echo(get_post_meta(get_the_ID(), $key = 'height', $single = true)); ?> </div>
</div>
<?php
get_footer();
?>