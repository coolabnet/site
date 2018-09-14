<!--  <h1> Notícias </h1>
              <div class="blog-post">
                <h2> Coolab Camp Redes Libres Mão na Massa</h2>
                <p class="post-data"> 16 de janeiro de 2018</p>
                <p class="post-resumo">Mussum Ipsum, cacilds vidis litro abertis. Sapien in monti palavris qui num significa nadis i pareci latim. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Detraxit consequat et quo num tendi nada. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.</p>

                
              </div>
 -->
<article id="post-<?php the_ID(); ?>" <?php #post_class(); ?> class="blog-post">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php # twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		// wp_link_pages( array(
		// 	'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
		// 	'after'       => '</div>',
		// 	'link_before' => '<span>',
		// 	'link_after'  => '</span>',
		// 	'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
		// 	'separator'   => '<span class="screen-reader-text">, </span>',
		// ) );
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

</article><!-- #post-## -->
