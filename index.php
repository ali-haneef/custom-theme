<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
  <div class="container">
  <div class="row">
    <div class="col-6">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      </div>
   
      <article class="articles-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <h4 style="margin-bottom: 3px; font-weight: 200;">By: <?php the_author(); ?></h4>
        </br>
          <?php the_post_thumbnail( 'blog-post' ); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
<?php endif; ?>

  </div>
  </div>
</main>
<?php get_footer(); ?>