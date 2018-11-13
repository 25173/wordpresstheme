<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 07-05-18
 * Time: 14:32
 */





//get top ancerstor
function get_top_ancestor_id(){

    global $post;

    if ($post->post_parrent){
        $ancestor = array_reverse(get_post_ancestors($post->ID));
        return $ancestor[0];
    }

    return $post->ID;
}

// foes page have childeren
function has_children(){
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}


// costumize exept words length
function custom_excerpt_length(){
    return 25;
}

add_filter('excerpt_length',custom_excerpt_length());

// add our widgets locations

function ourWidgetsInit(){

    register_sidebar(array(
        'name'=>'Sidebar',
        'id' => 'Sidebar1'
    ));
}

add_action('ourWidgets_init','ourWidgetsInit');