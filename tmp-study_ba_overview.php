<?php /* Template Name: Study BA Overview */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cuhk_chi
 */

get_header();
?>

<?php

while ( have_posts() ) :
    the_post();
?>


                            
<?php
endwhile; // End of the loop.
?>


<?php
get_footer();
