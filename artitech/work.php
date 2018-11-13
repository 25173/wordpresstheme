<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 30/10/2018
 * Time: 12:37
 */
/* Template Name: work collums */ ?>


<?php get_header();


?>



<div class="row">
<?php
        $args = array(
                'post_type' => 'post',
            'post-status' => 'publish',
            'category_name ' => 'work',
            'class' => 'col-sm-3',
            'paged ' => $paged,
        );
        $arr_post = new WP_Query($args);

        if ($arr_post->have_posts()) :
            while ($arr_post->have_posts()) :
            $arr_post -> the_post();
            ?>
            <article id="post-<?php the_ID()?>" class="col-sm-4">
                <?php
                if (has_post_thumbnail()):
                     the_post_thumbnail();
                endif;
                ?>
                <header>
                    <h1><?php the_title()?></h1>
                </header>
               <div>             <a href="<?php echo the_permalink()?>">read more&raquo</a>
               </div>
            </article>
                <?php

            endwhile;
        endif;
        ?>
</div>



<?php get_footer();