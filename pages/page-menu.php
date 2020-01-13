<?php
/*
  Template Name: Menu Page Template
 */

get_header(); ?>

<?php get_template_part('includes/nav'); ?>

<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'menu');

endwhile; // End of the loop.
?>

<?php get_template_part('includes/footer-nav'); ?>

<?php
get_footer();