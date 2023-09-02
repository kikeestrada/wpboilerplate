<section>
	<h1>This is a Boilerplate developed by Enrique Estrada to create Wordpress Themes from scratch</h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p>Contenido de cada Post</p>
    <hr>
    <article>
      <h2><?php the_title(); ?></h2>
      <p></p>
    </article>
    <?php endwhile; else:?>
      <p>El contenido no existe</p>
      <?php endif;?>
</section>
