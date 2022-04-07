<?php
get_header();
if ( have_posts() ) {
while ( have_posts() ) {
the_post(); ?>
<h2><?php the_title(); ?></h2>
<section class="sisu">

<?php the_excerpt();?>
<a href="<?php the_permalink(); ?>"> Loe rohkem </a>
</section>
<?php
    }
  }
  ?>
<?php
get_footer();
?>
