<?php
get_header();
if ( have_posts() ) {
?>
<div class="subpagecontainter">
<?php
while ( have_posts() ) {
  the_post(); ?> 
  
  <h2><?php the_title(); ?></h2>
  
    <div>
    <?php the_excerpt();?>
    <a href="<?php the_permalink(); ?>"> Loe rohkem </a>
    </div>
  
  <?php
    }
  ?>
  </div>
  
  <?php
  }
  ?>
<?php
get_footer();
?>
