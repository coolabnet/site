<?php
/*
Template Name: Blog
*/
?>
<?php get_header();?>
<div class="content-wrapper" style=" background: #c7cedd;">
        <div id="coolab-sobre">
          <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-5"> </div>
            
            <div class="pure-u-1 pure-u-md-3-5"> 
              <h1> Notícias </h1>
              <?php if(have_posts()) :?>
                <?php while(have_posts()) : the_post();?>
              
              <?php get_template_part( 'template-parts/content', get_post_format() );?>
            <?php endwhile; ?>
            <?php else : ?>
                <h2>Não achou</h2>
            <?php endif;?>
            <!--   <div class="blog-post">
                
                <h2> Coolab Camp Redes Libres Mão na Massa</h2>
                <p class="post-data"> 16 de janeiro de 2018</p>
                 
                <p class="post-resumo">Mussum Ipsum, cacilds vidis litro abertis. Sapien in monti palavris qui num significa nadis i pareci latim. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Detraxit consequat et quo num tendi nada. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.</p>

                

                <a href="#"><p>continue lendo</p></a>
              </div>
              <div class="blog-post">

                <h2> Quero ser um voluntário</h2>
                <p class="post-data"> 16 de janeiro de 2018</p>

                 
                <p class="post-resumo">Mussum Ipsum, cacilds vidis litro abertis. Sapien in monti palavris qui num significa nadis i pareci latim. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Detraxit consequat et quo num tendi nada. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.</p>

                <a href="#"><p>continue lendo</p></a>
              </div> -->
            </div>
            <div class="pure-u-1 pure-u-md-1-5"> 
                <h2>Arquivo</h2>
                <ul id="lista-arquivos">
                  <li>Fevereiro de 2018</li>
                  <li>Janeiro de 2018</li>
                  <li>Dezembro de 2017</li>
                </ul>
            </div>
        </div>
        
        </class="pure-g">
    </div>
  <!-- footer vai arqui-->
  <?php get_footer();?>
  </div>
</div>