<?php get_header();?>
<div class="content-wrapper" style="top:5%;">
	<?php if( have_posts()) : ?>
		<?php if(is_home() && ! is_front_page() ) : ?>
    	<!--chama os projetos-->
    	<?php #get_template_part('template-parts/coolab','projetos'); ?>
    
    	<?php #get_template_part('template-parts/coolab', 'noticias');?>
    	<!-- coolab-info -->
    	<?php #get_template_part('template-parts/coolab', 'info');?>
    <?php endif;?>

   <div class="pure-g">
   	
            <div class="pure-u-1 pure-u-md-1-5"> </div>
            
            <div class="pure-u-1 pure-u-md-3-5"> 
              <h1> Notícias </h1>
            
           
            	 <?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					// End the loop.
					endwhile;

					// Previous/next page navigation.
					// the_posts_pagination( array(
					// 	'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					// 	'next_text'          => __( 'Next page', 'twentysixteen' ),
					// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					// ) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
            </div>
            <div class="pure-u-1 pure-u-md-1-5"> 
                <!-- <h2>Arquivo</h2>
                <ul id="lista-arquivos">
                  <li>Fevereiro de 2018</li>
                  <li>Janeiro de 2018</li>
                  <li>Dezembro de 2017</li>
                </ul> -->

				<?php get_sidebar(); ?>
            </div>
        
   </div>
   

    <!-- footer vai aqui-->
    <?php get_footer();?>
</div>