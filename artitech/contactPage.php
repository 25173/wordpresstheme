<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 30/10/2018
 * Time: 11:55
 */
/* Template Name: inhoud */ ?>


<?php get_header(); ?>


<?php
while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
    <div class="entry-content-page">
        <?php the_content(); ?> <!-- Page Content -->
    </div><!-- .entry-content-page -->

<?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>




<?php get_footer();

