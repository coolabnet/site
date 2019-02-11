<?php
/**
 * Template part for displaying posts
 *
*/

?>
<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> , <?php the_author(); ?></p>

	<?php if (is_single()): ?>

		<p class="blog-post-content"><?php the_content(); ?></p>


	<?php else : ?>

  <p class="blog-post-content"<?php the_excerpt(); ?>
		<br><?php the_shortlink ( $text="Leia aqui" ); ?></p>

	<?php endif; ?>

</div><!-- /.blog-post -->
