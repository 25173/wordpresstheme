

<article class="post <?php if (has_post_thumbnail()){ ?>  has-thumbnail <?php }?>">

    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small_thumbnails'); ?></a>

    </div>

    <h2><a href=" <?php the_permalink() ?>"><?php the_title(); ?></a></h2>

    <p class="post-info"> <?php the_time('F j, Y g:i a');?> |  by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a> | posted in

		<?php
		$catergories = get_the_category( );
		$separator = ", ";
		$output = '';


		if ($catergories){
			foreach ($catergories as $catergory){
				$output .= '<a href=" ' . get_category_link($catergory->term_id) .' ">' . $catergory->cat_name . '</a>' . $separator ;
			}
			echo trim($output,$separator);
		}

		?>
    </p>

	<?php

	if (is_search() or is_archive()){
		?>   <p>
			<?php echo get_the_excerpt();?>
            <a href="<?php echo the_permalink()?>">read more&raquo</a>
        </p>
		<?php
	}else{
		if ($post->post_excerpt){
			?>   <p> <?php echo get_the_excerpt();?>
                <a href="<?php echo the_permalink()?>">read more&raquo</a>
            </p> <?php
		}else{
			the_content();
		}
	}
	?>




</article>
