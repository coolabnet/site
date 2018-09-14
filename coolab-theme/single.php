<?php get_header(); ?>

<div class="content-wrapper" style="top:0;">
	 <div id="coolab-sobre" > 
	 	<div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-5"> </div>
            
            <div class="pure-u-1 pure-u-md-3-5"> 
            		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/coolab', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			}

			// End of the loop.
		endwhile;
		?>
             
              
            </div>
            <div class="pure-u-1 pure-u-md-1-5"> 
                <!-- <h2>Arquivo</h2>
                <ul id="lista-arquivos">
                  <li>Fevereiro de 2018</li>
                  <li>Janeiro de 2018</li>
                  <li>Dezembro de 2017</li>
                </ul> -->

				<?php get_sidebar( 'content-bottom' ); ?>
            </div>
        </div>
	

	</div><!--.site-main -->


</div><!-- .content-area -->

<?php #get_sidebar(); ?>
<?php get_footer(); ?>
