<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
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
                        <a class="projetos-link" href="projetos.html">Ver todos os projetos</a>
                        <a class="projetos-link" href="projetos.html">
                            <img class="img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png"> </a>
                    </div>
                </div>
            </div>
            <section class="projetos-card">
                <div class="row row-projetos">
                    <div class="col-lg-4 col-projetos">
                        <div class="card-projetos">
                            <div class="card-body card-projetos-body">
                                <div class="card-projetos-content">
                                    <h5 class="card-title card-projetos-title footer-projetos-title">Redes Wifi local
                                        da casa dos meninos</h5>
                                    <p class="card-text card-projetos-text">São Paulo, SP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-projetos">
                        <div class="card-projetos card-dois-projetos">
                            <div class="card-body card-projetos-body">
                                <div class="card-projetos-content">
                                    <h5 class="card-title card-projetos-title footer-projetos-title"> Transmissão de
                                        rádio digital por ondas curtas.</h5>
                                    <p class="card-text card-projetos-text">Amazônia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-projetos">
                        <div class="card-projetos card-tres-projetos">
                            <div class="card-body card-projetos-body">
                                <div class="card-projetos-content">
                                    <h5 class="card-title card-projetos-title footer-projetos-title">Rede comunitária
                                        de Fumaça</h5>
                                    <p class="card-text card-projetos-text">Resende/RJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

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
                        <a class="projetos-link" href="projetos.html">Ver todas as notícias</a>
                        <a class="projetos-link" href="projetos.html">
                            <img class="img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png"> </a>
                    </div>
                </div>
            </div>

            <div class="row row-footer-noticias">
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
