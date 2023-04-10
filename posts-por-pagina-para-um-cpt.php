<?php


// adicionar código no arquivo functions.php

add_filter( 'pre_get_posts', 'custom_change_seguros_posts_per_page' );
/**
 * Change Posts Per Page for seguros Archive.
 * 
 * @param object $query data
 *
 */
function custom_change_seguros_posts_per_page( $query ) {

    if ( $query->is_post_type_archive( 'seguros' ) && ! is_admin() && $query->is_main_query() ) {
          $query->set( 'posts_per_page', '8' );
    }

    return $query;

}
