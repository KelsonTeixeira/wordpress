

<!-- // SINGLE PAGE // -->
  
<!-- //   Exibir a foto do autor do POST -->
  <?= get_avatar( get_post_field( 'post_author', get_the_ID() )); ?>

<!-- // Exibir o primeiro e o último nome do autor na página single.php -->
  <?= get_the_author_meta('first_name', $post->post_author); ?> 
  <?= get_the_author_meta('last_name', $post->post_author); ?>

<!-- // Exibir a descrição do autor na página single.php -->
  <?= get_the_author_meta('user_description', $post->post_author); ?>

<!-- // Exibir a data de publicação do post -->
  <?= get_the_date();?>

<!-- // thumbnail url -->
  <?= post_thumbnail_url( 'full' ); ?>

<!-- // exibir o conteúdo do post -->
  <?php the_content(); ?>

<!-- // ARCHIVE // -->

<!-- //exibir lista de categorias -->
  <?php
    $terms = get_terms([
      'taxonomy' => 'category', // taxonomia desejada
      'hide_empty' => true // se quer que apareça as categorias que não tem post atribuido
    ]);
  ?>

  <?php foreach($terms as $term): ?>
    <p>
      <?=  $term->name; ?>
      <?=  $term->slug; ?>
    </p>
  <?php endforeach; ?>

<!-- //exibir primeira categoria de um post -->
  <?= get_the_category()[0]->name; ?>

<!-- // pegar o link de um post -->
  <?= get_permalink(); ?>

<!-- // paginação no archive -->
  <!-- pagination -->
    <nav>
      <?php the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Próxima', 'textdomain' ),
      ) ); ?>
    </nav>
  <!-- pagination -->

<!--  -->



<!-- //CATEGORY // -->

<!--  // pegar o slug da categoria na página category.php  -->
 <?= get_queried_object()->slug ?>
