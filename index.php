<?php
get_header();
if ( have_posts() ) {
while ( have_posts() ) {
  the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <div class="subpagecontainter">
    <div>
    <?php the_excerpt();?>
    <a href="<?php the_permalink(); ?>"> Loe rohkem </a>
    </div>
  </div>
  <?php
    }
  }
  ?>
<?php
get_footer();
?>
