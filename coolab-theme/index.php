<?php get_header();?>
<main class="main">
<div class="container-menor">
  <h1>Notícias</h1>
  <?php if(have_posts()) :?>
    <?php while(have_posts()) : the_post();?>

  <?php get_template_part( 'template-parts/post/content', get_post_format() );?>
<?php endwhile; ?>
<?php else : ?>
    <h2>Não achou</h2>
<?php endif;?>

</div>
</main>
<?php get_footer();?>
