<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>




    <section class="section-projetos">
        <div class="container">
            <div class="row row-footer-heading">
                <div class="col">
                    <h2 class="footer-noticias-title">Projetos</h2>
                </div>
                <div class="col">
                    <div class="botao-voltar-projeto-post  btn-footer-projetos-noticias">
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/projeto/") ?>">Ver todos os projetos</a>
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/projeto/") ?>">
                            <img class="img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png"> </a>
                    </div>
                </div>
            </div>
            <section class="projetos-card">
                <div class="row row-projetos">

                  <?php
                  $args = array(
                    'numberposts' => 3,
                    'category_name' => 'projeto'
                  );
                  $latest_posts = get_posts( $args );
                  ?>
                  <?php foreach ( $latest_posts as $curr_post ) : ?>
                      <div class="col-lg-4 col-projetos">
                        <a href="<?php the_permalink($curr_post); ?>">
                          <div class="card-projetos" style="background-image: url('<?php echo get_the_post_thumbnail_url($curr_post); ?>');">
                              <div class="card-body card-projetos-body">
                                  <div class="card-projetos-content">
                                      <h5 class="card-title card-projetos-title footer-projetos-title">
                                        <?php echo get_the_title($curr_post); ?>
                                      </h5>
                                      <p class="card-text card-projetos-text"><?php echo get_the_post_thumbnail_caption($curr_post); ?></p>
                                  </div>
                              </div>
                          </div>
                        </a>
                      </div>
                  <?php endforeach; ?>


                </div>
            </section>
        </div>
    </section>

    <section class="footer footer-noticias">
        <div class="container">
            <div class="row row-footer-heading">
                <div class="col">
                    <h2 class="footer-noticias-title">
                        Últimas notícias
                    </h2>
                </div>
                <div class="col">
                    <div class="botao-voltar-projeto-post  btn-footer-projetos-noticias">
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/noticia/") ?>">Ver todas as notícias</a>
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/noticia/") ?>">
                            <img class="img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png"> </a>
                    </div>
                </div>
            </div>

            <div class="row row-footer-noticias">

                <?php
                $args = array(
                  'numberposts' => 3,
                  'category_name' => 'notícia'
                );
                $noticias_posts = get_posts( $args );
                ?>
                <?php foreach ( $noticias_posts as $curr_post ) : ?>
                  <?php setup_postdata($curr_post); //because https://developer.wordpress.org/reference/functions/get_the_excerpt/#comment-2457 ?>
                  <div class="col-lg-4 col-footer-noticias">
                      <div class="card-footer-noticias">

                        <?php if (get_the_post_thumbnail_url($curr_post)):  ?>
                        <div class="card-footer-noticias-img">
                            <img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url($curr_post); ?>" alt="<?php echo get_the_post_thumbnail_caption($curr_post); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="card-body card-footer-noticias-body">
                          <h5 class="card-title card-footer-noticias-title"><?php echo get_the_title($curr_post); ?>
                          </h5>
                          <h6 class="card-subtitle card-footer-noticias-data mb-2 text-muted"><?php echo get_the_date("",$curr_post); ?>
                          </h6>
                          <p class="card-text card-footer-noticias-text"><?php echo get_the_excerpt($curr_post); ?></p>
                          </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!--
                <div class="col-lg-4 col-footer-noticias">

                    <div class="card-footer-noticias">
                        <div class="card-body card-footer-noticias-body">
                            <h5 class="card-title card-footer-noticias-title">Coolab Camp - Redes Livres Mão Na Massa
                            </h5>
                            <h6 class="card-subtitle card-footer-noticias-data mb-2 text-muted">18 de janeiro de 2018
                            </h6>
                            <p class="card-text card-footer-noticias-text">De 2 a 4 de março, a Coolab vai realizar em
                                Monteiro Lobato (SP) uma imersão para troca horizontal
                                de conhecimentos sobre redes comunitárias, tratando de temas como ativação comunitária,
                                tecnologias
                                de redes sem fio (WiFi) em malha (mesh), criação de provedores comunitários, rádios e
                                televisões
                                digitais comunitárias, entre outros. Nosso objetivo é fomentar a criação de
                                infraestruturas
                                autônomas de telecomunicação, estimulando a</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-footer-noticias">
                    <div class="card card-footer-noticias">
                        <div class="card-footer-noticias-img">
                            <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/assets/temp/noticias/foto2.png" alt="Card image cap">
                        </div>
                        <div class="card-body card-footer-noticias-body">
                            <h5 class="card-title card-footer-noticias-title">Coolab na Battle Mesh</h5>
                            <h6 class="card-subtitle card-footer-noticias-data mb-2 text-muted">18 de janeiro de 2018
                            </h6>
                            <p class="card-text card-footer-noticias-text">Battle Mesh é o encontro anual dos
                                desenvolvedores de sistemas</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-footer-noticias">
                    <div class="card card-footer-noticias">
                        <div class="card-footer-noticias-img">
                            <img class="card-img-top img-fluid" src="<?php echo get_stylesheet_directory_uri();?>/assets/temp/noticias/foto2.png" alt="Card image cap">
                        </div>
                        <div class="card-body card-footer-noticias-body">
                            <h5 class="card-title card-footer-noticias-title">Coolab na Battle Mesh</h5>
                            <h6 class="card-subtitle card-footer-noticias-data mb-2 text-muted">18 de janeiro de 2018
                            </h6>
                            <p class="card-text card-footer-noticias-text">Battle Mesh é o encontro anual dos
                                desenvolvedores de sistemas</p>
                        </div>
                    </div>
                </div>
              -->
            </div>
        </div>

    </section>

    <section class="section-contador justify-content-around align-items-center d-flex justify-content-center">
        <div class="container row align-items-center">
            <div class="contador-grande col-4">
                <span>12</span>
                <p>Comunidades<br>Impactadas</p>
            </div>

            <div class="contador-grande col-4">
                <span>08</span>
                <p>Instalações<br>Complementares</p>
            </div>

            <div class="contador-grande col-4">
                <span>200</span>
                <p>Pessoas<br>Conectadas</p>
            </div>
        </div>

    </section>



<?php get_footer();
