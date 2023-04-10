
<!-- Loop de posts no archive, não precisa de wp_query() -->

<?php if( have_posts() ): while( have_posts() ): the_post(); ?> 

  [adicione aqui o bolo de códigos extraído do post] 

<?php endwhile; endif; ?>

<!-- ------------------------------------------------- -->



<!-- Custom Post Type Loop, pegando todos os posts -->

<?php 
  $args = array(
    'post_type' => array( 'unidades' ),
    'showposts' => -1,
    'nopaging'  => true
  );
  $unidades = new WP_Query ( $args );
?>
<?php if ( $unidades->have_posts() ): while( $unidades->have_posts() ) : $unidades->the_post() ; ?> 

  [adicione aqui o bolo de códigos extraído do post] 

<?php endwhile; endif; wp_reset_query(); ?>

<!-- ------------------------------------------------- -->



<!-- post extraídos pela taxonomia/categoria -->

<?php 
  $args = array(
    'post_type' => array( 'unidades' ),
    'showposts' => -1,
    'nopaging'  => true,
    'tax_query' => array(
      array(
        'taxonomy' => 'category', // slug da taxonomia 
        'field'    => 'slug',
        'terms'    => 'slug-da-catagoria', // slug da categoria
      ),
    ),
  );
  $unidades = new WP_Query ( $args );
?>
<?php if ( $unidades->have_posts() ): while( $unidades->have_posts() ) : $unidades->the_post() ; ?> 

  [adicione aqui o bolo de códigos extraído do post] 

<?php endwhile; endif; wp_reset_query(); ?>

<!-- ------------------------------------------------- -->


<!-- Pegar uma quantidade limitada de posts -->

<?php 
  $args = array(
    'post_type' => array( 'produtos' ), // CPT slug
    'posts_per_page' => 3, // número de posts desejado
    'nopaging'  => false,
  );
  $produtos = new WP_Query ( $args );
?>
<?php if ( $produtos->have_posts() ): while( $produtos->have_posts() ) : $produtos->the_post() ; ?> 

  [adicione aqui o bolo de códigos extraído do post] 

<?php endwhile; endif; wp_reset_query(); ?>

<!-- ------------------------------------------------- -->